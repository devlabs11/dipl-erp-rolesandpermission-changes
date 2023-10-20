<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
use Helper;
use App\Models\Users;
// use App\Models\Company;

class company extends Controller
{

    // public function __construct()
    // {
    //         if (!Session::has('userdata')){
    //             //die("here");
    //             //return redirect('/login');
    //             Redirect::to('login')->send();
    //         }

    //         $acces_management = $this->check_rights('company');

    //         if (!$acces_management->allow_access) {
    //             Redirect::to('dashboard')->send();
    //         }

    //         $this->acces_management =$acces_management;
    //     //app('App\Http\Controllers\Controller')->check_rights('User');
    //     //$acces_management = app('App\Http\Controllers\Controller')->check_rights('User');
    //  }

    function index()
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = Users::find($user_id);
        // dd($user);
        $create = 0;
        if ($user->hasPermission('create')) {
            $create = 1;
        } else {
            $create = 0;
        }
        if ($user->hasPermission('company-list')) {
            return view('company.index',compact('create'));
        } else {
            Redirect::to('dashboard')->send();
        }
    }


    public function companydata()
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
            $search_string="where tc.company_id LIKE '%$search_value%' or tc.unique_id LIKE '%$search_value%' or tc.name LIKE '%$search_value%' ";
            $tbldata = DB::select("select tc.id as cid,tc.company_id as company_id,tc.unique_id as companyunique_id,tc.name as company_name from tbl_company tc $search_string order by tc.id desc limit $start,$length");

            $process_count = DB::select("select count(*) as totalcount from tbl_company tc  $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select tc.id as cid,tc.company_id as company_id,tc.unique_id as companyunique_id,tc.name as company_name from tbl_company tc order by tc.id desc limit $start,$length");
            $process_count = DB::select("select count(*) as totalcount from tbl_company tc ");
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

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = Users::find($user_id);
        $edit = 0;
        $delete = 0;
        if ($user->hasPermission('company-edit')) {
            $edit = 1;
        } else {
            $edit = 0;
        }
        if ($user->hasPermission('company-delete')) {
            $delete = 1;
        } else {
            $delete = 0;
        }

        foreach($tbldata as $tbldata) {

            $id=$tbldata->cid;
            $companyunique_id=$tbldata->companyunique_id;

            $company_id=$tbldata->company_id;
            $name=$tbldata->company_name;

            /*if($category=="1")
            {
                $category_val="Pre-Press";
            }
            else if($category=="2")
            {
                $category_val="Post-Press";
            }
            else if($category=="3")
            {
                $category_val="Press";
            }
            else if($category=="4")
            {
                $category_val="Other";
            }
            else if($category=="5")
            {
                $category_val="FABRIC";
            }
            else
            {
                $category_val="WATER MARK PROSS";
            }*/

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            //$row[] = $id;
            $row[] = $companyunique_id;
            $row[] = $name;



            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit == 1 || $delete ==1)
            {
                if($edit == 1)
                {
                    $edit_url  = url("/companyaddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;" ></i></a>';
                }
                if($delete == 1)
                {
                    $edit_url  = url("/companyaddedit/{$id}");
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
            }
            else
            {
                // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                //                 Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                //             </button>';
            }
            $row[]=$action;
            // $row[] = '<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            // <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
            // <span class="svg-icon svg-icon-5 m-0">
            //     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            //         <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
            //     </svg>
            // </span>
            // <!--end::Svg Icon--></a>
            // <!--begin::Menu-->
            // <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3">View</a>
            //     </div>
            //     <!--end::Menu item-->
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
            //     </div>
            //     <!--end::Menu item-->
            // </div>
            // <!--end::Menu-->';

            $output['aaData'][] = $row;
        }



        echo json_encode($output);
    }


    function delete(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        if(!$acces_management->allow_edit)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_company")->delete($id);
        DB::table('tbl_plants')->where('company_id', $id)->delete();


        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function deleteplants(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        if(!$acces_management->allow_edit)
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


    function deleteneft(Request $request)
    {
        //die("here");
        $acces_management = $this->acces_management;
        if(!$acces_management->allow_edit)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        //echo $id;die;

        DB::table("tbl_rtgs_neft")->delete($id);
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

            $acces_management = $this->acces_management;
            if(!$acces_management->allow_edit)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("tbl_company")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitcompany(Request $request){

        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $edit_id=$request->request->get('edit_id');

        $name=$request->request->get('company_name');
        $registered_address=$request->request->get('registered_address');
        $corresponding_address=$request->request->get('corresponding_address');
        $phone_number=$request->request->get('phone_number');
        $fax_no=$request->request->get('fax_no');
        $vat_regs_no=$request->request->get('vat_regs_no');
        $grio_no=$request->request->get('grio_no');
        $bank=$request->request->get('bank');
        $branch=$request->request->get('branch');
        $account_no=$request->request->get('account_no');
        $sales_tax_declaration=$request->request->get('sales_tax_declaration');
        $terms_condition=$request->request->get('terms_condition');
        $company_prefix=$request->request->get('company_prefix');
        $service_reg_no=$request->request->get('service_reg_no');
        $service_reg_no_dated=$request->request->get('service_reg_no_dated');
        $tin_no=$request->request->get('tin_no');
        $pan_no=$request->request->get('pan_no');
        $ecc_no=$request->request->get('ecc_no');
        $ecc_dated=$request->request->get('ecc_dated');
        $excise_rabge=$request->request->get('excise_rabge');
        $excise_division=$request->request->get('excise_division');
        $commissioner_rate=$request->request->get('commissioner_rate');
        $gst_no=$request->request->get('gst_no');
        $arn_no=$request->request->get('arn_no');
        $it_tds=$request->request->get('it_tds');
        $cin_no=$request->request->get('cin_no');
        $correspondant_bank=$request->request->get('correspondant_bank');
        $correspondant_account_no=$request->request->get('correspondant_account_no');
        $location=$request->request->get('location');
        $swift_bic_code=$request->request->get('swift_bic_code');




        if($edit_id=="0")
        {
            $destinationPath =base_path()."/assets/uploadimage/company/";

            if(isset($_FILES['header_image']))
            {
                $header_image = $request->file('header_image');

                if($request->hasFile('header_image'))
                {
                    // $img_to_upload=$img->getClientOriginalName();

                    $file_ext = $header_image->getClientOriginalExtension();

                    $file_size = $header_image->getSize();

                    $img_to_upload=$name."_header".".".$file_ext;

                    $upload_success = $header_image->move($destinationPath, $img_to_upload);
                    //var_dump($upload_success);die;
                    //var_dump($img->getClientOriginalName());die;
                    /*foreach ($img as $img)
                    {
                        var_dump($img);die;
                        $img_to_upload=$img->getClientOriginalName();

                        $file_ext = $img->getClientOriginalExtension();

                        $file_size = $img->getSize();

                        $upload_success = $img->move($destinationPath, $img_to_upload);
                    }*/
                }else{
                    $img_to_upload= null;
                }


            }


            if(isset($_FILES['footer_image']))
            {
                $footer_image = $request->file('footer_image');


                if($request->hasFile('footer_image'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $footer_image->getClientOriginalExtension();

                    $file_size = $footer_image->getSize();

                    //$img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;
                    $img1_to_upload=$name."_footer".".".$file_ext;

                    $upload_success = $footer_image->move($destinationPath, $img1_to_upload);

                }else{
                    $img1_to_upload= null;
                }


            }
            if(isset($_FILES['stamp_image']))
            {
                $stamp_image = $request->file('stamp_image');


                if($request->hasFile('stamp_image'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $stamp_image->getClientOriginalExtension();

                    $file_size = $stamp_image->getSize();

                    //$img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;
                    $stamp_upload=$name."_stamp".".".$file_ext;

                    $upload_success = $stamp_image->move($destinationPath, $stamp_upload);

                }else{
                    $stamp_upload= null;
                }


            }

            $data = array();
            $data['name']= $name;
            $data['registered_address']= $registered_address;
            $data['corresponding_address']= $corresponding_address;
            $data['phone_number']= $phone_number;
            $data['fax_no']= $fax_no;
            $data['vat_regs_no']= $vat_regs_no;
            $data['grio_no']= $grio_no;
            $data['bank']= $bank;
            $data['branch']= $branch;
            $data['account_no']= $account_no;


            $data['sales_tax_declaration']= $account_no;
            $data['terms_condition']= $terms_condition;
            $data['company_prefix']= $company_prefix;
            $data['service_reg_no']= $service_reg_no;
            $data['service_reg_no_dated']= $service_reg_no_dated;
            $data['tin_no']= $tin_no;
            $data['pan_no']= $pan_no;
            $data['ecc_no']= $ecc_no;
            $data['ecc_dated']= $ecc_dated;
            $data['excise_rabge']= $excise_rabge;
            $data['excise_division']= $excise_division;
            $data['commissioner_rate']= $commissioner_rate;
            $data['gst_no']= $gst_no;
            $data['arn_no']= $arn_no;
            $data['it_tds']= $it_tds;
            $data['cin_no']= $cin_no;
            $data['correspondant_bank']= $correspondant_bank;
            $data['correspondant_account_no']= $correspondant_account_no;
            $data['location']= $location;
            $data['swift_bic_code']= $swift_bic_code;

            $data['header_image']= $img_to_upload ?? null;
            $data['footer_image']= $img1_to_upload ?? null;
            $data['stamp_image']= $stamp_upload ?? null;


            $data['addeddby']= $user_id ;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("tbl_company")->insert($data);

            if($query_insert==true)
            {

                $inserted_company_id = DB::getPdo()->lastInsertId();

                $unique_id="CO/$inserted_company_id";

                $result = DB::table("tbl_company")
                ->where('id', $inserted_company_id)
                ->update([
                    'unique_id'=> $unique_id
                ]);

                if(isset($_POST['plants']['ecc_no']))
                {
                    //die("here");

                    foreach($_POST['plants']['ecc_no'] as $key=>$value) {
                        // do stuff

                        /*echo $key;
                        echo "<br/>";
                        echo $value;
                        echo "<br/>";*/

                        $plants_id=$_POST['plants']['plants_id'][$key];
                        $ecc_no=$_POST['plants']['ecc_no'][$key];
                        $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$key];
                        $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$key];
                        $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$key];

                        $plantsdata['company_id']=$inserted_company_id;
                        $plantsdata['ecc_no']=$ecc_no;
                        $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                        $plantsdata['ecc_no_dated']=$ecc_no_dated;
                        $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    /*die;
                    $totalplants=sizeof($_POST['plants']['ecc_no']);

                    for($i=1;$i<=$totalplants;$i++)
                    {
                        $plants_id=$_POST['plants']['plants_id'][$i];
                        $ecc_no=$_POST['plants']['ecc_no'][$i];
                        $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                        $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                        $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                        $plantsdata['company_id']=$inserted_company_id;
                        $plantsdata['ecc_no']=$ecc_no;
                        $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                        $plantsdata['ecc_no_dated']=$ecc_no_dated;
                        $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);

                    }*/
                }


                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'company_id'=>$inserted_company_id));
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

            //echo $edit_id;die;

            $date=date("Y/m/d h:m:s");

            //var_dump($data);die;

            $destinationPath =base_path()."/assets/uploadimage/company/";
            $data = array();
            //die("here");

            if(isset($_FILES['header_image']))
            {
                $header_image = $request->file('header_image');

                if($request->hasFile('header_image'))
                {

                    $file_ext = $header_image->getClientOriginalExtension();

                    $file_size = $header_image->getSize();

                    //$img_to_upload=$process_id."_".$process_name.".".$file_ext;
                    $img_to_upload=$name."_header".".".$file_ext;

                    $upload_success = $header_image->move($destinationPath, $img_to_upload);

                    $data['header_image'] = $img_to_upload;

                    //var_dump($data);die;

                }



            }


            if(isset($_FILES['footer_image']))
            {
                $footer_image = $request->file('footer_image');


                if($request->hasFile('footer_image'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $footer_image->getClientOriginalExtension();

                    $file_size = $footer_image->getSize();

                    //$img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;
                    $img1_to_upload=$name."_footer".".".$file_ext;

                    $upload_success = $footer_image->move($destinationPath, $img1_to_upload);
                    $data['footer_image'] = $img1_to_upload;

                }


            }
            if(isset($_FILES['stamp_image']))
            {
                $stamp_image = $request->file('stamp_image');


                if($request->hasFile('stamp_image'))
                {
                    //$img1_to_upload=$img->getClientOriginalName();

                    $file_ext = $stamp_image->getClientOriginalExtension();

                    $file_size = $stamp_image->getSize();

                    //$img1_to_upload=$process_id."_".$process_name."_1".".".$file_ext;
                    $stamp_upload=$name."_stamp".".".$file_ext;

                    $upload_success = $stamp_image->move($destinationPath, $stamp_upload);
                    $data['stamp_image'] = $stamp_upload;

                }


            }


            $data['name']= $name;
            $data['registered_address']= $registered_address;
            $data['corresponding_address']= $corresponding_address;
            $data['phone_number']= $phone_number;
            $data['fax_no']= $fax_no;
            $data['vat_regs_no']= $vat_regs_no;
            $data['grio_no']= $grio_no;
            $data['bank']= $bank;
            $data['branch']= $branch;
            $data['account_no']= $account_no;
            $data['sales_tax_declaration']= $sales_tax_declaration;
            $data['terms_condition']= $terms_condition;
            $data['company_prefix']= $company_prefix;
            $data['service_reg_no']= $service_reg_no;
            $data['service_reg_no_dated']= $service_reg_no_dated;
            $data['tin_no']= $tin_no;
            $data['pan_no']= $pan_no;
            $data['ecc_no']= $ecc_no;
            $data['ecc_dated']= $ecc_dated;
            $data['excise_rabge']= $excise_rabge;
            $data['excise_division']= $excise_division;
            $data['commissioner_rate']= $commissioner_rate;
            $data['gst_no']= $gst_no;
            $data['arn_no']= $arn_no;
            $data['it_tds']= $it_tds;
            $data['cin_no']= $cin_no;
            $data['correspondant_bank']= $correspondant_bank;
            $data['correspondant_account_no']= $correspondant_account_no;
            $data['location']= $location;
            $data['swift_bic_code']= $swift_bic_code;


            $data['modifiedby']= $user_id;
            $data['modifieddttm']= $date;




            /*$data = array(
                'process_id'=>$process_id,
                'name' => $process_name,
                'category'=>$category,
                'is_fixed_process'=>$process_avg_completion_time,
                'process_avg_completion_time'=>$process_avg_completion_time,
                'fixed_cost'=>$fixed_cost,
                'running_cost'=>$running_cost,
                'modifiedby'=>$user_id,
                'modifieddttm'=>"$date"
            );*/

            //print_r($data);die;




            $result = DB::table("tbl_company")
            ->where('id', $edit_id)
            ->update($data);

            //echo $edit_id;die;


            if(isset($_POST['plants']['ecc_no']))
            {
                //echo $edit_id;die;

                foreach($_POST['plants']['ecc_no'] as $key=>$value) {


                    $plants_id=$_POST['plants']['plants_id'][$key];
                    $ecc_no=$_POST['plants']['ecc_no'][$key];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$key];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$key];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$key];

                    $plantsdata['company_id']=$edit_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    //var_dump($plantsdata);die;

                    if($plants_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_plants")
                        ->where('id', $plants_id)
                        ->update($plantsdata);
                    }

                }
                //die("here");
                /*$totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$edit_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    if($plants_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_plants")
                        ->where('id', $plants_id)
                        ->update($plantsdata);
                    }



                }*/
            }



            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

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


    function submitneft(Request $request)
    {

        //print_r($_POST);die;
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $company_id=$request->request->get('company_id');
        $edit_id=$request->request->get('edit_id');

        //echo $company_id;die;

        if($edit_id=="0")
        {

            $tbl_rtgs_neftdata = array();
            $tbl_rtgs_neftdata['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $tbl_rtgs_neftdata['addedddttm']= $date;



            if(isset($_POST['neft']['bank_name']))
            {
                //die("here");

                foreach($_POST['neft']['bank_name'] as $key=>$value) {
                    // do stuff

                    /*echo $key;
                    echo "<br/>";
                    echo $value;
                    echo "<br/>";*/

                    $neft_id=$_POST['neft']['neft_id'][$key];
                    $bank_name=$_POST['neft']['bank_name'][$key];
                    $account_no=$_POST['neft']['account_no'][$key];
                    $branch_name=$_POST['neft']['branch_name'][$key];
                    $cost_center=$_POST['neft']['cost_center'][$key];
                    $account_name=$_POST['neft']['account_name'][$key];
                    $email_id=$_POST['neft']['email_id'][$key];
                    $mobile_number=$_POST['neft']['mobile_number'][$key];
                    $ifsc_code=$_POST['neft']['ifsc_code'][$key];
                    $account_type=$_POST['neft']['account_type'][$key];
                    $address_of_remitter=$_POST['neft']['address_of_remitter'][$key];
                    $template=$_POST['neft']['template'][$key];

                    $tbl_rtgs_neftdata['company_id']=$company_id;
                    $tbl_rtgs_neftdata['bank_name']=$bank_name;
                    $tbl_rtgs_neftdata['account_no']=$account_no;
                    $tbl_rtgs_neftdata['branch_name']=$branch_name;
                    $tbl_rtgs_neftdata['cost_center']=$cost_center;
                    $tbl_rtgs_neftdata['account_name']=$account_name;
                    $tbl_rtgs_neftdata['email_id']=$email_id;
                    $tbl_rtgs_neftdata['mobile_number']=$mobile_number;
                    $tbl_rtgs_neftdata['ifsc_code']=$ifsc_code;
                    $tbl_rtgs_neftdata['account_type']=$account_type;
                    $tbl_rtgs_neftdata['address_of_remitter']=$address_of_remitter;
                    $tbl_rtgs_neftdata['template']=$template;

                    $tbl_rtgs_neft_insert = DB::table("tbl_rtgs_neft")->insert($tbl_rtgs_neftdata);

                    $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                    $unique_id="CB/$inserted_rtgs_neft_id";

                    $result = DB::table("tbl_rtgs_neft")
                    ->where('id', $inserted_rtgs_neft_id)
                    ->update([
                        'unique_id'=> $unique_id
                    ]);
                }
                /*die;
                $totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$inserted_company_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);

                }*/
            }


            $message="Record inserted successfully.";
            $alert_type="succ";
            $mode="add";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'new_inserted_comp_id'=>$company_id));

        }
        else
        {

            $date=date("Y/m/d h:m:s");



            if(isset($_POST['neft']['bank_name']))
            {

                foreach($_POST['neft']['bank_name'] as $key=>$value) {


                    $neft_id=$_POST['neft']['neft_id'][$key];
                    $bank_name=$_POST['neft']['bank_name'][$key];
                    $account_no=$_POST['neft']['account_no'][$key];
                    $branch_name=$_POST['neft']['branch_name'][$key];
                    $cost_center=$_POST['neft']['cost_center'][$key];
                    $account_name=$_POST['neft']['account_name'][$key];
                    $email_id=$_POST['neft']['email_id'][$key];
                    $mobile_number=$_POST['neft']['mobile_number'][$key];
                    $ifsc_code=$_POST['neft']['ifsc_code'][$key];
                    $account_type=$_POST['neft']['account_type'][$key];
                    $address_of_remitter=$_POST['neft']['address_of_remitter'][$key];
                    $template=$_POST['neft']['template'][$key];


                    $tbl_rtgs_neftdata['company_id']=$company_id;
                    $tbl_rtgs_neftdata['bank_name']=$bank_name;
                    $tbl_rtgs_neftdata['account_no']=$account_no;
                    $tbl_rtgs_neftdata['branch_name']=$branch_name;
                    $tbl_rtgs_neftdata['cost_center']=$cost_center;
                    $tbl_rtgs_neftdata['account_name']=$account_name;
                    $tbl_rtgs_neftdata['email_id']=$email_id;
                    $tbl_rtgs_neftdata['mobile_number']=$mobile_number;
                    $tbl_rtgs_neftdata['ifsc_code']=$ifsc_code;
                    $tbl_rtgs_neftdata['account_type']=$account_type;
                    $tbl_rtgs_neftdata['address_of_remitter']=$address_of_remitter;
                    $tbl_rtgs_neftdata['template']=$template;

                    if($neft_id==0)
                    {


                        $tbl_rtgs_neft_insert = DB::table("tbl_rtgs_neft")->insert($tbl_rtgs_neftdata);
                        $inserted_rtgs_neft_id = DB::getPdo()->lastInsertId();

                        $unique_id="CB/$inserted_rtgs_neft_id";

                        $result = DB::table("tbl_rtgs_neft")
                        ->where('id', $inserted_rtgs_neft_id)
                        ->update([
                            'unique_id'=> $unique_id
                        ]);
                    }
                    else
                    {
                        $result = DB::table("tbl_rtgs_neft")
                        ->where('id', $neft_id)
                        ->update($tbl_rtgs_neftdata);
                    }

                }
                //die("here");
                /*$totalplants=sizeof($_POST['plants']['ecc_no']);

                for($i=1;$i<=$totalplants;$i++)
                {
                    $plants_id=$_POST['plants']['plants_id'][$i];
                    $ecc_no=$_POST['plants']['ecc_no'][$i];
                    $sales_tax_regs_no=$_POST['plants']['sales_tax_regs_no'][$i];
                    $ecc_no_dated=$_POST['plants']['ecc_no_dated'][$i];
                    $sales_tax_regs_no_dated=$_POST['plants']['sales_tax_regs_no_dated'][$i];

                    $plantsdata['company_id']=$edit_id;
                    $plantsdata['ecc_no']=$ecc_no;
                    $plantsdata['sales_tax_regs_no']=$sales_tax_regs_no;
                    $plantsdata['ecc_no_dated']=$ecc_no_dated;
                    $plantsdata['sales_tax_regs_no_dated']=$sales_tax_regs_no_dated;

                    if($plants_id==0)
                    {
                        $plants_query_insert = DB::table("tbl_plants")->insert($plantsdata);
                    }
                    else
                    {
                        $result = DB::table("tbl_plants")
                        ->where('id', $plants_id)
                        ->update($plantsdata);
                    }



                }*/
            }



            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode,'new_inserted_comp_id'=>$company_id));

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

    function editneft(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_rtgs_neft where id=$edit_id");


        foreach($tbldata as $tbldata){
            $neft_id=$tbldata->id;
            $neft_company_id=$tbldata->company_id;
            $bank_name=$tbldata->bank_name;
            $account_no=$tbldata->account_no;
            $branch_name=$tbldata->branch_name;
            $cost_center=$tbldata->cost_center;
            $account_name=$tbldata->account_name;
            $email_id=$tbldata->email_id;
            $mobile_number=$tbldata->mobile_number;
            $ifsc_code=$tbldata->ifsc_code;
            $account_type=$tbldata->account_type;
            $address_of_remitter=$tbldata->address_of_remitter;
            $template=$tbldata->template;


        }
        echo json_encode(array('neft_id'=>$neft_id,'company_id' => $neft_company_id,'bank_name'=>$bank_name,'account_no'=>$account_no,'branch_name'=>$branch_name,'cost_center'=>$cost_center,'account_name'=>$account_name,'email_id'=>$email_id,'mobile_number'=>$mobile_number,'ifsc_code'=>$ifsc_code,'account_type'=>$account_type,'address_of_remitter'=>$address_of_remitter,'template'=>$template,'message'=>''));
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


}
