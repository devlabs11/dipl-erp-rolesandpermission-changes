<?php

namespace App\Http\Controllers;

use App\Models\SalesMaster;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSalesMasterRequest;
use App\Http\Requests\UpdateSalesMasterRequest;
use Redirect;

class SalesMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = \DB::table('tbl_user')->where('designation',53)->select('id','fullname','sign')->orderBy('id','desc')->get();
        $list = \Helper::getPermission('sales-m-list') ? 1 : 0;
        if($list){
            return view('sales-master.index',compact('sales'));
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
        $sales = \DB::table('tbl_user')->where('designation',53)->select('id','fullname')->get();
       return view('sales-master.create',compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSalesMasterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $user_id = \Session::get('userdata')['user_id'];

       $filename = $request->name . '.' . $request->sign->extension();
       $request->sign->move(public_path('sales_person_sign'), $filename);

       $salesMaster = new SalesMaster();
       $salesMaster->user_id = $request->name;
       $salesMaster->sign_name = $filename;
       $salesMaster->created_by = $user_id;
       $salesMaster->save();

       return redirect('sales-master')->with('success','Image uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesMaster  $salesMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SalesMaster $salesMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesMaster  $salesMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesMaster $salesMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSalesMasterRequest  $request
     * @param  \App\Models\SalesMaster  $salesMaster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSalesMasterRequest $request, SalesMaster $salesMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesMaster  $salesMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesMaster $salesMaster)
    {
        //
    }
}
