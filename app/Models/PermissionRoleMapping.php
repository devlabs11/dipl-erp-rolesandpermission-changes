<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class PermissionRoleMapping extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function permission()
    {
        return $this->belongsTo(PermissionMenuMapping::class, 'permission_id');
    }
}
