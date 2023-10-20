<?php

namespace App\Http\Controllers;

use App\Models\AdvanceFeatureMaster;
use Illuminate\Http\Request;
use Redirect;

class AdvanceFeatureMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $list = \Helper::getPermission('advance-security-feature-list') ? 1 : 0;
        if($list){
            $data = AdvanceFeatureMaster::orderBy('id','desc')->get();
            //    $currency = Helper::getAllCurrency();
            return view('advance-printing-feature.index',[
                'data' => $data,
                'currency' => \Helper::getAllCurrency(),
            ]);
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
        // return view('advance-printing-feature.addEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = new AdvanceFeatureMaster();
        $data->name = $request->name;
        $data->currency_id = $request->currency;
        $data->price = $request->price;
        $data->created_by = \Helper::getAuthUser();
        $data->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdvanceFeatureMaster  $advanceFeatureMaster
     * @return \Illuminate\Http\Response
     */
    public function show(AdvanceFeatureMaster $advanceFeatureMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdvanceFeatureMaster  $advanceFeatureMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(AdvanceFeatureMaster $advanceFeatureMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdvanceFeatureMaster  $advanceFeatureMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $data = AdvanceFeatureMaster::find($request->id);
        $data->name = $request->name;
        $data->currency_id = $request->currency;
        $data->price = $request->price;
        $data->created_by = \Helper::getAuthUser();
        $data->save();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdvanceFeatureMaster  $advanceFeatureMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $data = AdvanceFeatureMaster::find($request->id);
        $data->deleted_by = \Helper::getAuthUser();
        $data->save();
        $data = AdvanceFeatureMaster::find($request->id)->delete();

        return 1;
    }

    public function getAdvanceFeature(Request $request){
        $data = AdvanceFeatureMaster::select('id','name','price')->get();
        // dd($data);
        return $data;
    }
}
