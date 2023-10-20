<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TermsConditionCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function category()
    {
        return $this->hasMany('App\Models\TermsCondition','categories_id','id');
    }

    public function Titlecategory()
    {
        return $this->hasMany('App\Models\TermsTitle','categories_id','id');
    }

    public function quotationCategory()
    {
        return $this->hasMany('App\Models\QuotationMaster','quotation_category','id');
    }
}
