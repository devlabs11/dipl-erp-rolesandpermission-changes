<?php

namespace App\Http\Controllers;

use App\Models\JobCardType;
use Illuminate\Http\Request;
use Redirect;

class JobCardTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $jobCardType = JobCardType::orderBy('id','desc')->get();
        $list = \Helper::getPermission('jc-type-m-list') ? 1 : 0;
        if($list == 1){
            return view('job-card.type.index',compact('jobCardType'));
        }else{
            Redirect::to('dashboard')->send();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user_id = \Session::get('userdata')['user_id'];
        $jobCardType = new JobCardType();
        $jobCardType->name = $request->name;
        $jobCardType->created_by = $user_id;
        $jobCardType->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobCardType  $jobCardType
     * @return \Illuminate\Http\Response
     */
    public function show(JobCardType $jobCardType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobCardType  $jobCardType
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCardType $jobCardType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobCardType  $jobCardType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobCardType $jobCardType){
        $user_id = \Session::get('userdata')['user_id'];
        $jobCardType = JobCardType::find($request->id);
        $jobCardType->name = $request->name;
        $jobCardType->updated_by = $user_id;
        $jobCardType->update();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobCardType  $jobCardType
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobCardType $jobCardType,Request $request)
    {
        $jobCardType = JobCardType::find($request->id)->delete();
        if($jobCardType){
            return 1;
        }
    }
}
