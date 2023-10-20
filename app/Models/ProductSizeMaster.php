<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProductSizeMaster extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;

    protected $guarded = [];

    public function getProductName()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function getProductCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory','product_category_id','id');
    }

    public function productSizeNamePI()
    {
        return $this->hasMany('App\Models\ProformaProducts','size_id','id');
    }
}
