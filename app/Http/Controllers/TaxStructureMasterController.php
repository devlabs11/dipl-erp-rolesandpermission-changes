<?php

namespace App\Http\Controllers;

use App\Models\TaxStructureMaster;
use App\Models\TaxDetail;
use Illuminate\Http\Request;
use Redirect;

class TaxStructureMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $taxStructureMaster = TaxStructureMaster::orderBy('id','desc')->get();
        $list = \Helper::getPermission('tax-structure-m-list') ? 1 : 0;
        if($list == 1){
            return view('tax-structure-master.index',compact('taxStructureMaster'));
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
        $tax_structure = null;
        $taxs = TaxDetail::all();
        return view('tax-structure-master.add-edit',compact('tax_structure','taxs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user_id = \Session::get('userdata')['user_id'];
        $last_id =  TaxStructureMaster::latest()->first()->id ?? 0;
        $uq_id =  $last_id + 1;
        $taxStructureMaster = new TaxStructureMaster();
        $taxStructureMaster->unique_id = "V/TS/".$uq_id;
        $taxStructureMaster->name = $request->name;
        $taxStructureMaster->tax_id = $request->tax_id;
        $taxStructureMaster->status = 0;
        $taxStructureMaster->created_by = $user_id;
        $taxStructureMaster->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaxStructureMaster  $taxStructureMaster
     * @return \Illuminate\Http\Response
     */
    public function show(TaxStructureMaster $taxStructureMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaxStructureMaster  $taxStructureMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $tax_structure = TaxStructureMaster::find($request->id);
        $taxs = TaxDetail::all();
        return view('tax-structure-master.add-edit',compact('tax_structure','taxs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaxStructureMaster  $taxStructureMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaxStructureMaster $taxStructureMaster)
    {
        $user_id = \Session::get('userdata')['user_id'];
        $taxStructureMaster = TaxStructureMaster::find($request->id);
        // $taxStructureMaster->unique_id = "V/TS/".$uq_id;
        $taxStructureMaster->name = $request->name;
        $taxStructureMaster->tax_id = $request->tax_id;
        $taxStructureMaster->updated_by = $user_id;
        $taxStructureMaster->update();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaxStructureMaster  $taxStructureMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaxStructureMaster $taxStructureMaster)
    {
        //
    }

    public function status(Request $request){
        $taxStructureMaster = TaxStructureMaster::find($request->id);
        $old_status = $taxStructureMaster->status;
        if($old_status == 1){
            $taxStructureMaster->status = 0;
        }else{
            $taxStructureMaster->status = 1;
        }
        $taxStructureMaster->update();
        return 1;
    }
}
