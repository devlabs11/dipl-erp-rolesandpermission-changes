<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class FgEntry extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function getJobCardDetail()
    {
        return $this->belongsTo('App\Models\JobCardModel','job_card_id','id');
    }

    public function getLocation()
    {
        return $this->belongsTo('App\Models\Sites','location','id');
    }

    public function getWorkOrderDetail()
    {
        return $this->belongsTo('App\Models\SaleWorkOrder','work_order_id','id');
    }

    public function getOperatorDetail()
    {
        return $this->belongsTo('App\Models\UserOperator','user_operator_id','id');
    }

    public function getCreatedBy()
    {
        return $this->belongsTo('App\Models\Users','created_by','id');
    }

}
