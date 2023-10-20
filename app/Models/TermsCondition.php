<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TermsCondition extends Model
{
    use HasFactory,SoftDeletes;

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getCategory()
    {
        return $this->belongsTo('App\Models\TermsConditionCategory','categories_id','id');
    }

    public function getTitle()
    {
        return $this->belongsTo('App\Models\TermsTitle','title_value_id','id');
    }
    public function terms()
    {
        return $this->hasMany('App\Models\QuotationMaster','quotation_category','id');
    }
}
