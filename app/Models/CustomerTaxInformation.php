<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTaxInformation extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer_tax_information';

    public function taxinfo()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }
}
