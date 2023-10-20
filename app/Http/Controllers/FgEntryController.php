<?php

namespace App\Http\Controllers;

use App\Models\FgEntry;
use App\Models\UserOperator;
use Illuminate\Http\Request;
use PDF;
use Redirect;

class FgEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $list = \Helper::getPermission('fg-list') ? 1 : 0;
        if($list == 1){
            $fg = FgEntry::orderBy('id','desc')->get();
            $customers = \Helper::getCustomers();
            $jobCards = \Helper::anyTable('tbl_job_cart');
            $sites = \Helper::anyTable('mst_site');
            return view('fg-challan.fg-entry.index',[
                'fg' => $fg,
                'customers' => $customers,
                'jobCards' => $jobCards,
                'sites' => $sites,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $create = \Helper::getPermission('fg-create') ? 1 : 0;
        if($create == 1){
            $operator = UserOperator::get();
            $jobCards = \Helper::anyTable('tbl_job_cart');
            $table = 'mst_site';
            $sites = \Helper::anyTable($table);
            $process_categories = \Helper::anyTable('process_categories');
            $process = \Helper::anyTable('tbl_process_master');
            $questions = \DB::table('mst_qc')->where('process',24)->get();

            // dd($jobCards);
            return view('fg-challan.fg-entry.addEdit',[
                'operators' => $operator,
                'jobCards' => $jobCards,
                'sites' => $sites,
                'process_categories' => $process_categories,
                'process' => $process,
                'questions' => $questions,
                'fg' => null,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $year = \Helper::currentFincYear();
        $id_count = FgEntry::count() + 1;
        $uq = '';
        if($id_count < 10){
            $uq = "0".$id_count;
        }else {
            $uq = $id_count;
        }
        $fgEntry = new FgEntry();
        $fgEntry->entry_no = "FG/".$year."/".$uq;
        $fgEntry->created_by = \Helper::getAuthUser();
        if($request->answer){
            $answers = implode(",", $request->answer) ?? '-';
        }else{
            $answers = '-';
        }
        $fgEntry->user_operator_id = $request->operator ?? '-';
        $fgEntry->date = date('Y-m-d',strtotime($request->date)) ?? '-';
        $fgEntry->job_card_id = $request->job_card_id ?? '-';
        $fgEntry->work_order_id = $request->work_order_id ?? '-';
        $fgEntry->location = $request->location ?? '-';
        $fgEntry->process_category_id = 1 ?? 1;
        $fgEntry->process_id = 24 ?? 24;
        // $fgEntry-> = $request->work_odrer_name ?? '-';
        $fgEntry->fg_qty = $request->finished_good_quantity ?? '-';
        $fgEntry->no_boxes = $request->no_of_boxes ?? '-';
        $fgEntry->qty_kg = $request->qty_in_kg ?? '-';
        $fgEntry->answers = $answers ?? '-';
        $fgEntry->qc = $request->qc ?? '-';
        $fgEntry->complains = $request->complain ?? '-';
        $fgEntry->comments = $request->comments ?? '-';
        $fgEntry->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FgEntry  $fgEntry
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request){
        $view = \Helper::getPermission('fg-view') ? 1 : 0;
        if($view == 1){
            $fg = FgEntry::find($request->id);
            $questions = \DB::table('mst_qc')->where('process',24)->get();
            $pdf = PDF::loadView('fg-challan.fg-entry.show',[
                'fg' => $fg,
                'questions' => $questions,
            ]);
            return $pdf->stream();
            // return view('fg-challan.fg-entry.show',[
            //     'fg' => $fg,
            //     'questions' => $questions,
            // ]);
        }else{
            return redirect('/dashbard');
        }
    }


    public function search(Request $request){
        // dd($request);
        if($request->no != null || $request->customer != null || $request->work_order != null ||  $request->job_card != null || $request->location  != null ||$request->from_date != null || $request->to_date != null ){
            $query = '';
            // $myModel->whereBetween('created_at', [$date1, $date2]);
            if($request->no != null && ($request->work_order == null || $request->job_card == null || $request->location == null ||$request->from_date == null || $request->to_date == null || $request->customer == null) ){
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                // ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                ->where('entry_no', 'like', '%' . $request->no . '%')
                // ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                // ->orWhere('location', 'like', '%' . $request->location . '%')
                ->get();
            }elseif($request->work_order != null && ($request->no == null || $request->job_card == null || $request->location == null ||$request->from_date == null || $request->to_date == null  || $request->customer == null)){
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                // ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                // ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                // ->orWhere('location', 'like', '%' . $request->location . '%')
                ->get();
            }elseif($request->job_card != null && ($request->no == null || $request->work_order == null || $request->location == null || $request->from_date == null || $request->to_date == null || $request->customer == null)){
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                // ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                // ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                // ->orWhere('location', 'like', '%' . $request->location . '%')
                ->get();
            }elseif($request->location != null && ($request->no == null || $request->work_order == null || $request->job_card == null || $request->from_date == null || $request->to_date == null || $request->customer == null)){
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                // ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                // ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                // ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                ->orWhere('location', 'like', '%' . $request->location . '%')
                ->get();
            }elseif($request->from_date != null && ($request->no == null || $request->work_order == null || $request->job_card == null ||$request->location == null  || $request->customer == null)){
                $date = explode("-",$request->from_date);
                $from = date('Y-m-d',strtotime(trim($date[0])));
                $to = date('Y-m-d',strtotime(trim($date[1])));
                // dd($from,$to);s
                $from_date = date('Y-m-d',strtotime($request->from_date));
                if($request->to_date != null){
                    $to_date = date('Y-m-d',strtotime($request->to_date));
                }else{
                    $to_date = date('Y-m-d',strtotime(now()->today()));
                }
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                // ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                // ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                // ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                // ->orWhere('location', 'like', '%' . $request->location . '%')
                ->whereBetween('date',[$from,$to])
                // ->whereDate('date', '>=', $from)
                // ->whereDate('date', '<=', $to)
                ->get();
            }elseif($request->customer != null && ($request->no == null || $request->work_order == null || $request->job_card == null ||$request->location == null  || $request->from_date == null || $request->to_date == null)){
                $query = FgEntry::
                // \DB::table('fg_entries')
                with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                ->leftJoin('tbl_salesworkorder', function($join) {
                    $join->on('fg_entries.work_order_id', '=', 'tbl_salesworkorder.id');
                  })
                // ->leftJoin('tbl_salesworkorder', 'tbl_salesworkorder.id', '=', 'fg_entries.work_order_id')
                ->where('tbl_salesworkorder.customer_name', 'like', '%' . $request->customer . '%')
                ->get();
                //  FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                // ->leftjoin('tbl_salesworkorder','tbl_salesworkorder.id','=','')
                // ->orWhere('work_order_id', 'like', '%' . $request->work_order . '%')
                // ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                // ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                // ->orWhere('location', 'like', '%' . $request->location . '%')
                // ->whereBetween('created_at', [$$from_date, $to_date])
                //  ->get();

            }else{
                $query = FgEntry::with(['getJobCardDetail','getWorkOrderDetail','getLocation'])
                ->where('work_order_id', 'like', '%' . $request->work_order . '%')
                ->orWhere('entry_no', 'like', '%' . $request->no . '%')
                ->orWhere('job_card_id', 'like', '%' . $request->job_card . '%')
                ->orWhere('location', 'like', '%' . $request->location . '%')
                ->whereBetween('created_at', [$$from_date, $to_date])
                ->get();
            }

            return $query;
        }else{
            return 2;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FgEntry  $fgEntry
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $edit = \Helper::getPermission('fg-edit') ? 1 : 0;
        if($edit == 1){
            $fg = FgEntry::find($request->id);
            $operator = UserOperator::get();
            $jobCards = \Helper::anyTable('tbl_job_cart');
            $table = 'mst_site';
            $sites = \Helper::anyTable($table);
            $process_categories = \Helper::anyTable('process_categories');
            $process = \Helper::anyTable('tbl_process_master');
            $questions = \DB::table('mst_qc')->where('process',24)->get();
            return view('fg-challan.fg-entry.addEdit',[
                'operators' => $operator,
                'jobCards' => $jobCards,
                'sites' => $sites,
                'process_categories' => $process_categories,
                'process' => $process,
                'questions' => $questions,
                'fg' => $fg,
            ]);
        }else{
            return redirect('/dashboard');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FgEntry  $fgEntry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $fgEntry = FgEntry::find($request->id);
        // $fgEntry->entry_no = "FG/".$year."/".$uq;
        $fgEntry->updated_by = \Helper::getAuthUser();
        if($request->answer){
            $answers = implode(",", $request->answer) ?? '-';
        }else{
            $answers = '-';
        }
        // $answers = implode(",", $request->answer) ?? '-';
        $fgEntry->user_operator_id = $request->operator ?? '-';
        $fgEntry->date = date('Y-m-d',strtotime($request->date)) ?? '-';
        $fgEntry->job_card_id = $request->job_card_id ?? '-';
        $fgEntry->work_order_id = $request->work_order_id ?? '-';
        $fgEntry->location = $request->location ?? '-';
        $fgEntry->process_category_id = 1 ?? 1;
        $fgEntry->process_id = 24 ?? 24;
        // $fgEntry-> = $request->work_odrer_name ?? '-';
        $fgEntry->fg_qty = $request->finished_good_quantity ?? '-';
        $fgEntry->no_boxes = $request->no_of_boxes ?? '-';
        $fgEntry->qty_kg = $request->qty_in_kg ?? '-';
        $fgEntry->answers = $answers ?? '-';
        $fgEntry->qc = $request->qc ?? '-';
        $fgEntry->complains = $request->complain ?? '-';
        $fgEntry->comments = $request->comments ?? '-';
        $fgEntry->update();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FgEntry  $fgEntry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,FgEntry $fgEntry){
        $user_id = \Session::get('userdata')['user_id'];
        $fg = FgEntry::where('id',$request->id)->update(['deleted_by' => $user_id]);
        FgEntry::where('id',$request->id)->delete();
        return 1;
    }

    public function workOrders(Request $request){
        $id = $request->id;
        $workOrders = \Helper::jobWorkOrder($id);
        return $workOrders;
    }

    public function workOrdersName(Request $request){
        $id = $request->id;
        $workOrders = \DB::table('tbl_salesworkorder')->leftjoin('tbl_transaction_category','tbl_transaction_category.id','=','tbl_salesworkorder.transaction_category')->where('tbl_salesworkorder.id',$id)->select('tbl_transaction_category.description','tbl_salesworkorder.order_name')->get();
        // dd($workOrders);
        return $workOrders[0] ?? '-';
    }
}
