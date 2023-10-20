<?php

namespace App\Http\Controllers;

use App\Models\ProcessCategory;
use Illuminate\Http\Request;
use Redirect;

class ProcessCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $processCategory = ProcessCategory::orderBy('id','desc')->get();
        $list = \Helper::getPermission('process-category-list') ? 1 : 0;
        if($list){
            return view('process-category.index',['processCategory' => $processCategory]);
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
        $cond = ProcessCategory::where('name',$request->name)->count();
        if($cond != 0){
          return 2;
        }
        $processCategory = new ProcessCategory();
        $processCategory->name = $request->name;
        $processCategory->created_by = \Helper::getAuthUser();
        $processCategory->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProcessCategory  $processCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProcessCategory $processCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProcessCategory  $processCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProcessCategory $processCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProcessCategory  $processCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcessCategory $processCategory)
    {
        $processCategory = ProcessCategory::find($request->id);
        $cond = ProcessCategory::where('name',$request->name)->count();
        if($cond != 0){
          return 2;
        }
        $processCategory->name = $request->name;
        $processCategory->updated_by = \Helper::getAuthUser();
        $processCategory->update();

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProcessCategory  $processCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,ProcessCategory $processCategory){
        ProcessCategory::find($request->id)->update(['deleted_by' => \Helper::getAuthUser()]);
        $processCategory = ProcessCategory::find($request->id)->delete();
        if($processCategory){
            return 1;
        }
    }
}
