<?php

namespace App\Http\Controllers;


use App\Models\DescriptionMaster;
use App\Models\SubMenu;
use App\Models\MenuItem;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $description = DescriptionMaster::orderBy('id','desc')->get();
        $subMenu = \DB::table('sub_menus AS sub_menu')
        ->leftJoin('description_masters AS dm','dm.id','=','sub_menu.menu_id')->select('sub_menu.id','sub_menu.text','dm.text As dm')->get();

        $indexData = \DB::table('description_masters AS dm')
            ->select('dm.text As pdesc','dm.id As pid')
            ->get();
        $list = \Helper::getPermission('parent-description-m-list') ? 1 : 0;
        if($list){
            return view('product-description.index',[
                'parentDesc' => $description,
                'subDesc' => $subMenu,
                'indexData' => $indexData
            ]);
        }else{
            Redirect::to('dashboard')->send();
        }
    }

    public function indexSub(){
        $description = DescriptionMaster::get();
        $subMenu = \DB::table('sub_menus AS sub_menu')
        ->leftJoin('description_masters AS dm','dm.id','=','sub_menu.menu_id')->select('sub_menu.id','sub_menu.text','dm.text As dm')->get();

        $indexData = \DB::table('sub_menus AS sub_menu')
        ->leftJoin('description_masters AS dm','dm.id','=','sub_menu.menu_id')
        ->select('sub_menu.id AS sid','sub_menu.text AS sdesc','dm.text As pdesc','dm.id As pid')
        ->orderBy('sub_menu.id','desc')
        ->where('sub_menu.deleted_by','=',null)
        ->get();
        $list = \Helper::getPermission('sub-description-m-list') ? 1 : 0;
        if($list){
            return view('product-description.indexSub',[
                'parentDesc' => $description,
                'subDesc' => $subMenu,
                'indexData' => $indexData
            ]);
        }else{
            Redirect::to('dashboard')->send();
        }
    }

    public function indexMenu(){
        $description = DescriptionMaster::get();
        $subMenu = \DB::table('sub_menus AS sub_menu')
        ->leftJoin('description_masters AS dm','dm.id','=','sub_menu.menu_id')->select('sub_menu.id','sub_menu.text','dm.text As dm')->get();

        $indexData = \DB::table('menu_items AS mi')
        ->leftJoin('sub_menus AS sub_menu','mi.sub_menu_id','=','sub_menu.id')
        ->leftJoin('description_masters AS dm','dm.id','=','sub_menu.menu_id')
        ->select('sub_menu.id AS sid','sub_menu.text AS sdesc','dm.text As pdesc','dm.id As pid','mi.id AS mid','mi.text AS mdesc')
        ->orderBy('mi.id','desc')
        ->where('mi.deleted_by','=',null)
        ->get();

        $list = \Helper::getPermission('description-list') ? 1 : 0;
        if($list){
            return view('product-description.indexMenu',[
                'parentDesc' => $description,
                'subDesc' => $subMenu,
                'indexData' => $indexData
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
       return view('product-description.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $check = DescriptionMaster::where('text', '=', $request->name)->whereNotNull('deleted_at')->exists();
        if($check){
            return 2;
        }
        $dm = new DescriptionMaster();
        $dm->text = $request->name;
        $dm->created_by = \Helper::getAuthUser();
        $dm->save();
        return 1;
    }

    public function storeSubDescription(Request $request){
        $check = SubMenu::where('menu_id', '=', $request->id)->where('text', '=', $request->name)->whereNotNull('deleted_at')->exists();
        if($check){
            return 2;
        }
        $dm = new SubMenu();
        $dm->menu_id = $request->id;
        $dm->text = $request->name;
        $dm->created_by = \Helper::getAuthUser();
        $dm->save();
        return 1;
    }

    public function storeDescription(Request $request){
        $check = MenuItem::where('sub_menu_id', '=', $request->id)->where('text', '=', $request->name)->whereNotNull('deleted_at')->exists();
        if($check){
            return 2;
        }
        $dm = new MenuItem();
        $dm->sub_menu_id = $request->id;
        $dm->text = $request->name;
        $dm->created_by = \Helper::getAuthUser();
        $dm->save();
        return 1;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateParent(Request $request){
        $dm = DescriptionMaster::find($request->id);
        $dm->text = $request->pdesc;
        $dm->updated_by = \Helper::getAuthUser();
        $dm->update();

        return 1;
    }

    public function updateSub(Request $request){
        $sm = SubMenu::find($request->sid);
        $sm->menu_id = $request->pid;
        $sm->text = $request->sdesc;
        $sm->updated_by = \Helper::getAuthUser();
        $sm->update();
        return 1;
    }

    public function updateMenu(Request $request){
        $md = MenuItem::find($request->mid);
        $md->sub_menu_id = $request->sid;
        $md->text = $request->mdesc;
        $md->updated_by = \Helper::getAuthUser();
        $md->update();

        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){
        $dmg = DescriptionMaster::where('id',$request->id)->update(['deleted_by' =>  \Helper::getAuthUser()]);
        DescriptionMaster::where('id',$request->id)->delete();
        return 1;
    }

    public function destroySub(Request $request){
        $mdm_id = MenuItem::where('sub_menu_id',$request->id)->update(['deleted_by' =>  \Helper::getAuthUser()]);
        $dmg = SubMenu::where('id',$request->id)->update(['deleted_by' => \Helper::getAuthUser()]);
        $sdm_id = MenuItem::where('sub_menu_id',$request->id)->delete();
        SubMenu::where('id',$request->id)->delete();
        return 1;
    }

    public function destroyMenu(Request $request){
        $dmg = MenuItem::where('id',$request->id)->update(['deleted_by' => \Helper::getAuthUser()]);
        MenuItem::where('id',$request->id)->delete();
        return 1;
    }
}
