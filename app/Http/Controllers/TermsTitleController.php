<?php

namespace App\Http\Controllers;

use Session;
use App\Models\TermsTitle;
use Illuminate\Http\Request;
use Redirect;

class TermsTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $title = new TermsTitle();
        $title->categories_id = $request->category;
        $title->name = $request->name;
        $title->created_by = $user_id;
        $title->save();

        return true;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TermsTitle  $termsTitle
     * @return \Illuminate\Http\Response
     */
    public function show(TermsTitle $termsTitle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TermsTitle  $termsTitle
     * @return \Illuminate\Http\Response
     */
    public function edit(TermsTitle $termsTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TermsTitle  $termsTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TermsTitle $termsTitle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TermsTitle  $termsTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(TermsTitle $termsTitle)
    {
        //
    }

    public function categorywiseTitle(Request $request,TermsTitle $termsTitle){
        $termsTitle = TermsTitle::with(['title'])->where('categories_id',$request->id)->get();
        // foreach($termsTitle as $item){z}
        // return $termsTitle;
        return response()->json($termsTitle);

    }


}
