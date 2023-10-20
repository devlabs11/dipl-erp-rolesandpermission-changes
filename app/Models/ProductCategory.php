<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'tbl_product_category';

    protected $guarded = [];

    public function productCategoryName()
    {
        return $this->hasMany('App\Models\ProductSizeMaster','product_category_id','id');
    }

    public function productCategoryNamePI()
    {
        return $this->hasMany('App\Models\ProformaProducts','category_id','id');
    }
}
