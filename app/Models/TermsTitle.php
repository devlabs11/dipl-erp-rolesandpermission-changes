<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class TermsTitle extends Model
{
    use HasFactory,SoftDeletes;

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function title()
    {
        return $this->hasMany('App\Models\TermsCondition','title_value_id','id');
    }

    public function getTitleCategoty()
    {
        return $this->belongsTo('App\Models\TermsConditionCategory','categories_id','id');
    }

    public function quotationTitle()
    {
        return $this->hasMany('App\Models\QuotationMaster','term_title','id');
    }
}
