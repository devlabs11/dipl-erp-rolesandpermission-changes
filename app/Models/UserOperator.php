<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class UserOperator extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;

    public function getSiteName()
    {
        return $this->belongsTo('App\Models\Sites','site_id','id');
    }

    public function operator()
    {
        return $this->hasMany('App\Models\FgEntry','user_operator_id','id');
    }
}
