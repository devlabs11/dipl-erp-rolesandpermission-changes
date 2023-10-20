<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class SalesMaster extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function getName()
    {
        return $this->belongsTo('App\Models\Users','user_id','id');
    }
}
