<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\ProductSizeMaster;
use Redirect;

class ProductSizeMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $productSizeMaster = ProductSizeMaster::orderBy('id','desc')->get();
        $list = \Helper::getPermission('product-size-m-list') ? 1 : 0;
        if($list){
            return view('product-size-master.index',compact('productSizeMaster'));
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
        $products = Product::all();
        $productCategories = ProductCategory::all();
        $productSizeMaster = null;
        return view('product-size-master.add-edit',compact('products','productCategories','productSizeMaster'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
      if($request->product_category_id == null && $request->product_id  == null && $request->code  == null && $request->size  == null){
        return 3;
      }else{
        // $user_id = \Session::get('userdata')['user_id'];

        $user_id=auth()->id();
        $last_id =  ProductSizeMaster::latest()->first()->id ?? 0;
        $uq_id =  $last_id + 1;
        $productSize = new ProductSizeMaster();
        $productSize->unique_id = "B/PS/".$uq_id;
        $productSize->product_category_id = $request->product_category_id;
        $productSize->product_id = $request->product_id;
        $productSize->item_code = $request->item_code;
        $productSize->product_size = $request->product_size;
        $productSize->created_by = $user_id;
        $productSize->save();
        return 1;
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductSizeMaster  $productSizeMaster
     * @return \Illuminate\Http\Response
     */
    public function show(ProductSizeMaster $productSizeMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductSizeMaster  $productSizeMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductSizeMaster $productSizeMaster,Request  $request){
        $productSizeMaster = ProductSizeMaster::find($request->id);
        $products = Product::all();
        $productCategories = ProductCategory::all();
        return view('product-size-master.add-edit',compact('products','productCategories','productSizeMaster'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\ProductSizeMaster  $productSizeMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){

        $user_id = \Session::get('userdata')['user_id'];
        $productSize = ProductSizeMaster::find($request->id);
        $productSize->product_category_id = $request->product_category_id;
        $productSize->product_id = $request->product_id;
        $productSize->item_code = $request->item_code;
        $productSize->product_size = $request->product_size;
        $productSize->created_by = $user_id;
        $productSize->update();
        return 1;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductSizeMaster  $productSizeMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductSizeMaster $productSizeMaster,Request $request){
        $productSize = ProductSizeMaster::find($request->id)->delete();
        if($productSize){
            return 1;
        }
    }
}
