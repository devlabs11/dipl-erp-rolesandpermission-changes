<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Dropdownmst extends Controller
{
    function index($id)
    {
        $dropdownmst = DB::select("select * from master where id=$id");
        foreach($dropdownmst as $dropdownmst) {
            $title=$dropdownmst->title;
            $tbl_name=$dropdownmst->tbl_name;
        }

        $tbldata = DB::select("select * from $tbl_name");
        //$title = DB::table('dropdownmst')->where('id' ,$id)->value('title');
        return view('dropdownmst.index',['tbldata'=>$tbldata,'title'=>$title]);
    }
}
