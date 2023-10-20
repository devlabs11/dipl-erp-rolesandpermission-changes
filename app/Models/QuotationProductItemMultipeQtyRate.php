<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class QuotationProductItemMultipeQtyRate extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function quotationProductItem()
    {
        return $this->belongsTo(QuotationProductItem::class,'quotation_product_item_id');
    }
}
