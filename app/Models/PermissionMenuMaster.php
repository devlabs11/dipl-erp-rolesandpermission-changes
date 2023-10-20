<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionMenuMaster extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function childs() {
        return $this->hasMany('App\Models\Menu','parent_id','id') ;
    }

    public function parent()
    {
        return $this->belongsTo('App\Models\Menu', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id')->orderBy('position');
    }

    public function mappings()
    {
        return $this->hasMany(PermissionMenuMapping::class, 'menu_id');
    }

    public function submenus()
    {
        return $this->hasMany(PermissionMenuMapping::class, 'submenu_id');
    }
}
