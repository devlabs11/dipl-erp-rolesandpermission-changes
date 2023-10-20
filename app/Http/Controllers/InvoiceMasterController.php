<?php

namespace App\Http\Controllers;

use App\Models\InvoiceMaster;
use Illuminate\Http\Request;
use Redirect;

class InvoiceMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('invoice-master.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('invoice-master.addEdit')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvoiceMaster  $invoiceMaster
     * @return \Illuminate\Http\Response
     */
    public function show(InvoiceMaster $invoiceMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvoiceMaster  $invoiceMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(InvoiceMaster $invoiceMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvoiceMaster  $invoiceMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvoiceMaster $invoiceMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvoiceMaster  $invoiceMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvoiceMaster $invoiceMaster)
    {
        //
    }
}
