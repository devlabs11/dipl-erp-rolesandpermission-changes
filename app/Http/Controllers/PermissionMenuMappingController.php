<?php

namespace App\Http\Controllers;

use App\Models\PermissionMenuMapping;
use App\Models\PermissionMenuMaster;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use DB;
use Exception;
use Redirect;

class PermissionMenuMappingController extends Controller
{
    
    public function index(){
        
        $permission_menu = PermissionMenuMapping::orderBy('id','desc')->get();
        // dd($permission_menu->toArray());
        return view('permission-menu.permission.index',['permission_menu' => $permission_menu]);
    }

   
    public function create(){
        $menu = PermissionMenuMaster::where('parent_id',0)->get();
        // $sub_menu = PermissionMenuMaster::where()->get();
        return view('permission-menu.permission.addEdit',['menu' => $menu]);
    }

   
    public function store(Request $request)
    {
        Log::info("PermissionMenuMappingController::Store");
        if(count($request->all()) == 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                $user_id = auth()->id();
                $permissionMenuMapping = new PermissionMenuMapping();
                $permissionMenuMapping->name = $request->name;
                $permissionMenuMapping->slug = $request->slug;
                $permissionMenuMapping->menu_id = $request->menu_id;
                $permissionMenuMapping->submenu_id = $request->sub_menu_id;
                $permissionMenuMapping->created_by = $user_id;
                $permissionMenuMapping->save();

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
            DB::commit();
            return 1;
        }
        return 0;
    }

    
    public function edit(Request $request)
    {
        $menu = PermissionMenuMaster::where('parent_id',0)->get();
        $permissionMenuMapping = PermissionMenuMapping::find($request->id);
        return view('permission-menu.permission.addEdit',['permissionMenuMapping' => $permissionMenuMapping,'menu' => $menu]);
    }

   
    public function update(Request $request)
    {
        Log::info("PermissionMenuMasterController::update");
        if(count($request->all()) == 0){
            return 3;
        }else{
            DB::beginTransaction();
            try {
                $user_id = auth()->id();
                $permissionMenuMapping = PermissionMenuMapping::find($request->id);
                $permissionMenuMapping->name = $request->name;
                $permissionMenuMapping->slug = $request->slug;
                $permissionMenuMapping->menu_id = $request->menu_id;
                $permissionMenuMapping->submenu_id = $request->sub_menu_id;
                $permissionMenuMapping->updated_by = $user_id;
                // $permissionMenuMapping->parent_id
                $permissionMenuMapping->save();

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
     * @param  \App\Models\PermissionMenuMapping  $permissionMenuMapping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $permissionMenuMapping = PermissionMenuMapping::find($request->id);
        $user_id =auth()->id();
        $permissionMenuMapping->update(['deleted_by' => $user_id]);
        $permissionMenuMapping->delete();
        return 1;
    }
}
