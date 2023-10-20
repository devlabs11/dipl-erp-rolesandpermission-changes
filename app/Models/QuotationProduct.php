<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class QuotationProduct extends Model
{
    use HasFactory,SoftDeletes;

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getProductName()
    {
        return $this->belongsTo('App\Models\Product','product_id','id');
    }

    public function quotationMaster()
    {
        return $this->belongsTo(QuotationMaster::class,'quotation_id');
    }

    public function quotationProductItems()
    {
        return $this->hasMany(QuotationProductItem::class,'quotation_product_id');
    }
}
