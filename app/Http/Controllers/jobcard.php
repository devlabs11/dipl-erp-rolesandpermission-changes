<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
use Response;
use Carbon\Carbon;
use App\Models\JobCardSpecificDetailsCheck;
use App\Models\JobCardSpecificDetails;
use App\Models\JobCardProcessSelectionPrePress;
use App\Models\JobCardProcessSelectionPostPress;
use App\Models\JobCardModel;
use App\Models\JobCardMaterialRequirement;
use App\Models\JobCardPaper;
use App\Models\JobCardPosition;
use App\Models\JobCardPostPress;
use App\Models\JobCardPostPressPackagingDetails;
use App\Models\JobCardPrePress;
use App\Models\JobCardPrePressColor;
use App\Models\JobCardPress;
use App\Models\JobCardPressInkDetails;
use App\Models\JobCardPressPaper;
use App\Models\JobCardPressSpareToUse;


class jobcard extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('manage_job_cards');

    //         if (!$acces_management->allow_access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index(){
        // $data['acces_management'] = $this->acces_management;
        // $data['module_id'] = '40.0';
        $list = \Helper::getPermission('jc-list') ? 1 : 0;
        if($list == 1){
            return view('jobcard.index');
        }else{
            return redirect('/dashboard');
        }
    }

    public function jobcarddata()
    {
        //die("here");
        $start=0;
        $length=10;
        $search_value="";
        if(isset($_GET))
        {
            $start=$_GET['start'];
            $length=$_GET['length'];
            $search_value=$_GET['search']['value'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {
            $search_string="where jc.job_card_no LIKE '%$search_value%' or jc.id LIKE '%$search_value%' or jc.unique_id LIKE '%$search_value%' or jc.job_card_title LIKE '%$search_value%'  or jc.product_category LIKE '%$search_value%' or tp.product_type LIKE '%$search_value%'";
            $tbldata = DB::select("select jc.width as width,jc.height as height,jc.part_ply as part_ply,jc.job_card_no as job_card_no,jc.type as jobtype,jc.id as jobcardid,jc.unique_id as jobcarduniqueid,jc.job_card_title as jobcardtitle,jc.product_category as jobcardproductcategory,tp.product_type as jobcardproducttype from tbl_job_cart jc left join tbl_product_category pc on pc.id=jc.product_category left join tbl_product tp on tp.id=jc.product_type $search_string order by jc.id desc limit $start,$length");

            $process_count = DB::select("select count(*) as totalcount from tbl_job_cart jc left join tbl_rm_product_category rpc on rpc.id=jc.product_category left join tbl_product tp on tp.id=jc.product_type $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select jc.width as width,jc.height as height,jc.part_ply as part_ply,jc.job_card_no as job_card_no,jc.type as jobtype,jc.id as jobcardid,jc.unique_id as jobcarduniqueid,jc.job_card_title as jobcardtitle,pc.product_category as jobcardproductcategory,tp.product_type as jobcardproducttype from tbl_job_cart jc left join tbl_product_category pc on pc.id=jc.product_category left join tbl_product tp on tp.id=jc.product_type order by jc.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_job_cart jc ");
        }




        foreach($process_count as $process_count) {
            $totalcount=$process_count->totalcount;
        }

        // return $tbldata;
        $output = array(
            //"sEcho" => 0,
            "iTotalRecords" =>10,
            "iTotalDisplayRecords" => $totalcount,
            "aaData" => array()
        );
        $row = array();

        // $acces_management = $this->acces_management;

        foreach($tbldata as $tbldata) {

            $id=$tbldata->jobcardid;
            $job_card_no=$tbldata->job_card_no;
            $jobcarduniqueid=$tbldata->jobcarduniqueid;

            $jobcardtitle=$tbldata->jobcardtitle;
            $jobcardproductcategory=$tbldata->jobcardproductcategory;
            $jobcardproducttype=$tbldata->jobcardproducttype;
            $jobtype=$tbldata->jobtype;
            $width=$tbldata->width;
            $height=$tbldata->height;
            $part_ply=$tbldata->part_ply;

            $size=$width." X ".$height." X ".$part_ply;

            $size=ltrim($size, " X ");


            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $jobcarduniqueid;
            $row[] = $job_card_no;

            $row[] = $jobcardtitle;
            $row[] = $size;


            $row[] = $jobcardproductcategory;
            $row[] = $jobcardproducttype;

            $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
            $delete = \Helper::getPermission('jc-delete') ? 1 : 0;
            $view = \Helper::getPermission('jc-view') ? 1 : 0;
            $duplicate = \Helper::getPermission('jc-duplicate') ? 1 : 0;

            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit == 1 || $delete == 1 || $view == 1 || $duplicate == 1){
                if($edit == 1){
                    if($jobtype=="Thermal")
                    {
                        $edit_url  = url("/thermal_jobcardaddedit/{$id}/general");
                    }
                    else if($jobtype=="Computer Stationary")
                    {
                        $edit_url  = url("/computer_stationary_jobcardaddedit/{$id}/general");
                    }
                    else if($jobtype=="Check")
                    {
                        $edit_url  = url("/checkjobcardaddedit/{$id}/general");
                    }
                    else
                    {
                        $edit_url  = url("/jobcardaddedit/{$id}/general");
                    }

                    $action.='<a href="'.$edit_url.'" target="_blank" class="menu-link flex-stack px-3" title="Edit" style="font-weight:normal !important;"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete == 1){
                    $edit_url  = url("/jobcardaddedit/{$id}/general");
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
                if( $view == 1)
                {
                    if( $view == 1)
                    {
                        if($jobtype=="Thermal")
                        {
                            $pdf_url  = url("/thermalgeneratejobcardPDF/{$id}");
                            $hfpdf_url  = url("/thermalgeneratejobcardPDFwithhf/{$id}");
                        }
                        else if($jobtype=="Computer Stationary")
                        {
                            $pdf_url  = url("/csgeneratejobcardPDF/{$id}");
                            $hfpdf_url  = url("/csgeneratejobcardPDFwithhf/{$id}");
                        }
                        else if($jobtype=="Check")
                        {
                            $pdf_url  = url("/chequegeneratejobcardPDF/{$id}");
                            $hfpdf_url  = url("/chequegeneratejobcardPDFwithhf/{$id}");
                        }
                        else
                        {
                            $pdf_url  = url("/generatejobcardPDF/{$id}");
                            $hfpdf_url  = url("/generatejobcardPDFwithhf/{$id}");
                        }


                        $action.='<a href="'.$pdf_url.'" target="_blank" class="menu-link flex-stack px-3" title="Print" style="font-weight:normal !important;"><i class="fa fa-print"></i></a>';
                        // <br/> <a href="'.$hfpdf_url.'" class="menu-link flex-stack px-3" title="Print With HF" style="font-weight:normal !important;"><i class="fa fa-file-pdf-o"></i></a><br/>';
                    }
                    else if( $view == 1)
                    {
                        $pdf_url  = url("/generatejobcardPDF/{$id}");
                        //$hfpdf_url  = url("/generatePDFwithhf/{$id}");
                        $action.='<a href="'.$pdf_url.'" target="_blank" class="menu-link flex-stack px-3" title="Print" style="font-weight:normal !important;"><i class="fa fa-print"></i></a><br/>';
                    }
                    else
                    {
                        //$pdf_url  = url("/generatePDF/{$id}");
                        $hfpdf_url  = url("/generatejobcardPDFwithhf/{$id}");
                        // $action.='<a href="'.$hfpdf_url.'" class="menu-link flex-stack px-3" title="Print With HF" style="font-weight:normal !important;"><i class="fa fa-file-pdf-o"></i></a><br/>';
                    }
                }
                if($duplicate == 1){
                    $url = route('job-card-duplicate', ['id' => $id]);

                    $action.='<a href="'.$url.'" class="menu-link flex-stack px-3" title="Duplicate" style="font-weight:normal !important;"><i class="fa fa-copy" style="color:rgb(12, 53, 11);"> </i></a>';

                }
            }
            else
            {
                // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                //                 Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                //             </button>';
            }


            $row[]=$action;
            $output['aaData'][] = $row;
        }
        echo json_encode($output);
    }

    public function duplicate($id){
        DB::beginTransaction();
        try {
            $jobCard = JobCardModel::find($id);
            $lastId = JobCardModel::latest('id')->first();
            $year = date('y');
            $year1 = date('y')+1;
            // \Helper::currentFincYear();
            if($lastId->id < 10){
                $uq = "0".$lastId->id+1;
            }else {
                $uq = $lastId->id+1;
            }
            $prefix = '';
            $prefix = "JC/".$year."-".$year1."/".$uq;

            //Duplicate record code
            $newJobCard = $jobCard->replicate()->fill([
                'unique_id' => $prefix,
                'job_card_no' => '',
                'addedddttm' => Carbon::now()
            ]);
            $newJobCard->save();
            $jc_id = $newJobCard->id;

            //Job Card Id used Model
            $modelNames = [
                'JobCardPaper',
                'JobCardPosition',
                'JobCardSpecificDetails',
                'JobCardSpecificDetailsCheck',
                'JobCardMaterialRequirement',
                'JobCardPrePress',
                'JobCardPress',
                'JobCardPostPress',
                'JobCardPostPressPackagingDetails',
                'JobCardProcessSelectionPrePress',
                'JobCardProcessSelectionPostPress',
                'JobCardProcessSelectionPress',
            ];
            $oldIds = [];
            $insertedIds = []; // Initialize an array to store inserted IDs

            foreach ($modelNames as $modelName) {
                $model = "App\\Models\\$modelName"; // Define the fully-qualified model class
                $records = $model::where('job_card_id', $id)->get();
                $modelOldIds = [];
                $modelInsertedIds = []; // Initialize an array to store inserted IDs for this model

                foreach ($records as $record) {
                    $modelOldIds[] = $record->id;
                    $newRecord = $record->replicate(); // Replicate the record
                    $newRecord->job_card_id = $jc_id; // Assign the new job_card_id
                    $newRecord->save(); // Save the new record

                    $modelInsertedIds[] = $newRecord->id; // Store inserted ID in the model's array
                }
                $oldIds[$modelName] = $modelOldIds;
                $insertedIds[$modelName] = $modelInsertedIds; // Store model's array in the main array
            }
            // dd($insertedIds,$oldIds);

            // Access inserted IDs for each model
            $jobCardPaperInsertedIds = $insertedIds['JobCardPaper'][0] ?? '';
            $jobCardPositionInsertedIds = $insertedIds['JobCardPosition'][0] ?? '';
            $jobCardSpecificDetailsInsertedIds = $insertedIds['JobCardSpecificDetails'][0] ?? '';
            $jobCardSpecificDetailsCheckInsertedIds = $insertedIds['JobCardSpecificDetailsCheck'][0] ?? '';
            $jobCardMaterialRequirementInsertedIds = $insertedIds['JobCardMaterialRequirement'][0] ?? '';
            $jobCardPrePressInsertedIds = $insertedIds['JobCardPrePress'][0] ?? '';
            $jobCardPressInsertedIds = $insertedIds['JobCardPress'][0] ?? '';
            $jobCardPostPressInsertedIds = $insertedIds['JobCardPostPress'][0] ?? '';
            $jobCardPostPressPackagingDetailsInsertedIds = $insertedIds['JobCardPostPressPackagingDetails'][0] ?? '';
            $jobCardProcessSelectionPrePressInsertedIds = $insertedIds['JobCardProcessSelectionPrePress'][0] ?? '';
            $jobCardProcessSelectionPostPressInsertedIds = $insertedIds['JobCardProcessSelectionPostPress'][0] ?? '';


            $jobCardPaperInsertedIdsOld = isset($oldIds['JobCardPaper']) && count($oldIds['JobCardPaper']) > 0 ? [$oldIds['JobCardPaper'][0]] : [];
            $jobCardPositionInsertedIdsOld = isset($oldIds['JobCardPosition']) && count($oldIds['JobCardPosition']) > 0 ? [$oldIds['JobCardPosition'][0]] : [];
            $jobCardSpecificDetailsInsertedIdsOld = isset($oldIds['JobCardSpecificDetails']) && count($oldIds['JobCardSpecificDetails']) > 0 ? [$oldIds['JobCardSpecificDetails'][0]] : [];
            $jobCardSpecificDetailsCheckInsertedIdsOld = isset($oldIds['JobCardSpecificDetailsCheck']) && count($oldIds['JobCardSpecificDetailsCheck']) > 0 ? [$oldIds['JobCardSpecificDetailsCheck'][0]] : [];
            $jobCardMaterialRequirementInsertedIdsOld = isset($oldIds['JobCardMaterialRequirement']) && count($oldIds['JobCardMaterialRequirement']) > 0 ? [$oldIds['JobCardMaterialRequirement'][0]] : [];
            $jobCardPrePressInsertedIdsOld = isset($oldIds['JobCardPrePress']) && count($oldIds['JobCardPrePress']) > 0 ? [$oldIds['JobCardPrePress'][0]] : [];
            $jobCardPressInsertedIdsOld = isset($oldIds['JobCardPress']) && count($oldIds['JobCardPress']) > 0 ? [$oldIds['JobCardPress'][0]] : [];
            $jobCardPostPressInsertedIdsOld = isset($oldIds['JobCardPostPress']) && count($oldIds['JobCardPostPress']) > 0 ? [$oldIds['JobCardPostPress'][0]] : [];
            $jobCardPostPressPackagingDetailsInsertedIdsOld = isset($oldIds['JobCardPostPressPackagingDetails']) && count($oldIds['JobCardPostPressPackagingDetails']) > 0 ? [$oldIds['JobCardPostPressPackagingDetails'][0]] : [];
            $jobCardProcessSelectionPrePressInsertedIdsOld = isset($oldIds['JobCardProcessSelectionPrePress']) && count($oldIds['JobCardProcessSelectionPrePress']) > 0 ? [$oldIds['JobCardProcessSelectionPrePress'][0]] : [];
            $jobCardProcessSelectionPostPressInsertedIdsOld = isset($oldIds['JobCardProcessSelectionPostPress']) && count($oldIds['JobCardProcessSelectionPostPress']) > 0 ? [$oldIds['JobCardProcessSelectionPostPress'][0]] : [];

            $papers = JobCardPressPaper::whereIn('press_id', $jobCardPressInsertedIdsOld)
                ->whereIn('general_paper_id', $jobCardPaperInsertedIdsOld)
                ->get();


            $colors = JobCardPrePressColor::whereIn('pre_press_id', $jobCardPrePressInsertedIdsOld)
            ->get();



            $spares = JobCardPressSpareToUse::whereIn('press_id', $jobCardPressInsertedIdsOld)
            ->get();

            // Duplicate JobCardPressPaper records
            if (count($papers)) {
                foreach ($papers as $paper) {
                    $newPaper = $paper->replicate();
                    $newPaper->press_id = $jobCardPressInsertedIds;
                    $newPaper->general_paper_id = $jobCardPaperInsertedIds;
                    $newPaper->save();
                }
            }

            // Duplicate JobCardPrePressColor records
            if (count($colors)) {
                foreach ($colors as $color) {
                    $newColor = $color->replicate();
                    $newColor->pre_press_id = $jobCardPrePressInsertedIds;
                    // $newColor->general_paper_id = $jobCardPaperInsertedIds;
                    $newColor->save();
                    $newColorId = $newColor->id;

                    // Duplicate related JobCardPressInkDetails
                    $oldInks = JobCardPressInkDetails::whereIn('press_id', $jobCardPressInsertedIdsOld)
                        ->where('pre_press_color_id', $color->id)
                        ->get();

                    foreach ($oldInks as $oldInk) {
                        $newInk = $oldInk->replicate();
                        $newInk->press_id = $jobCardPressInsertedIds;
                        $newInk->pre_press_color_id = $newColorId;
                        $newInk->save();
                        // dd($jobCardPressInsertedIds,$jobCardPressInsertedIds,$color,$newColorId,$oldInks, $newInk);
                    }
                }
            }

            // Duplicate JobCardPressSpareToUse records
            if (count($spares)) {
                foreach ($spares as $spare) {
                    $newSpare = $spare->replicate();
                    $newSpare->press_id = $jobCardPressInsertedIds;
                    // $newSpare->general_paper_id = $jobCardPaperInsertedIds;
                    $newSpare->save();
                }
            }

        } catch(Exception $e){
            DB::rollback();
            Log::info("jobcard controller file::duplicate");
            $message = $e->getMessage();
            Log::error('Exception Message: '. $message);

            $code = $e->getCode();
            Log::error('Exception Code: '. $code);

            $string = $e->__toString();
            Log::error('Exception String: '. $string);
            $file = $e->getFile();
            Log::error('Exception file: '. $file);
            $trace = $e->getTrace();
            Log::error('Exception trace: '. var_dump($trace));

            return 0;
        }
        DB::commit();
        return redirect()->back();
    }


    function delete(Request $request)
    {
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        // $acces_management = $this->acces_management;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_cart")->delete($id);
        DB::table('tbl_job_card_paper')->where('job_card_id', $id)->delete();
        DB::table('tbl_job_card_position')->where('job_card_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteplants(Request $request)
    {
        //die("here");
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        // $acces_management = $this->acces_management;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_plants")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteimage(Request $request)
    {
        //die("here");
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        // $acces_management = $this->acces_management;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_specific_details")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function downloadimage(Request $request)
    {


        $id=$request->request->get('id');

        $tbl_job_card_specific_details = DB::select("select * from tbl_job_card_specific_details where id=$id");

        foreach($tbl_job_card_specific_details as $tbl_job_card_specific_details)
        {
            $image=$tbl_job_card_specific_details->img;
        }
        $file =base_path()."/assets/uploadimage/specific_details/$image";

        //Storage::disk('local')->put($image, file_get_contents($file));



        //$headers = ['Content-Type: image/jpeg'];
        $headers = array(
            //'Content-Type: application/pdf',
            //'Content-Type: image/jpeg'
          );

        if (file_exists($file)) {

            return Response::download($file, $image, $headers);
            // $message="File download successfully.";
            // $alert_type="error";
            // echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
        } else {
            //echo('File not found.');
            $message="File not found.";
            $alert_type="error";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
        }

    }


    function deletepaper(Request $request)
    {
        //die("here");
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        // $acces_management = $this->acces_management;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_paper")->delete($id);

        DB::table('tbl_job_card_press_paper')->where('general_paper_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function delete_material_requirement(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_material_requirement")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deletecolor(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_pre_press_color")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deletepresscoatingdetails(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_press_coating")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deletepresssparetouse(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_press_spare_to_use")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }



    function record_actions(Request $request)
    {
        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        $data = array('status'=>0);
        //var_dump($id);die;

        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table('tbl_company')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;
                //$query = DB::getQueryLog();
                //print_r($query);

                //var_dump($result);die;

                // DB::table("$tbl")->where('id',$id)->update($data);
                // $query = DB::getQueryLog();
                // echo $query;die;
            }

            //die("here");
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));

            //return redirect()->back()->with('message', 'Status Updated Successfuly!');
        }
        else if($opt==2)
        {
            $status=0;
            foreach($id as $id) {

                $result = DB::table('tbl_company')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;
            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
            //return redirect()->back()->with('message', 'Status updated Successfuly!');
        }
        else
        {
            $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
            // $acces_management = $this->acces_management;
            if($edit != 1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_job_cart")->delete($id);
                    DB::table('tbl_job_card_paper')->where('job_card_id', $id)->delete();
                    DB::table('tbl_job_card_position')->where('job_card_id', $id)->delete();
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitjobcard(Request $request)
    {
        // dd($request);
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('edit_id');

        $product_category=$request->request->get('product_category');
        $product_type=$request->request->get('product_type');
        $job_card_no=$request->request->get('job_card_no');
        $job_card_title=$request->request->get('job_card_title');
        $company_product_no=$request->request->get('company_product_no');
        $product_name_by_customer=$request->request->get('product_name_by_customer');
        $width=$request->request->get('width');
        $width_unit=$request->request->get('width_unit');
        $height=$request->request->get('height');
        $height_unit=$request->request->get('height_unit');
        $part_ply=$request->request->get('part_ply');
        // $part_ply=count($_POST['paper']['paper_thick']);
        $item_type=$request->request->get('item_type');
        $special_instructions=$request->request->get('special_instructions');
        $perforation=$request->request->get('perforation');
        $type="jobcard";





        if($edit_id=="0")
        {

            $data = array();
            $data['product_category']= $product_category;
            $data['product_type']= $product_type;
            $data['job_card_no']= $job_card_no;
            $data['job_card_title']= $job_card_title;
            $data['company_product_no']= $company_product_no;
            $data['product_name_by_customer']= $product_name_by_customer;
            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['height']= $height;
            $data['height_unit']= $height_unit;
            $data['part_ply']= $part_ply;
            $data['item_type']= $item_type;

            $data['special_instructions']= $special_instructions;
            $data['perforation']= $perforation;
            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_job_cart")->insert($data);

            if($query_insert==true)
            {

                $inserted_job_card_id = DB::getPdo()->lastInsertId();

                $year = date('y');
                $year1 = date('y')+1;
                $unique_id="JC/$year-$year1/$inserted_job_card_id";




                $result = DB::table("tbl_job_cart")
                ->where('id', $inserted_job_card_id)
                ->update([
                    'unique_id'=> $unique_id
                ]);



                if(isset($_POST['position']['position_name']))
                {
                    //die("here");

                    foreach($_POST['position']['position_name'] as $key=>$value) {


                        $position_id=$_POST['position']['position_id'][$key];
                        $position_name=$_POST['position']['position_name'][$key];
                        $direction=$_POST['position']['direction'][$key];

                        $positiondata['job_card_id']=$inserted_job_card_id;
                        $positiondata['position']=$position_name;
                        $positiondata['direction']=$direction;

                        $position_query_insert = DB::table("tbl_job_card_position")->insert($positiondata);
                    }
                }


                if(isset($_POST['paper']['paper_thick']))
                {
                    //die("here");

                    foreach($_POST['paper']['paper_thick'] as $key=>$value) {


                        $paper_id=$_POST['paper']['paper_id'][$key];
                        $paper_thick=$_POST['paper']['paper_thick'][$key];
                        $paper_make=$_POST['paper']['paper_make'][$key];
                        $color_shade=$_POST['paper']['color_shade'][$key];
                        $paper_width=$_POST['paper']['paper_width'][$key];
                        $paper_unit=$_POST['paper']['unit'][$key];

                        $front_side_color ="";

                        if(isset($_POST['paper']['front_side_color'][$key]))
                        {
                            $front_side_color_arr=$_POST['paper']['front_side_color'][$key];

                            if(empty($front_side_color_arr))
                            {
                                $front_side_color ="";
                            }
                            else
                            {
                                $front_side_color = implode(',', $front_side_color_arr);
                            }
                        }


                        $back_side_color ="";
                        if(isset($_POST['paper']['back_side_color'][$key]))
                        {
                            $back_side_color_arr=$_POST['paper']['back_side_color'][$key];

                            if(empty($back_side_color_arr))
                            {
                                $back_side_color ="";
                            }
                            else
                            {
                                $back_side_color = implode(',', $back_side_color_arr);
                            }
                        }

                        $front_side_coating=$_POST['paper']['front_side_coating'][$key];
                        $front_side_coating = '';

                        $back_side_coating=$_POST['paper']['back_side_coating'][$key];
                        $back_side_coating='';
                        $copy_mark=$_POST['paper']['copy_mark'][$key];
                        $remark=$_POST['paper']['remark'][$key];

                        $paperdata['job_card_id']=$inserted_job_card_id;
                        $paperdata['paper_thick']=$paper_thick;
                        $paperdata['paper_make']=$paper_make;

                        $paperdata['color_shade']=$color_shade;
                        $paperdata['front_side_color']=$front_side_color;
                        $paperdata['back_side_color']=$back_side_color;
                        $paperdata['front_side_coating']=$front_side_coating;
                        $paperdata['back_side_coating']=$back_side_coating;
                        $paperdata['copy_mark']=$copy_mark;
                        $paperdata['remark']=$remark;
                        $paperdata['width']=$paper_width;
                        $paperdata['unit']=$paper_unit;


                        if($paper_thick=="" && $paper_make=="" && $paper_make=="" && $color_shade=="" && $front_side_color=="" && $back_side_color=="" && $copy_mark=="" && $remark=="")
                        {
                            $part_ply=$part_ply-1;
                            $updatejobcard['part_ply']= $part_ply;
                            $result = DB::table("tbl_job_cart")
                            ->where('id', $edit_id)
                            ->update($updatejobcard);
                        }
                        else
                        {
                            $paper_query_insert = DB::table("tbl_job_card_paper")->insert($paperdata);
                        }


                    }
                }



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_details_id'=>$inserted_job_card_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
        }
        else
        {

            $date=date("Y/m/d h:m:s");

            //var_dump($data);die;

            $data['product_category']= $product_category;
            $data['product_type']= $product_type;
            $data['job_card_no']= $job_card_no;
            $data['job_card_title']= $job_card_title;
            $data['company_product_no']= $company_product_no;
            $data['product_name_by_customer']= $product_name_by_customer;
            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['height']= $height;
            $data['height_unit']= $height_unit;
            $data['part_ply']= $part_ply;
            $data['item_type']= $item_type;
            $data['special_instructions']= $special_instructions;
            $data['perforation']= $perforation;
            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;


            $result = DB::table("tbl_job_cart")
            ->where('id', $edit_id)
            ->update($data);


            if(isset($_POST['position']['position_name']))
            {

                foreach($_POST['position']['position_name'] as $key=>$value) {


                    //echo $key;die;
                    $position_id=$_POST['position']['position_id'][$key];
                    $position_name=$_POST['position']['position_name'][$key];
                    $direction=$_POST['position']['direction'][$key];



                    if($position_id==0)
                    {
                        $position_data['job_card_id']=$edit_id;
                        $position_data['position']=$position_name;
                        $position_data['direction']=$direction;


                        $position_query_insert = DB::table("tbl_job_card_position")->insert($position_data);
                    }
                    else
                    {

                        $position_data['position']=$position_name;
                        $position_data['direction']=$direction;

                        $result = DB::table("tbl_job_card_position")
                        ->where('id', $position_id)
                        ->update($position_data);
                    }

                }

            }


            if(isset($_POST['paper']['paper_thick']))
            {

                foreach($_POST['paper']['paper_thick'] as $key=>$value) {


                    //echo $key;die;
                    $paper_id=$_POST['paper']['paper_id'][$key];
                    $paper_thick=$_POST['paper']['paper_thick'][$key];
                    $paper_make=$_POST['paper']['paper_make'][$key];
                    $color_shade=$_POST['paper']['color_shade'][$key];
                    $paper_width=$_POST['paper']['paper_width'][$key];
                    $paper_unit=$_POST['paper']['unit'][$key];
                    
                    //$front_side_color=$_POST['paper']['front_side_color'][$key];
                    $front_side_color ="";
                    if(isset($_POST['paper']['front_side_color'][$key]))
                    {
                        $front_side_color_arr=$_POST['paper']['front_side_color'][$key];

                        if(empty($front_side_color_arr))
                        {
                            $front_side_color ="";
                        }
                        else
                        {
                            $front_side_color = implode(',', $front_side_color_arr);
                        }

                    }

                    $back_side_color ="";
                    if(isset($_POST['paper']['back_side_color'][$key]))
                    {
                        $back_side_color_arr=$_POST['paper']['back_side_color'][$key];

                        if(empty($back_side_color_arr))
                        {
                            $back_side_color ="";
                        }
                        else
                        {
                            $back_side_color = implode(',', $back_side_color_arr);
                        }
                    }
                    $front_side_coating=$_POST['paper']['front_side_coating'][$key];
                    $back_side_coating=$_POST['paper']['back_side_coating'][$key];
                    $copy_mark=$_POST['paper']['copy_mark'][$key];
                    $remark=$_POST['paper']['remark'][$key];

                    if($paper_id==0)
                    {

                        if($paper_thick=="" && $paper_make=="" && $paper_make=="" && $color_shade=="" && $front_side_color=="" && $back_side_color=="" && $copy_mark=="" && $remark=="")
                        {
                            // dd('else in if');
                            $part_ply=$part_ply-1;
                            $updatejobcard['part_ply']= $part_ply;
                            $result = DB::table("tbl_job_cart")
                            ->where('id', $edit_id)
                            ->update($updatejobcard);
                        }
                        else
                        {

                            $paper_data['job_card_id']=$edit_id;
                            $paper_data['paper_thick']=$paper_thick;
                            $paper_data['paper_make']=$paper_make;
                            $paper_data['color_shade']=$color_shade;
                            $paper_data['front_side_color']=$front_side_color;
                            $paper_data['back_side_color']=$back_side_color;
                            $paper_data['front_side_coating']=$front_side_coating;
                            $paper_data['back_side_coating']=$back_side_coating;
                            $paper_data['copy_mark']=$copy_mark;
                            $paper_data['remark']=$remark;
                            $paper_data['width']=$paper_width;
                            $paper_data['unit']=$paper_unit;


                            $paper_query_insert = DB::table("tbl_job_card_paper")->insert($paper_data);
                        }

                    }
                    else
                    {

                        $paper_data['paper_thick']=$paper_thick;
                        $paper_data['paper_make']=$paper_make;
                        $paper_data['color_shade']=$color_shade;
                        $paper_data['front_side_color']=$front_side_color;
                        $paper_data['back_side_color']=$back_side_color;
                        $paper_data['front_side_coating']=$front_side_coating;
                        $paper_data['back_side_coating']=$back_side_coating;
                        $paper_data['copy_mark']=$copy_mark;
                        $paper_data['remark']=$remark;
                        $paper_data['width']=$paper_width;
                        $paper_data['unit']=$paper_unit;

                        $result = DB::table("tbl_job_card_paper")
                        ->where('id', $paper_id)
                        ->update($paper_data);
                    }

                }

            }






            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_details_id'=>$edit_id));

            // if($result!=0)
            // {
            //     echo "succ";die;
            // }
            // else
            // {
            //     echo "error";die;
            // }
        }


    }


    function submitspecificdetails(Request $request){
        $edit_id=$request->request->get('general_details_id');
        $file_title=$request->request->get('file_title');
        $img_to_upload="";
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            if($file_title!=""){
                $img_to_upload = $file_title. '.' . $image->getClientOriginalExtension();
            }else{
                $img_to_upload = time() . '.' . $image->getClientOriginalExtension();
                $file_title = $img_to_upload;

            }
            $destinationPath = public_path('assets/uploadimage/specific_details/');
            $image->move($destinationPath, $img_to_upload);
        }
        // if(isset($_FILES['img'])){
        //     $img = $request->file('img');
        //     if($request->hasFile('img')){
        //         if($file_title!=""){
        //             $file_ext = $img->getClientOriginalExtension();
        //             $file_size = $img->getSize();
        //             $img_to_upload=$file_title.".".$file_ext;
        //         }else{
        //             $img_to_upload=time()."_".$img->getClientOriginalName();
        //             $img_to_upload_arr=explode(".",$img_to_upload);
        //             $file_title=$img_to_upload_arr['0'];
        //         }
        //         $upload_success = $img->move(public_path($destinationPath, $img_to_upload));
        //         // $destinationPath = 'assets/uploadimage/specific_details/';
        //         // $myimage = $request->image->getClientOriginalName();
        //         // $request->image->move(public_path($destinationPath), $myimage);
        //         // $imageName = $img_to_upload;

        //         // $request->image->move(public_path($destinationPath, $img_to_upload));
        //     }

        // }
        $data = array();
        $data['job_card_id']= $edit_id;
        $data['img']= $img_to_upload;
        $data['file_title']= $file_title;
        $query_insert = DB::table("tbl_job_card_specific_details")->insert($data);
        if($query_insert==true){
            $message="Record inserted successfully.";
            $alert_type="succ";
            $mode="add";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_details_id'=>$edit_id));
        }
        else{
            $message="Error, While you are trying to insert record.";
            $alert_type="err";
            $mode="add";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'general_details_id'=>$edit_id));
        }
    }


    function submitprepress(Request $request)
    {
        //die;
        $edit_id=$request->request->get('pre_press_edit_id');
        $pre_press_general_details_id=$request->request->get('pre_press_general_details_id');

        //echo $pre_press_general_details_id;
        $columns=$request->request->get('columns');
        $rows=$request->request->get('rows');
        $length=$request->request->get('length');
        $length_unit=$request->request->get('length_unit');
        $width=$request->request->get('pre_press_width');
        $width_unit=$request->request->get('pre_press_width_unit');
        $thickness =$request->request->get('thickness');
        $thickness_unit=$request->request->get('thickness_unit');


        if($edit_id=="0")
        {

            $data = array();
            $data['job_card_id']= $pre_press_general_details_id;
            $data['columns']= $columns;
            $data['rows']= $rows;
            $data['length']= $length;
            $data['length_unit']= $length_unit;
            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['thickness']= $thickness;
            $data['thickness_unit']= $thickness_unit;

            $query_insert = DB::table("tbl_job_card_pre_press")->insert($data);

            if($query_insert==true)
            {
                //$general_details_id = DB::getPdo()->lastInsertId();


                $pre_press_id = DB::getPdo()->lastInsertId();

                if(isset($_POST['color']['color']))
                {
                    //die("here");

                    foreach($_POST['color']['color_id'] as $key=>$value) {


                        $color ="";
                        if(isset($_POST['color']['color'][$key]))
                        {


                            $color_arr=$_POST['color']['color'][$key];

                            if(empty($color_arr))
                            {
                                $color ="";
                            }
                            else
                            {
                                $color = implode(',', $color_arr);
                            }
                        }

                        $color_id=$_POST['color']['color_id'][$key];
                        $film_type=$_POST['color']['film_type'][$key];
                        $ply=$_POST['color']['ply'][$key];
                        $plate_type=$_POST['color']['plate_type'][$key];

                        $colordata['pre_press_id']=$pre_press_id;
                        $colordata['color']=$color;
                        $colordata['film_type']=$film_type;
                        $colordata['ply']=$ply;
                        $colordata['plate_type']=$plate_type;

                        $position_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                    }
                }



                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'pre_press_general_details_id'=>$pre_press_general_details_id));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'pre_press_general_details_id'=>$pre_press_general_details_id));
            }




        }
        else
        {


            $data = array();


            $data['columns']= $columns;
            $data['rows']= $rows;
            $data['length']= $length;
            $data['length_unit']= $length_unit;
            $data['width']= $width;
            $data['width_unit']= $width_unit;
            $data['thickness']= $thickness;
            $data['thickness_unit']= $thickness_unit;




            $result = DB::table("tbl_job_card_pre_press")
            ->where('id', $edit_id)
            ->update($data);



            if(isset($_POST['color']['color']))
            {
                //die("here");

                foreach($_POST['color']['color_id'] as $key=>$value) {

                    $color ="";
                    if(isset($_POST['color']['color'][$key]))
                    {
                        $color_arr=$_POST['color']['color'][$key];

                        if(empty($color_arr))
                        {
                            $color ="";
                        }
                        else
                        {
                            $color = implode(',', $color_arr);
                        }
                    }

                    $color_id=$_POST['color']['color_id'][$key];
                    //$color=$_POST['color']['color'][$key];
                    $film_type=$_POST['color']['film_type'][$key];
                    $ply=$_POST['color']['ply'][$key];
                    $plate_type=$_POST['color']['plate_type'][$key];





                    if($color_id==0)
                    {
                        $colordata['pre_press_id']=$edit_id;
                        $colordata['color']=$color;
                        $colordata['film_type']=$film_type;
                        $colordata['ply']=$ply;
                        $colordata['plate_type']=$plate_type;


                        $color_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                    }
                    else
                    {
                        //die("here");
                        //$colordata['pre_press_id']=$pre_press_id;
                        $colordata['color']=$color;
                        $colordata['film_type']=$film_type;
                        $colordata['ply']=$ply;
                        $colordata['plate_type']=$plate_type;

                        //var_dump($colordata);die;

                        //echo $color_id;die;

                        $result = DB::table("tbl_job_card_pre_press_color")
                        ->where('id', $color_id)
                        ->update($colordata);
                    }

                    //$position_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                }
            }








            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'pre_press_general_details_id'=>$pre_press_general_details_id));


        }


    }



    function submitpress(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('press_edit_id');

        //echo $edit_id;die;
        $press_general_details_id=$request->request->get('press_general_details_id');

        /*$paper_thickness_proposed=$request->request->get('paper_thickness_proposed');
        $press_gsm_make=$request->request->get('press_gsm_make');
        $paper_thickness_used=$request->request->get('paper_thickness_used');
        $press_unit=$request->request->get('press_unit');
        $press_gsm_make_1=$request->request->get('press_gsm_make_1');
        $quantity=$request->request->get('quantity');
        $papers =$request->request->get('papers');*/


        /*$ink_color =$request->request->get('ink_color');
        $ink_shade =$request->request->get('ink_shade');
        $ink_company =$request->request->get('ink_company');
        $ink_quantity =$request->request->get('ink_quantity');
        $ink_units =$request->request->get('ink_units');*/

        //$spare =$request->request->get('spare');
        //$spare_quantity =$request->request->get('spare_quantity');

        $printing =$request->request->get('printing');
        $coating =$request->request->get('coating');




        if($edit_id=="0")
        {



            $data = array();
            $data['job_card_id']= $press_general_details_id;
            /*$data['paper_thickness_proposed']= $paper_thickness_proposed;
            $data['gsm_make']= $press_gsm_make;
            $data['paper_thickness_used']= $paper_thickness_used;
            $data['unit']= $press_unit;
            $data['gsm_make_1']= $press_gsm_make_1;
            $data['quantity']= $quantity;
            $data['papers']= $papers;*/

            /*$data['ink_color']= $ink_color;
            $data['ink_shade']= $ink_shade;
            $data['ink_company']= $ink_company;
            $data['ink_quantity']= $ink_quantity;
            $data['ink_units']= $ink_units;*/

            $data['printing']= $printing;
            $data['coating']= $coating;

            $query_insert = DB::table("tbl_job_card_press")->insert($data);

            if($query_insert==true)
            {
                //$general_details_id = DB::getPdo()->lastInsertId();


                $press_id = DB::getPdo()->lastInsertId();


                if(isset($_POST['sparetouse']['spare']))
                {
                    //die("here");

                    foreach($_POST['sparetouse']['spare'] as $key=>$value) {


                        $spare=$_POST['sparetouse']['spare'][$key];
                        $spare_id=$_POST['sparetouse']['spare_id'][$key];
                        $spare_quantity=$_POST['sparetouse']['spare_quantity'][$key];

                        $sparedata['press_id']=$press_id;
                        $sparedata['spare']=$spare;
                        $sparedata['spare_quantity']=$spare_quantity;

                        $position_query_insert = DB::table("tbl_job_card_press_spare_to_use")->insert($sparedata);
                    }
                }

                if(isset($_POST['job_card_press']['paper_thickness_proposed']))
                {
                    //die("here");

                    foreach($_POST['job_card_press']['paper_thickness_proposed'] as $key=>$value) {

                        $paper_thickness_proposed=$_POST['job_card_press']['paper_thickness_proposed'][$key];
                        $paper_id=$_POST['job_card_press']['paper_id'][$key];
                        $general_paper_id=$_POST['job_card_press']['general_paper_id'][$key];
                        $press_gsm_make=$_POST['job_card_press']['press_gsm_make'][$key];
                        $paper_thickness_used=$_POST['job_card_press']['paper_thickness_used'][$key];
                        $press_unit=$_POST['job_card_press']['press_unit'][$key];
                        $press_gsm_make_1=$_POST['job_card_press']['press_gsm_make_1'][$key];
                        $quantity=$_POST['job_card_press']['quantity'][$key];
                        $papers=$_POST['job_card_press']['papers'][$key];

                        $job_card_press_paper_data['press_id']=$press_id;
                        $job_card_press_paper_data['general_paper_id']=$general_paper_id;
                        $job_card_press_paper_data['paper_thickness_proposed']=$paper_thickness_proposed;
                        $job_card_press_paper_data['gsm_make']=$press_gsm_make;
                        $job_card_press_paper_data['paper_thickness_used']=$paper_thickness_used;
                        $job_card_press_paper_data['unit']=$press_unit;
                        $job_card_press_paper_data['gsm_make_1']=$press_gsm_make_1;
                        $job_card_press_paper_data['quantity']=$quantity;
                        $job_card_press_paper_data['papers']=$papers;

                        $position_query_insert = DB::table("tbl_job_card_press_paper")->insert($job_card_press_paper_data);
                    }
                }

                if(isset($_POST['job_card_press_ink_details']['ink_quantity'])){

                    foreach($_POST['job_card_press_ink_details']['ink_quantity'] as $key=>$value) {

                        $ink_color=$_POST['job_card_press_ink_details']['ink_color'][$key];
                        $color_id=$_POST['job_card_press_ink_details']['color_id'][$key];
                        $my_color_id=$_POST['job_card_press_ink_details']['my_color_id'][$key] ?? '';

                        //echo $my_color_id;die;
                        $pre_press_color_id=$_POST['job_card_press_ink_details']['pre_press_color_id'][$key];

                        $ink_shade=$_POST['job_card_press_ink_details']['ink_shade'][$key];
                        $ink_company=$_POST['job_card_press_ink_details']['ink_company'][$key];
                        $ink_quantity=$_POST['job_card_press_ink_details']['ink_quantity'][$key];
                        $ink_units=$_POST['job_card_press_ink_details']['ink_units'][$key];

                        $job_card_press_ink_details_data['press_id']=$press_id;
                        $job_card_press_ink_details_data['pre_press_color_id']=$pre_press_color_id;
                        $job_card_press_ink_details_data['main_color_id']=$my_color_id;
                        $job_card_press_ink_details_data['ink_color']=$ink_color;
                        $job_card_press_ink_details_data['ink_shade']=$ink_shade;
                        $job_card_press_ink_details_data['ink_company']=$ink_company;
                        $job_card_press_ink_details_data['ink_quantity']=$ink_quantity;
                        $job_card_press_ink_details_data['ink_units']=$ink_units;

                        $ink_details_query_insert = DB::table("tbl_job_card_press_ink_details")->insert($job_card_press_ink_details_data);
                    }
                }

                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'press_general_details_id'=>$press_general_details_id));
            }
            else{
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'pre_press_general_details_id'=>$pre_press_general_details_id));
            }
        }
        else{
            $data = array();

            /*$data['paper_thickness_proposed']= $paper_thickness_proposed;
            $data['gsm_make']= $press_gsm_make;
            $data['paper_thickness_used']= $paper_thickness_used;
            $data['unit']= $press_unit;
            $data['gsm_make_1']= $press_gsm_make_1;
            $data['quantity']= $quantity;
            $data['papers']= $papers;*/

            /*$data['ink_color']= $ink_color;
            $data['ink_shade']= $ink_shade;
            $data['ink_company']= $ink_company;
            $data['ink_quantity']= $ink_quantity;
            $data['ink_units']= $ink_units;*/

            $data['printing']= $printing;
            $data['coating']= $coating;

            $result = DB::table("tbl_job_card_press")
            ->where('id', $edit_id)
            ->update($data);

            if(isset($_POST['sparetouse']['spare'])){

                foreach($_POST['sparetouse']['spare'] as $key=>$value) {

                    $spare=$_POST['sparetouse']['spare'][$key];
                    $spare_quantity=$_POST['sparetouse']['spare_quantity'][$key];
                    $spare_id=$_POST['sparetouse']['spare_id'][$key];

                    if($spare_id==0){
                        $sparedata['press_id']=$edit_id;
                        $sparedata['spare']=$spare;
                        $sparedata['spare_quantity']=$spare_quantity;

                        $position_query_insert = DB::table("tbl_job_card_press_spare_to_use")->insert($sparedata);
                    }else{
                        $sparedata['spare']=$spare;
                        $sparedata['spare_quantity']=$spare_quantity;

                        $result = DB::table("tbl_job_card_press_spare_to_use")
                        ->where('id', $spare_id)
                        ->update($sparedata);
                    }

                    //$position_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                }
            }


            if(isset($_POST['job_card_press']['paper_thickness_proposed'])){

                foreach($_POST['job_card_press']['paper_thickness_proposed'] as $key=>$value) {

                    $spare=$_POST['job_card_press']['paper_thickness_proposed'][$key];
                    $paper_id=$_POST['job_card_press']['paper_id'][$key];
                    $general_paper_id=$_POST['job_card_press']['general_paper_id'][$key];

                    $press_gsm_make=$_POST['job_card_press']['press_gsm_make'][$key];
                    $paper_thickness_used=$_POST['job_card_press']['paper_thickness_used'][$key];
                    $press_unit=$_POST['job_card_press']['press_unit'][$key];
                    $press_gsm_make_1=$_POST['job_card_press']['press_gsm_make_1'][$key];
                    $quantity=$_POST['job_card_press']['quantity'][$key];
                    $papers=$_POST['job_card_press']['papers'][$key];

                    if($paper_id==0){
                        $job_card_press_paper_data['press_id']=$edit_id;
                        $job_card_press_paper_data['paper_thickness_proposed']=$paper_thickness_proposed;
                        $job_card_press_paper_data['gsm_make']=$press_gsm_make;
                        $job_card_press_paper_data['paper_thickness_used']=$paper_thickness_used;
                        $job_card_press_paper_data['unit']=$press_unit;
                        $job_card_press_paper_data['gsm_make_1']=$press_gsm_make_1;
                        $job_card_press_paper_data['quantity']=$quantity;
                        $job_card_press_paper_data['papers']=$papers;
                        $job_card_press_paper_data['general_paper_id']=$general_paper_id;

                        $position_query_insert = DB::table("tbl_job_card_press_paper")->insert($job_card_press_paper_data);
                    }
                    else
                    {
                        $job_card_press_paper_data['paper_thickness_proposed']=$paper_thickness_proposed;
                        $job_card_press_paper_data['gsm_make']=$press_gsm_make;
                        $job_card_press_paper_data['paper_thickness_used']=$paper_thickness_used;
                        $job_card_press_paper_data['unit']=$press_unit;
                        $job_card_press_paper_data['gsm_make_1']=$press_gsm_make_1;
                        $job_card_press_paper_data['quantity']=$quantity;
                        $job_card_press_paper_data['papers']=$papers;
                        $job_card_press_paper_data['general_paper_id']=$general_paper_id;

                        $result = DB::table("tbl_job_card_press_paper")
                        ->where('id', $paper_id)
                        ->update($job_card_press_paper_data);
                    }

                    //$position_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                }
            }


            if(isset($_POST['job_card_press_ink_details']['ink_quantity']))
            {
                //die("here");

                foreach($_POST['job_card_press_ink_details']['ink_quantity'] as $key=>$value) {

                    $ink_color=$_POST['job_card_press_ink_details']['ink_color'][$key];
                    $color_id=$_POST['job_card_press_ink_details']['color_id'][$key];
                    $my_color_id=$_POST['job_card_press_ink_details']['my_color_id'][$key];

                    //echo $my_color_id;die;
                    $pre_press_color_id=$_POST['job_card_press_ink_details']['pre_press_color_id'][$key];

                    $ink_shade=$_POST['job_card_press']['ink_shade'][$key];
                    $ink_company=$_POST['job_card_press']['ink_company'][$key];
                    $ink_quantity=$_POST['job_card_press']['ink_quantity'][$key];
                    $ink_units=$_POST['job_card_press']['ink_units'][$key];

                    if($color_id==0)
                    {
                        $job_card_press_ink_details_data['press_id']=$edit_id;
                        $job_card_press_ink_details_data['pre_press_color_id']=$pre_press_color_id;
                        $job_card_press_ink_details_data['main_color_id']=$my_color_id;
                        $job_card_press_ink_details_data['ink_color']=$ink_color;
                        $job_card_press_ink_details_data['ink_shade']=$ink_shade;
                        $job_card_press_ink_details_data['ink_company']=$ink_company;
                        $job_card_press_ink_details_data['ink_quantity']=$ink_quantity;
                        $job_card_press_ink_details_data['ink_units']=$ink_units;

                        $ink_details_query_insert = DB::table("tbl_job_card_press_ink_details")->insert($job_card_press_ink_details_data);
                    }
                    else
                    {
                        $job_card_press_ink_details_data['pre_press_color_id']=$pre_press_color_id;
                        $job_card_press_ink_details_data['main_color_id']=$my_color_id;
                        $job_card_press_ink_details_data['ink_color']=$ink_color;
                        $job_card_press_ink_details_data['ink_shade']=$ink_shade;
                        $job_card_press_ink_details_data['ink_company']=$ink_company;
                        $job_card_press_ink_details_data['ink_quantity']=$ink_quantity;
                        $job_card_press_ink_details_data['ink_units']=$ink_units;

                        $result = DB::table("tbl_job_card_press_ink_details")
                        ->where('id', $color_id)
                        //->where('main_color_id', $my_color_id)
                        ->update($job_card_press_ink_details_data);
                    }

                    //$position_query_insert = DB::table("tbl_job_card_pre_press_color")->insert($colordata);
                }
            }

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'press_general_details_id'=>$press_general_details_id));
        }
    }

    function submitpostpress(Request $request){
        $edit_id=$request->request->get('post_press_edit_id');
        $post_press_general_details_id=$request->request->get('post_press_general_details_id');
        $collating_width=$request->request->get('collating_width');
        $collating_type=$request->request->get('collating_type');
        $collating_between_ply_arr=$request->request->get('collating_between_ply');
        if(empty($collating_between_ply_arr)){
            $collating_between_ply ="";
        }
        else{
            $collating_between_ply = implode(',', $collating_between_ply_arr);
        }
        $collating_carbon_option=$request->request->get('collating_carbon_option');
        $numbering_position=$request->request->get('numbering_position');
        $numbering_style=$request->request->get('numbering_style');
        $numbering_skip=$request->request->get('numbering_skip');
        $numbering_sequence=$request->request->get('numbering_sequence');
        $numbering_orientation=$request->request->get('numbering_orientation');
        $gumming_position =$request->request->get('gumming_position');
        $gumming_gum_make=$request->request->get('gumming_gum_make');
        $gumming_between_arr=$request->request->get('gumming_between');
        if(empty($gumming_between_arr)){
            $gumming_between ="";
        }
        else{
            $gumming_between = implode(',', $gumming_between_arr);
        }
        $gumming_quantity =$request->request->get('gumming_quantity');
        $hotspot_carbon_width=$request->request->get('hotspot_carbon_width');
        $hotspot_carbon_height=$request->request->get('hotspot_carbon_height');
        $hotspot_carbon_behind_ply_no_arr =$request->request->get('hotspot_carbon_behind_ply_no');
        if(empty($hotspot_carbon_behind_ply_no_arr)){
            $hotspot_carbon_behind_ply_no ="";
        }else{
            $hotspot_carbon_behind_ply_no = implode(',', $hotspot_carbon_behind_ply_no_arr);
        }
        $cutting_width =$request->request->get('cutting_width');
        $cutting_width_unit =$request->request->get('cutting_width_unit');
        $cutting_length =$request->request->get('cutting_length');
        $cutting_length_unit =$request->request->get('cutting_length_unit');
        $cutting_core_size =$request->request->get('cutting_core_size');
        $barcode_type =$request->request->get('barcode_type');
        $barcode_height =$request->request->get('barcode_height');
        $barcode_width =$request->request->get('barcode_width');
        $barcode_orientation =$request->request->get('barcode_orientation');
        $barcode_human_readable_text_to_show =$request->request->get('barcode_human_readable_text_to_show');
        $baby_roll_making_coating_side =$request->request->get('baby_roll_making_coating_side');
        if($edit_id=="0"){
            $data = array();
            $data['job_card_id']= $post_press_general_details_id;
            $data['collating_width']= $collating_width;
            $data['collating_type']= $collating_type;
            $data['collating_between_ply']= $collating_between_ply;
            $data['collating_carbon_option']= $collating_carbon_option;
            $data['numbering_position']= $numbering_position;
            $data['numbering_style']= $numbering_style;
            $data['numbering_skip']= $numbering_skip;
            $data['numbering_sequence']= $numbering_sequence;
            $data['numbering_orientation']= $numbering_orientation;
            $data['gumming_position']= $gumming_position;
            $data['gumming_gum_make']= $gumming_gum_make;
            $data['gumming_between']= $gumming_between;
            $data['gumming_quantity']= $gumming_quantity;
            $data['hotspot_carbon_width']= $hotspot_carbon_width;
            $data['hotspot_carbon_height']= $hotspot_carbon_height;
            $data['hotspot_carbon_behind_ply_no']= $hotspot_carbon_behind_ply_no;
            $data['cutting_width']= $cutting_width;
            $data['cutting_width_unit']= $cutting_width_unit;
            $data['cutting_length']= $cutting_length;
            $data['cutting_length_unit']= $cutting_length_unit;
            $data['cutting_core_size']= $cutting_core_size;
            $data['barcode_type']= $barcode_type;
            $data['barcode_height']= $barcode_height;
            $data['barcode_width']= $barcode_width;
            $data['barcode_orientation']= $barcode_orientation;
            $data['barcode_human_readable_text_to_show']= $barcode_human_readable_text_to_show;
            $data['baby_roll_making_coating_side']= $baby_roll_making_coating_side;
            $query_insert = DB::table("tbl_job_card_post_press")->insert($data);
            if($query_insert==true){
                $post_press_id = DB::getPdo()->lastInsertId();
                if(isset($_POST['packaging_details']['pcs'])){
                    foreach($_POST['packaging_details']['pcs'] as $key=>$value) {
                        $pcs=$_POST['packaging_details']['pcs'][$key];
                        $item=$_POST['packaging_details']['item'][$key];
                        $length=$_POST['packaging_details']['length'][$key];
                        $width=$_POST['packaging_details']['width'][$key];
                        $height=$_POST['packaging_details']['height'][$key];
                        $units=$_POST['packaging_details']['units'][$key];
                        $packaging_details_data['job_card_id']=$post_press_general_details_id;
                        $packaging_details_data['pcs']=$pcs;
                        $packaging_details_data['item']=$item;
                        $packaging_details_data['length']=$length;
                        $packaging_details_data['width']=$width;
                        $packaging_details_data['height']=$height;
                        $packaging_details_data['units']=$units;
                        $position_query_insert = DB::table("tbl_job_card_post_press_packaging_details")->insert($packaging_details_data);
                    }
                }
                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'post_press_general_details_id'=>$post_press_general_details_id));
            }else{
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'post_press_general_details_id'=>$post_press_general_details_id));
            }
        }else{
            $data = array();
            $data['job_card_id']= $post_press_general_details_id;
            $data['collating_width']= $collating_width;
            $data['collating_type']= $collating_type;
            $data['collating_between_ply']= $collating_between_ply;
            $data['collating_carbon_option']= $collating_carbon_option;

            $data['numbering_position']= $numbering_position;
            $data['numbering_style']= $numbering_style;
            $data['numbering_skip']= $numbering_skip;
            $data['numbering_sequence']= $numbering_sequence;
            $data['numbering_orientation']= $numbering_orientation;

            $data['gumming_position']= $gumming_position;
            $data['gumming_gum_make']= $gumming_gum_make;
            $data['gumming_between']= $gumming_between;
            $data['gumming_quantity']= $gumming_quantity;

            $data['hotspot_carbon_width']= $hotspot_carbon_width;
            $data['hotspot_carbon_height']= $hotspot_carbon_height;
            $data['hotspot_carbon_behind_ply_no']= $hotspot_carbon_behind_ply_no;

            $data['cutting_width']= $cutting_width;
            $data['cutting_width_unit']= $cutting_width_unit;
            $data['cutting_length']= $cutting_length;
            $data['cutting_length_unit']= $cutting_length_unit;
            $data['cutting_core_size']= $cutting_core_size;

            $data['barcode_type']= $barcode_type;
            $data['barcode_height']= $barcode_height;
            $data['barcode_width']= $barcode_width;
            $data['barcode_orientation']= $barcode_orientation;
            $data['barcode_human_readable_text_to_show']= $barcode_human_readable_text_to_show;

            $data['baby_roll_making_coating_side']= $baby_roll_making_coating_side;

        //    $result = DB::table("tbl_job_card_post_press")
        //    ->updateOrInsert(
        //         ['id' => $edit_id],
        //         $data
        //     );
        if($request->post_press_id){
            $result = DB::table("tbl_job_card_post_press")
            // ->where('id', $edit_id)
            // ->update($data);
            ->updateOrInsert(
                ['id' => $request->post_press_id],
                $data
            );
        }

            if(isset($_POST['packaging_details']['pcs'])){
                foreach($_POST['packaging_details']['pcs'] as $key=>$value) {
                    $pcs=$_POST['packaging_details']['pcs'][$key];
                    $item=$_POST['packaging_details']['item'][$key];
                    $length=$_POST['packaging_details']['length'][$key];
                    $width=$_POST['packaging_details']['width'][$key];
                    $height=$_POST['packaging_details']['height'][$key];
                    $units=$_POST['packaging_details']['units'][$key];
                    $packaging_details_id=$_POST['packaging_details']['packaging_details_id'][$key];
                    if($packaging_details_id==0   &&  !empty($pcs)){
                        $packaging_details_data['job_card_id']=$post_press_general_details_id;
                        $packaging_details_data['pcs']=$pcs;
                        $packaging_details_data['item']=$item;
                        $packaging_details_data['length']=$length;
                        $packaging_details_data['width']=$width;
                        $packaging_details_data['height']=$height;
                        $packaging_details_data['units']=$units;
                        $position_query_insert = DB::table("tbl_job_card_post_press_packaging_details")->insert($packaging_details_data);
                    }else{
                        $packaging_details_data['pcs']=$pcs;
                        $packaging_details_data['item']=$item;
                        $packaging_details_data['length']=$length;
                        $packaging_details_data['width']=$width;
                        $packaging_details_data['height']=$height;
                        $packaging_details_data['units']=$units;

                        $result = DB::table("tbl_job_card_post_press_packaging_details")
                        ->where('id', $packaging_details_id)
                        ->update($packaging_details_data);
                    }
                }
            }
            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'post_press_general_details_id'=>$post_press_general_details_id));
        }
    }

    function submitprocessselection(Request $request)
    {
        $edit_id=$request->request->get('process_selection_edit_id');
        $process_selection_general_details_id=$request->request->get('process_selection_general_details_id');
        if($edit_id=="0")
        {

            $data = array();


            if(isset($_POST['processselectionprepress']['process']))
            {

                foreach($_POST['processselectionprepress']['process'] as $key=>$value) {


                    $prepress_id=$_POST['processselectionprepress']['prepress_id'][$key];
                    $process=$_POST['processselectionprepress']['process'][$key];
                    $basicmachine=$_POST['processselectionprepress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionprepress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionprepress']['qc'][$key];

                    $prepressdata['job_card_id']=$process_selection_general_details_id;
                    $prepressdata['process']=$process;
                    $prepressdata['basicmachine']=$basicmachine;
                    $prepressdata['alternativemachine']=$alternativemachine;
                    $prepressdata['qc']=$qc;

                    $pre_press_query_insert = DB::table("tbl_job_card_process_selection_pre_press")->insert($prepressdata);
                }

            }

            if(isset($_POST['processselectionpress']['process']))
            {

                foreach($_POST['processselectionpress']['process'] as $key=>$value) {


                    $press_id=$_POST['processselectionpress']['press_id'][$key];
                    $process=$_POST['processselectionpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpress']['qc'][$key];

                    $prepressdata['job_card_id']=$process_selection_general_details_id;
                    $prepressdata['process']=$process;
                    $prepressdata['basicmachine']=$basicmachine;
                    $prepressdata['alternativemachine']=$alternativemachine;
                    $prepressdata['qc']=$qc;

                    $pre_press_query_insert = DB::table("tbl_job_card_process_selection_press")->insert($prepressdata);
                }

            }


            if(isset($_POST['processselectionpostpress']['process']))
            {

                foreach($_POST['processselectionpostpress']['process'] as $key=>$value) {


                    $post_press_id=$_POST['processselectionpostpress']['post_press_id'][$key];
                    $process=$_POST['processselectionpostpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpostpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpostpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpostpress']['qc'][$key];

                    $prepressdata['job_card_id']=$process_selection_general_details_id;
                    $prepressdata['process']=$process;
                    $prepressdata['basicmachine']=$basicmachine;
                    $prepressdata['alternativemachine']=$alternativemachine;
                    $prepressdata['qc']=$qc;

                    $pre_press_query_insert = DB::table("tbl_job_card_process_selection_post_press")->insert($prepressdata);
                }

            }





                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'process_selection_general_details_id'=>$process_selection_general_details_id));





        }
        else
        {


            $data = array();
            $press_data=array();
            $post_press_data=array();

            if(isset($_POST['processselectionprepress']['process']))
            {

                foreach($_POST['processselectionprepress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $prepress_id=$_POST['processselectionprepress']['prepress_id'][$key];
                    $process=$_POST['processselectionprepress']['process'][$key];
                    $basicmachine=$_POST['processselectionprepress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionprepress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionprepress']['qc'][$key];

                    $pre_press_data['job_card_id']=$edit_id;
                    $pre_press_data['process']=$process;
                    $pre_press_data['basicmachine']=$basicmachine;
                    $pre_press_data['alternativemachine']=$alternativemachine;
                    $pre_press_data['qc']=$qc;

                    if($prepress_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_process_selection_pre_press")->insert($pre_press_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_job_card_process_selection_pre_press")
                        ->where('id', $prepress_id)
                        ->update($pre_press_data);
                    }

                }

            }

            if(isset($_POST['processselectionpress']['process']))
            {

                foreach($_POST['processselectionpress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $press_id=$_POST['processselectionpress']['press_id'][$key];
                    $process=$_POST['processselectionpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpress']['qc'][$key];

                    $press_data['job_card_id']=$edit_id;
                    $press_data['process']=$process;
                    $press_data['basicmachine']=$basicmachine;
                    $press_data['alternativemachine']=$alternativemachine;
                    $press_data['qc']=$qc;

                    if($press_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_process_selection_press")->insert($press_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_job_card_process_selection_press")
                        ->where('id', $press_id)
                        ->update($press_data);
                    }

                }

            }





            if(isset($_POST['processselectionpostpress']['process']))
            {

                foreach($_POST['processselectionpostpress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $postpress_id=$_POST['processselectionpostpress']['post_press_id'][$key];
                    $process=$_POST['processselectionpostpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpostpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpostpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpostpress']['qc'][$key];

                    $post_press_data['job_card_id']=$edit_id;
                    $post_press_data['process']=$process;
                    $post_press_data['basicmachine']=$basicmachine;
                    $post_press_data['alternativemachine']=$alternativemachine;
                    $post_press_data['qc']=$qc;

                    if($postpress_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_process_selection_post_press")->insert($post_press_data);
                    }
                    else
                    {

                        //var_dump($post_press_data);die;
                        $result = DB::table("tbl_job_card_process_selection_post_press")
                        ->where('id', $postpress_id)
                        ->update($post_press_data);
                    }

                }

            }

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'process_selection_general_details_id'=>$process_selection_general_details_id));


        }


    }


    function submitmaterialrequirement(Request $request)
    {
        $edit_id=$request->request->get('material_requirement_edit_id');
        $material_requirement_general_details_id=$request->request->get('material_requirement_general_details_id');
        if($edit_id=="0")
        {

            $data = array();


            if(isset($_POST['material_requirement']['rm_category']))
            {

                foreach($_POST['material_requirement']['rm_category'] as $key=>$value) {


                    $material_requirement_id=$_POST['material_requirement']['material_requirement_id'][$key];
                    $rm_category=$_POST['material_requirement']['rm_category'][$key];
                    $type=$_POST['material_requirement']['type'][$key];
                    $rm_item=$_POST['material_requirement']['rm_item'][$key];
                    $quantity=$_POST['material_requirement']['quantity'][$key];
                    $units=$_POST['material_requirement']['units'][$key];
                    $wastage_allowed=$_POST['material_requirement']['wastage_allowed'][$key];
                    $pcs=$_POST['material_requirement']['pcs'][$key];

                    $material_requirement_data['job_card_id']=$edit_id;
                    $material_requirement_data['rm_category']=$rm_category;
                    $material_requirement_data['type']=$type;
                    $material_requirement_data['rm_item']=$rm_item;
                    $material_requirement_data['quantity']=$quantity;
                    $material_requirement_data['units']=$units;
                    $material_requirement_data['wastage_allowed']=$wastage_allowed;
                    $material_requirement_data['pcs']=$pcs;

                    $pre_press_query_insert = DB::table("tbl_job_card_material_requirement")->insert($material_requirement_data);
                }

            }






                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'material_requirement_general_details_id'=>$edit_id));





        }
        else
        {


            $data = array();
            $press_data=array();
            $post_press_data=array();

            if(isset($_POST['material_requirement']['rm_category']))
            {

                foreach($_POST['material_requirement']['rm_category'] as $key=>$value) {


                    //echo $key;die;
                    $material_requirement_id=$_POST['material_requirement']['material_requirement_id'][$key];
                    $rm_category=$_POST['material_requirement']['rm_category'][$key];
                    $type=$_POST['material_requirement']['type'][$key];
                    $rm_item=$_POST['material_requirement']['rm_item'][$key];
                    $quantity=$_POST['material_requirement']['quantity'][$key];
                    $units=$_POST['material_requirement']['units'][$key];
                    $wastage_allowed=$_POST['material_requirement']['wastage_allowed'][$key];
                    $pcs=$_POST['material_requirement']['pcs'][$key];

                    $material_requirement_data['job_card_id']=$material_requirement_general_details_id;
                    $material_requirement_data['rm_category']=$rm_category;
                    $material_requirement_data['type']=$type;
                    $material_requirement_data['rm_item']=$rm_item;
                    $material_requirement_data['quantity']=$quantity;
                    $material_requirement_data['units']=$units;
                    $material_requirement_data['wastage_allowed']=$wastage_allowed;
                    $material_requirement_data['pcs']=$pcs;

                    if($material_requirement_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_material_requirement")->insert($material_requirement_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_job_card_material_requirement")
                        ->where('id', $material_requirement_id)
                        ->update($material_requirement_data);
                    }

                }

            }

            if(isset($_POST['processselectionpress']['process']))
            {

                foreach($_POST['processselectionpress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $press_id=$_POST['processselectionpress']['press_id'][$key];
                    $process=$_POST['processselectionpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpress']['qc'][$key];

                    $press_data['job_card_id']=$edit_id;
                    $press_data['process']=$process;
                    $press_data['basicmachine']=$basicmachine;
                    $press_data['alternativemachine']=$alternativemachine;
                    $press_data['qc']=$qc;

                    if($press_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_process_selection_press")->insert($press_data);
                    }
                    else
                    {
                        $result = DB::table("tbl_job_card_process_selection_press")
                        ->where('id', $edit_id)
                        ->update($press_data);
                    }

                }

            }





            if(isset($_POST['processselectionpostpress']['process']))
            {

                foreach($_POST['processselectionpostpress']['process'] as $key=>$value) {


                    //echo $key;die;
                    $postpress_id=$_POST['processselectionpostpress']['post_press_id'][$key];
                    $process=$_POST['processselectionpostpress']['process'][$key];
                    $basicmachine=$_POST['processselectionpostpress']['basicmachine'][$key];
                    $alternativemachine=$_POST['processselectionpostpress']['alternativemachine'][$key];
                    $qc=$_POST['processselectionpostpress']['qc'][$key];

                    $post_press_data['job_card_id']=$edit_id;
                    $post_press_data['process']=$process;
                    $post_press_data['basicmachine']=$basicmachine;
                    $post_press_data['alternativemachine']=$alternativemachine;
                    $post_press_data['qc']=$qc;

                    if($postpress_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_job_card_process_selection_post_press")->insert($post_press_data);
                    }
                    else
                    {

                        //var_dump($post_press_data);die;
                        $result = DB::table("tbl_job_card_process_selection_post_press")
                        ->where('id', $postpress_id)
                        ->update($post_press_data);
                    }

                }

            }

            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'material_requirement_general_details_id'=>$material_requirement_general_details_id));


        }


    }

    function delete_packaging_details(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_post_press_packaging_details")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


    function deleteprocessselectionprepress(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_process_selection_pre_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteprocessselectionpostpress(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_process_selection_post_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteprocessselectionpress(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_process_selection_press")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }



    function edit_packaging_details(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_job_card_post_press_packaging_details where id=$edit_id");


        foreach($tbldata as $tbldata){
            $packaging_details_id=$tbldata->id;
            $job_card_id=$tbldata->job_card_id;
            $pcs=$tbldata->pcs;
            $item=$tbldata->item;
            $length=$tbldata->length;
            $width=$tbldata->width;
            $height=$tbldata->height;
            $units=$tbldata->units;

        }
        echo json_encode(array('packaging_details_id'=>$packaging_details_id,'job_card_id' => $job_card_id,'pcs'=>$pcs,'item'=>$item,'length'=>$length,'width'=>$width,'height'=>$height,'units'=>$units,'message'=>''));
    }



    function editpaper(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_job_card_paper where id=$edit_id");


        foreach($tbldata as $tbldata){
            $paper_id=$tbldata->id;
            $job_card_id=$tbldata->job_card_id;
            $paper_thick=$tbldata->paper_thick;
            $paper_make=$tbldata->paper_make;
            $color_shade=$tbldata->color_shade;
            $front_side_color=$tbldata->front_side_color;
            $front_side_color = explode(",",$front_side_color);
            $back_side_color=$tbldata->back_side_color;
            $back_side_color = explode(",",$back_side_color);
            $front_side_coating=$tbldata->front_side_coating;
            $back_side_coating=$tbldata->back_side_coating;
            $copy_mark=$tbldata->copy_mark;
            $remark=$tbldata->remark;
            $width = $tbldata->width;
            $unit = $tbldata->unit;

        }
        echo json_encode(
            array(
                'paper_id'=>$paper_id,
                'job_card_id' => $job_card_id,
                'paper_thick'=>$paper_thick,
                'paper_make'=>$paper_make,
                'color_shade'=>$color_shade,
                'front_side_color'=>$front_side_color,
                'back_side_color'=>$back_side_color,
                'front_side_coating'=>$front_side_coating,
                'back_side_coating'=>$back_side_coating,
                'copy_mark'=>$copy_mark,
                'remark'=>$remark,
                'width'=>$width,
                'unit'=>$unit,
                'message'=>''

            ));
    }

    function edit_material_requirement(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_job_card_material_requirement where id=$edit_id");


        foreach($tbldata as $tbldata){
            $material_requirement_id=$tbldata->id;
            $job_card_id=$tbldata->job_card_id;
            $rm_category=$tbldata->rm_category;
            $type=$tbldata->type;
            $rm_item=$tbldata->rm_item;
            $quantity=$tbldata->quantity;
            $units=$tbldata->units;
            $wastage_allowed=$tbldata->wastage_allowed;
            $pcs=$tbldata->pcs;

        }
        echo json_encode(array('material_requirement_id'=>$material_requirement_id,'job_card_id' => $job_card_id,'rm_category'=>$rm_category,'type'=>$type,'rm_item'=>$rm_item,'quantity'=>$quantity,'units'=>$units,'wastage_allowed'=>$wastage_allowed,'pcs'=>$pcs,'message'=>''));
    }

    function validateprocessname(Request $request)
    {
        $status = "false";

        $process_name=$request->request->get('process_name');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_process_master where name='".$process_name."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_process_master where name='".$process_name."' and id!='".$edit_id."'");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }else{
                $status = "true";
            }
        }


        echo $status;
    }

    function validateusercode(Request $request)
    {
        $status = "false";

        $usercode=$request->request->get('usercode');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from tbl_user where usercode='".$usercode."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from tbl_user where usercode='".$usercode."' and id!='".$edit_id."' ");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }else{
                $status = "true";
            }
        }


        echo $status;
    }


    function ajax_populate_product_type(Request $request)
    {
        $return_arr = array();
        $row_array = array();
        $whereClause = "1";
        $limit="";

        //print_r($_GET);die;

        //var_dump($request->request->get('search'));die;
        if((isset($_GET['search']) AND isset($_GET['search']['term'])) || (isset($_GET['id']) && is_numeric($_GET['id'])))
        {
            //die("here");
            if(isset($_GET['search']))
            {
                $getVar = strip_tags(trim($_GET['search']['term']));

                //echo $getVar;die;
                $whereClause =  " product_category LIKE '%" . $getVar ."%' ";
                $limit = 'LIMIT '.intval($_GET['page_limit']);
            }
            elseif(isset($_GET['id']))
            {
                $getVar = strip_tags(trim($_GET['id']));
                $whereClause =  " id = $getVar ";
            }

            $query = "SELECT id,product_type FROM tbl_product WHERE  $whereClause ORDER BY description $limit";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                //print_r($resultdata);die;
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->product_type)));
                array_push($return_arr,$row_array);
            }
        }
        else if(isset($_GET['selected_product_category']))
        {
            $query = "SELECT id,product_type FROM tbl_product WHERE product_category='".$_GET['selected_product_category']."' ORDER BY product_type";
            $result = DB::select($query);
            //var_dump($result);die;
            //$output = $result->result_array();
            $resultdata = array();
            foreach ($result as $resultdata) {
                $row_array['id'] = $resultdata->id;
                $row_array['text'] = utf8_encode(ucfirst(strtolower($resultdata->product_type)));
                array_push($return_arr,$row_array);
            }
        }
        else{
            $row_array['id'] = 0;
            $row_array['text'] = utf8_encode('Start Typing....');
            array_push($return_arr,$row_array);
        }


        $ret = array();
        if(isset($data['id'])){
            $ret = $row_array;
        }
        else if(isset($data['selected_product_category'])){
            $ret['results'] = $return_arr;
        }else{
            $ret['results'] = $return_arr;
        }
        echo json_encode($ret);
    }

    function deleteposition(Request $request)
    {
        //die("here");
        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('jc-edit') ? 1 : 0;
        if($edit !=1 )
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_job_card_position")->delete($id);
        //DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }


}
