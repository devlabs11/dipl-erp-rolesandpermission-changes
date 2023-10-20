<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer_payment';

    public function payment()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }
}
