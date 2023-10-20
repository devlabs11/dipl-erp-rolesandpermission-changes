<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;
use Redirect;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $tax = Tax::orderBy('id','desc')->get();
        $list = \Helper::getPermission('gst-list') ? 1 : 0;
        if($list == 1){
            return view('taxes.index',compact('tax'));
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
        return view('taxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $user_id = \Session::get('userdata')['user_id'];
        $tax = new Tax;
        $tax->sgst = $request->sgst;
        $tax->cgst = $request->cgst;
        $tax->igst = $request->igst;
        $tax->created_by = $user_id;
        $resp = $tax->save();
        if($resp){
            return 1;
        }else{
            return 0;
        }
        return redirect('tax-master');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function show(Tax $tax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax,Request $request){
        $tax = Tax::find($request->id);
        return view('taxes.edit',compact('tax'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tax $tax){
        $user_id = \Session::get('userdata')['user_id'];
        $tax = Tax::find($request->id);
        $tax->sgst = $request->sgst;
        $tax->cgst = $request->cgst;
        $tax->igst = $request->igst;
        $tax->updated_by = $user_id;
        $resp = $tax->save();
        if($resp){
            return 1;
        }else{
            return 0;
        }
        return redirect('tax-master');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $tax,Request $request){
        Tax::find($request->id)->delete();

        return redirect()->back();
    }
    /**
     * restore specific Tax
     *
     * @return void
     */
    public function restore($id)
    {
        Tax::withTrashed()->find($id)->restore();

        return redirect()->back();
    }

    /**
     * restore all Tax
     *
     * @return response()
     */
    public function restoreAll()
    {
        Tax::onlyTrashed()->restore();

        return redirect()->back();
    }
}
