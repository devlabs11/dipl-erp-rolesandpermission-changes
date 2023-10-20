<?php

namespace App\Http\Controllers;

// use Auth;
use Session;
use Illuminate\Support\Facades\Auth;
use App\Models\ProspectMaster;
use Illuminate\Http\Request;
// use Illuminate\Validation\Validator;
use App\Http\Requests\ProspectMasterRequest;
use Illuminate\Support\Facades\Validator;
use Redirect;

class ProspectMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pm = ProspectMaster::orderBy('id','desc')->get();
        $list = \Helper::getPermission('prospect-master-list') ? 1 : 0;
        if($list){
            return view('prospect-master.index',compact('pm'));
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
        return view('prospect-master.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $pm = new ProspectMaster();
        $pm->company = $request->company;
        $pm->contact_person = $request->contact_person;
        $pm->phone = $request->phone;
        $pm->email = $request->email;
        $pm->department = $request->department;
        $pm->designation = $request->designation;
        $pm->quotation_attention = $request->quotation_attention;
        $user_id = \Session::get('userdata')['user_id'];
        $pm->created_by = $user_id;
        $resp = $pm->save();

        if($resp){
            return 1;
        }else{
            return 0;
        }

        return redirect()->route('prospect-master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProspectMaster  $prospectMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ProspectMaster $prospectMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProspectMaster  $prospectMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $prospectMaster = ProspectMaster::find($request->id);
        return view('prospect-master.edit',compact('prospectMaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProspectMaster  $prospectMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProspectMaster $prospectMaster){

        $pm = ProspectMaster::find($request->id);
        $pm->company = $request->company;
        $pm->contact_person = $request->contact_person;
        $pm->phone = $request->phone;
        $pm->email = $request->email;
        $pm->department = $request->department;
        $pm->designation = $request->designation;
        $pm->quotation_attention = $request->quotation_attention;
        $user_id = \Session::get('userdata')['user_id'];
        $pm->updated_by = $user_id;
        $resp = $pm->save();

        if($resp){
            return 1;
        }else{
            return 0;
        }

        return redirect()->route('prospect-master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProspectMaster  $prospectMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProspectMaster $prospectMaster,Request $request){
        ProspectMaster::find($request->id)->delete();

        return redirect()->back();
    }
    /**
     * restore specific ProspectMaster
     *
     * @return void
     */
    public function restore($id)
    {
        ProspectMaster::withTrashed()->find($id)->restore();

        return redirect()->back();
    }

    /**
     * restore all ProspectMaster
     *
     * @return response()
     */
    public function restoreAll()
    {
        ProspectMaster::onlyTrashed()->restore();

        return redirect()->back();
    }
}
