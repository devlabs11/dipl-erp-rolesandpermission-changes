<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_product';

    protected $guarded = [];

    public function product()
    {
        return $this->hasMany('App\Models\QuotationProduct','product_id','id');
    }

    public function productName()
    {
        return $this->hasMany('App\Models\ProductSizeMaster','product_id','id');
    }

    public function productNamePI()
    {
        return $this->hasMany('App\Models\ProformaProducts','product_id','id');
    }

    public function productNameSalesContract()
    {
        return $this->hasMany('App\Models\ProformaProducts','product_id','id');
    }
}
