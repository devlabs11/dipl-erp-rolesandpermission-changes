<?php

namespace App\Http\Controllers;

use App\Models\UserOperator;
use Illuminate\Http\Request;
use Hash;
use DataTables;
use App\Models\Roles;
use Redirect;

class UserOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        $data = UserOperator::orderBy('id','desc')->get();
        // if ($request->ajax()) {
        //     $data = UserOperator::with(['getSiteName'])->get();
        //     return DataTables::of($data)
        //             ->addColumn('action', function($row){
        //                 $btn = '<a href="'.route('user-operator-edit', ['id' => $row->id]).'"><i class="fa fa-edit" style="font-weight:normal !important;color:#009ef7"></i></a>';
        //                 if($row->status == 1){
        //                     $btn .= '<a onclick="statusChange('.$row->id.')" title="Change Status to Inactive" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-toggle-on" style="color:green;"></i></a>';
        //                 }else{
        //                     $btn .= '<a onclick="statusChange('.$row->id.')" title="Change Status to active" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-toggle-off" style="color:green;"></i></a>';
        //                 }
        //                 $btn .= '<a data-id="'.$row->id.'" onclick="deleteRecord('.$row->id.')" title="Delete" style="cursor: pointer;font-weight:normal !important;" class="menu-link flex-stack px-3 delete"><i class="fa fa-trash" style="color:red;"> </i></a>';
        //                 return $btn;
        //             })
        //             ->editColumn('site_id', function ($data) {
        //                 return $data->getSiteName ? $data->getSiteName->description : '';
        //             })
        //             ->rawColumns(['action','site_id'])
        //             ->make(true);
        // }
        $list = \Helper::getPermission('operator-list') ? 1 : 0;
        if($list){
            return view('user-operator.index',['operators' => $data]);
        }else{
            Redirect::to('dashboard')->send();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $userOperator = null;
        $table = 'mst_site';
        $sites = \Helper::anyTable($table);
        return view('user-operator.addEdit',[
            'userOperator' => $userOperator,
            'sites' => $sites,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $userOperator = new UserOperator();
        $year = \Helper::currentFincYear();
        $lastId = UserOperator::count() + 1;
        if($lastId < 10){
            $uq = "0".$lastId;
        }else {
            $uq = $lastId;
        }
        $emp = UserOperator::where('emp_code',$request->emp_code)->count();
        if($emp != 0){
          return 2;
        }
        $userOperator->unique_id = 'UO/'.$year.'/'.$uq;
        $userOperator->name = $request->name;
        $userOperator->fullname = $request->full_name;
        $userOperator->emp_code = $request->emp_code;
        $userOperator->password = Hash::make($request->password);
        $userOperator->email = $request->email;
        $userOperator->site_id = $request->site_id;
        $userOperator->status = $request->status;
        $userOperator->created_by = \Helper::getAuthUser();
        $userOperator->save();

        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserOperator  $userOperator
     * @return \Illuminate\Http\Response
     */
    public function show(UserOperator $userOperator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserOperator  $userOperator
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $userOperator = UserOperator::find($request->id);
        $table = 'mst_site';
        $sites = \Helper::anyTable($table);
        return view('user-operator.addEdit',[
            'userOperator' => $userOperator,
            'sites' => $sites,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserOperator  $userOperator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserOperator $userOperator){
        $userOperator = UserOperator::find($request->id);
        // /$emp = UserOperator::where('emp_code',$request->emp_code)->where('id',$request->id)->count();
        // $prev_emp_code = $userOperator->emp_code;
        // if($emp != 0){
        //   return 2;
        // }
        $userOperator->name = $request->name;
        $userOperator->fullname = $request->full_name;
        $userOperator->emp_code = $request->emp_code;
        $userOperator->password = Hash::make($request->password);
        $userOperator->email = $request->email;
        $userOperator->site_id = $request->site_id;
        $userOperator->status = $request->status;
        $userOperator->updated_by = \Helper::getAuthUser();
        $userOperator->update();

        return 1;
    }

    public function search(Request $request){
        if($request->fullName != null || $request->status != null || $request->name != null ||  $request->emp_code != null ){
            $query = '';
            if($request->emp_code != null && ($request->fullName == null || $request->status == null || $request->name == null) ){
                $query = UserOperator::with(['getSiteName'])
                // ->where('fullName', 'like', '%' . $request->fullname . '%')
                ->where('emp_code', 'like', '%' . $request->emp_code . '%')
                // ->orWhere('status', 'like', '%' . $request->status . '%')
                // ->orWhere('name', 'like', '%' . $request->name . '%')
                ->get();
            }elseif($request->fullname != null && ($request->emp_code == null || $request->status == null || $request->name == null)){
                $query = UserOperator::with(['getSiteName'])
                ->where('fullName', 'like', '%' . $request->fullname . '%')
                // ->orWhere('emp_code', 'like', '%' . $request->emp_code . '%')
                // ->orWhere('status', 'like', '%' . $request->status . '%')
                // ->orWhere('name', 'like', '%' . $request->name . '%')
                ->get();
            }elseif($request->status != null && ($request->emp_code == null || $request->fullname == null || $request->name == null)){
                $query = UserOperator::with(['getSiteName'])
                // ->where('fullName', 'like', '%' . $request->fullname . '%')
                // ->orWhere('emp_code', 'like', '%' . $request->emp_code . '%')
                ->orWhere('status', 'like', '%' . $request->status . '%')
                // ->orWhere('name', 'like', '%' . $request->name . '%')
                ->get();
            }elseif($request->name != null && ($request->emp_code == null || $request->fullname == null || $request->status == null)){
                $query = UserOperator::with(['getSiteName'])
                // ->where('fullName', 'like', '%' . $request->fullname . '%')
                // ->orWhere('emp_code', 'like', '%' . $request->emp_code . '%')
                // ->orWhere('status', 'like', '%' . $request->status . '%')
                ->orWhere('name', 'like', '%' . $request->name . '%')
                ->get();
            }else{
                $query = UserOperator::with(['getSiteName'])->where('fullName', 'like', '%' . $request->fullname . '%')
                ->orWhere('emp_code', 'like', '%' . $request->emp_code . '%')
                ->orWhere('status', 'like', '%' . $request->status . '%')
                ->orWhere('name', 'like', '%' . $request->name . '%')
                ->get();
            }

            return $query;
        }else{
            return 2;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserOperator  $userOperator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $userOperator = UserOperator::find($request->id);
        $userOperator->deleted_by = \Helper::getAuthUser();
        $userOperator->update();

        $userOperator = UserOperator::find($request->id);
        // $userOperator->deleted_by = \Helper::getAuthUser();
        $userOperator->delete();

        return 1;
    }

    public function status(Request $request){
        $userOperator = UserOperator::find($request->id);
        if($userOperator->status == 1){
            $userOperator->status = 2;
            $userOperator->update();
        }else{
            $userOperator->status = 1;
            $userOperator->update();
        }
        return 1;
    }
}
