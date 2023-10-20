<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'tbl_customer_general';

    public function costomer()
    {
        return $this->hasMany('App\Models\ProformaInvoice','consignee_id','id');
    }

    public function buyer()
    {
        return $this->hasMany('App\Models\ProformaInvoice','notify_party','id');
    }

    public function getPayment()
    {
        return $this->hasMany('App\Models\CustomerPayment','customer_id','id');
    }

    public function getTaxInfo()
    {
        return $this->hasMany('App\Models\CustomerTaxInformation','customer_id','id');
    }

     public function buyerLocal()
    {
        return $this->hasMany('App\Models\ProformaLocal','buyer','id');
    }

    public function QuotationCustomer()
    {
        return $this->hasMany('App\Models\QuotationMaster','customer_id','id');
    }

    public function customerSalesContract()
    {
        return $this->hasMany('App\Models\SalesContract','customer_id','id');
    }

    public function customer()
    {
        return $this->hasMany('App\Models\SaleWorkOrder','customer_name','id');
    }
}

