<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SalesContract extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getQuotation()
    {
        return $this->belongsTo('App\Models\QuotationMaster','quotation_id','id');
    }

    public function getCompany()
    {
        return $this->belongsTo('App\Models\Company','company_id','id');
    }

    public function getSalesPerson()
    {
        return $this->belongsTo('App\Models\Users','sales_person_id','id');
    }

    public function getCustomer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }

    public function getCompanyBankDetails()
    {
        return $this->belongsTo('App\Models\ComapanyRTGSMaster','company_bank_id','id');
    }
}
