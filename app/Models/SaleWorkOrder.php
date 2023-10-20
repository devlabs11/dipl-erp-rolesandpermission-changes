<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleWorkOrder extends Model
{
    use HasFactory;
    protected $table = 'tbl_salesworkorder';

    public function workOrder()
    {
        return $this->hasMany('App\Models\FgEntry','work_order_id','id');
    }

    public function getCreatedBy()
    {
        return $this->belongsTo('App\Models\Users','addeddby','id');
    }

    public function getCustomerName()
    {
        return $this->belongsTo('App\Models\Customer','customer_name','id');
    }

    public function getQuantityUnit()
    {
        return $this->belongsTo('App\Models\Unit','quantity_unit','id');
    }
}
