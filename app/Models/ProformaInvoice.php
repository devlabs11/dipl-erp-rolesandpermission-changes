<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProformaInvoice extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function getSaleName()
    {
        return $this->belongsTo('App\Models\Users','sales_person_id','id');
    }
    public function getCustomerName()
    {
        return $this->belongsTo('App\Models\Customer','consignee_id','id');
    }
    public function getCompanyDetails()
    {
        return $this->belongsTo('App\Models\Company','consigner_id','id');
    }
    public function getQuotationDetails()
    {
        return $this->belongsTo('App\Models\QuotationMaster','quotation_id','id');
    }
    public function getCompanyRTGSDetails()
    {
        return $this->belongsTo('App\Models\ComapanyRTGSMaster','company_bank_id','id');
    }

    public function getCreatedBy()
    {
        return $this->belongsTo('App\Models\Users','created_by','id');
    }
}
