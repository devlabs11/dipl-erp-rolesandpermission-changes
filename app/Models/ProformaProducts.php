<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class ProformaProducts extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function getProductCategoryName()
    {
        return $this->belongsTo('App\Models\ProductCategory','category_id','id');
    }

    public function productNamePI()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function productSizeName()
    {
        return $this->belongsTo('App\Models\ProductSizeMaster','size_id','id');
    }

    public function getUnitName()
    {
        return $this->belongsTo('App\Models\Unit','unit_id','id');
    }
}
