<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class QuotationAdvaceFeature extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function getFeatureName()
    {
        return $this->belongsTo('App\Models\AdvanceFeatureMaster','advance_feature_id','id');
    }
}
