<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class SubMenu extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'sub_menus';

    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];
}
