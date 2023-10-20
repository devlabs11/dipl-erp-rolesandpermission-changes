<?php

namespace App\Http\Controllers;

use App\Models\PermissionMenuMaster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;
use Helper;
use Exception;
use Redirect;

class PermissionMenuMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission_menu = PermissionMenuMaster::where('parent_id',0)->orderBy('id','desc')->get();
        return view('permission-menu.menu.index',['permission_menu' => $permission_menu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('permission-menu.menu.addEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info("PermissionMenuMasterController::Store");
        if(count($request->all()) == 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                $user_id = \Session::get('userdata')['user_id'];
                $permissionMenuMaster = new PermissionMenuMaster();
                $permissionMenuMaster->title = $request->title;
                $permissionMenuMaster->url = $request->url;
                $permissionMenuMaster->icon = $request->icon;
                $permissionMenuMaster->created_by = $user_id;
                // $permissionMenuMaster->parent_id
                $permissionMenuMaster->save();

            } catch(Exception $e){
                DB::rollback();
                $message = $e->getMessage();
                Log::error('Exception Message: '. $message);

                $code = $e->getCode();
                Log::error('Exception Code: '. $code);

                $string = $e->__toString();
                Log::error('Exception String: '. $string);
                $file = $e->getFile();
                Log::error('Exception file: '. $file);
                $trace = $e->getTrace();
                Log::error('Exception trace: '. var_dump($trace));

                return 0;
            }
            // If we reach here, then
            // data is valid and working.
            // Commit the queries!
            DB::commit();
            return 1;
        }
        return 0;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermissionMenuMaster  $permissionMenuMaster
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $permissionMenuMaster = PermissionMenuMaster::where('parent_id',$request->id)->get();
        $childItem = PermissionMenuMaster::find($request->id);
        if ($childItem) {
            if ($childItem->parent_id === 0) {
                $breadcrumbString = $childItem->title;
            } else {
                $breadcrumb = [];
                \Helper::generateBreadcrumb($childItem->parent_id, $breadcrumb);
                $breadcrumb[] = $childItem->title;

                $breadcrumbString = implode(' > ', $breadcrumb);
            }
            // dd($breadcrumbString); // Output the breadcrumb string
        }
        // dd($breadcrumbString);
        return view('permission-menu.menu.show',['permissionMenuMaster' => $permissionMenuMaster,'breadcrumb' => $breadcrumbString,'parent_id'=>$request->id]);
    }

    public function showStore(Request $request)
    {
        Log::info("PermissionMenuMasterController::showStore");
        DB::beginTransaction();
        try {
            $user_id = \Session::get('userdata')['user_id'];
            $permissionMenuMaster = new PermissionMenuMaster();
            $permissionMenuMaster->title = $request->title;
            $permissionMenuMaster->url = $request->url;
            $permissionMenuMaster->icon = $request->icon;
            $permissionMenuMaster->created_by = $user_id;
            $permissionMenuMaster->parent_id = $request->parent_id;
            $permissionMenuMaster->save();

        } catch(Exception $e){
            DB::rollback();
            $message = $e->getMessage();
            Log::error('Exception Message: '. $message);

            $code = $e->getCode();
            Log::error('Exception Code: '. $code);

            $string = $e->__toString();
            Log::error('Exception String: '. $string);
            $file = $e->getFile();
            Log::error('Exception file: '. $file);
            $trace = $e->getTrace();
            Log::error('Exception trace: '. var_dump($trace));

            return 0;
        }
        // If we reach here, then
        // data is valid and working.
        // Commit the queries!
        DB::commit();
        return 1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissionMenuMaster  $permissionMenuMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $permissionMenuMaster = PermissionMenuMaster::find($request->id);
        return view('permission-menu.menu.addEdit',['permissionMenuMaster' => $permissionMenuMaster]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PermissionMenuMaster  $permissionMenuMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Log::info("PermissionMenuMasterController::update");
        if(count($request->all()) == 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                $user_id = \Session::get('userdata')['user_id'];
                $permissionMenuMaster = PermissionMenuMaster::find($request->id);
                $permissionMenuMaster->title = $request->title;
                $permissionMenuMaster->url = $request->url;
                $permissionMenuMaster->icon = $request->icon;
                $permissionMenuMaster->updated_by = $user_id;
                // $permissionMenuMaster->parent_id
                $permissionMenuMaster->save();

            } catch(Exception $e){
                DB::rollback();
                $message = $e->getMessage();
                Log::error('Exception Message: '. $message);

                $code = $e->getCode();
                Log::error('Exception Code: '. $code);

                $string = $e->__toString();
                Log::error('Exception String: '. $string);
                $file = $e->getFile();
                Log::error('Exception file: '. $file);
                $trace = $e->getTrace();
                Log::error('Exception trace: '. var_dump($trace));

                return 0;
            }
            // If we reach here, then
            // data is valid and working.
            // Commit the queries!
            DB::commit();
            return 1;
        }
        return 0;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionMenuMaster  $permissionMenuMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $permissionMenuMaster = PermissionMenuMaster::find($request->id);
        $user_id = \Session::get('userdata')['user_id'];
        $permissionMenuMaster->update(['deleted_by' => $user_id]);
        $permissionMenuMaster->delete();
        return 1;
    }

    public function parentWiseMenu(Request $request)
    {
        $permissionMenuMaster = PermissionMenuMaster::where('parent_id',$request->id)->get();
        // $user_id = \Session::get('userdata')['user_id'];
        // $permissionMenuMaster->update(['deleted_by' => $user_id]);
        // $permissionMenuMaster->delete();
        return $permissionMenuMaster;
    }
}
