<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class QuotationProductItem extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function quotationProduct()
    {
        return $this->belongsTo(QuotationProduct::class,'quotation_product_id');
    }

    public function quotationProductItemMultipleQtyRates()
    {
        return $this->hasMany(QuotationProductItemMultipeQtyRate::class,'quotation_product_item_id');
    }
}
