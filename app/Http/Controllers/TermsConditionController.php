<?php

namespace App\Http\Controllers;

use Session;
use App\Models\TermsCondition;
use Illuminate\Http\Request;
use App\Models\TermsConditionCategory;
use Redirect;

class TermsConditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $termsCondition = TermsCondition::orderBy('id','desc')->get();
        $list = \Helper::getPermission('tc-m-list') ? 1 : 0;
        if($list){
            return view('terms-condition.index',compact('termsCondition'));
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
        $category = TermsConditionCategory::all();
        return view('terms-condition.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $termsCondition = new TermsCondition();
        $termsCondition->categories_id = $request->category;
        $termsCondition->title_value_id = $request->term_title;
        $termsCondition->term_value = $request->term_value ?? 'N/A';
        $termsCondition->created_by = $user_id;
        $resp = $termsCondition->save();
        if($resp){
            return 1;
        }else{
            return 0;
        }

        return redirect('terms-condition-master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermsCondition  $termsCondition
     * @return \Illuminate\Http\Response
     */
    public function show(TermsCondition $termsCondition)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermsCondition  $termsCondition
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,TermsCondition $termsCondition)
    {
        $category = TermsConditionCategory::all();
        $termsCondition = TermsCondition::find($request->id);
        return view('terms-condition.edit',compact('termsCondition','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TermsCondition  $termsCondition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermsCondition $termsCondition)
    {
        $user_id = \Session::get('userdata')['user_id'];
        $termsCondition = TermsCondition::find($request->id);
        $termsCondition->categories_id = $request->category;
        $termsCondition->title_value_id = $request->term_title;
        $termsCondition->term_value = $request->term_value ?? 'N/A';
        $termsCondition->updated_by = $user_id;
        $resp = $termsCondition->save();
        if($resp){
            return 1;
        }else{
            return 0;
        }

        return redirect('terms-condition-master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermsCondition  $termsCondition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,TermsCondition $termsCondition)
    {
        TermsCondition::find($request->id)->delete();

        return redirect()->back();
    }

    public function TermTitlewiseValue(Request $request){
        // dd($request->id);
        $termsValue = TermsCondition::whereIn('title_value_id',$request->id)->select('id','categories_id','title_value_id','term_value')->get();
        return $termsValue;
    }
    public function termsValue(Request $request){
        // dd($request->id);
        $termsValue = TermsCondition::whereIn('id',$request->id)->select('id','categories_id','title_value_id','term_value')->get();
        return $termsValue;
    }
}
