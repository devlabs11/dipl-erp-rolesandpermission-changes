<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProcessCategory extends Model
{
    use HasFactory,SoftDeletes;
    protected $softDelete = true;

    protected $guarded = [];
}
