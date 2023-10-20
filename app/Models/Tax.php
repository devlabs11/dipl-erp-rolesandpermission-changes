<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tax extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    protected $guarded = [];
}
