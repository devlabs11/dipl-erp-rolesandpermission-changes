<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class MenuItem extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'menu_items';

    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];
}
