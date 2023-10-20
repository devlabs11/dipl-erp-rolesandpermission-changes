<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class QuotationMaster extends Model
{
    use HasFactory,SoftDeletes;

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getSalesPerson()
    {
        return $this->belongsTo('App\Models\Users','sales_person_id','id');
    }

    public function getComanyName()
    {
        return $this->belongsTo('App\Models\Company','company_id','id');
    }

    public function getCreatedBy()
    {
        return $this->belongsTo('App\Models\Users','created_by','id');
    }

    public function getTermsCategory()
    {
        return $this->belongsTo('App\Models\TermsConditionCategory','quotation_category','id');
    }

    public function getTermsTitle()
    {
        return $this->belongsTo('App\Models\TermsTitle','term_title','id');
    }

    public function quotation()
    {
        return $this->hasMany('App\Models\ProformaInvoice','quotation_id','id');
    }

    public function getCustomer()
    {
        return $this->belongsTo('App\Models\Customer','customer_id','id');
    }

    public function getProspect()
    {
        return $this->belongsTo('App\Models\ProspectMaster','prospect_id','id');
    }

    public function quotationSalesContract()
    {
        return $this->hasMany('App\Models\SalesContract','quotation_id','id');
    }

    public function quotationProducts()
    {
        return $this->hasMany(QuotationProduct::class,'quotation_id');
    }
}
