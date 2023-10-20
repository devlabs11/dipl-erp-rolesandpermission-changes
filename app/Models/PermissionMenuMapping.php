<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionMenuMapping extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function menu()
    {
        return $this->belongsTo(PermissionMenuMaster::class);
    }

    public function menuProfile()
    {
        return $this->belongsTo(PermissionMenuMaster::class, 'menu_id');
    }

    public function submenu()
    {
        return $this->belongsTo(PermissionMenuMaster::class, 'submenu_id');
    }
}
