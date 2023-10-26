<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class RolesModel extends Model
{
    use HasFactory;
    use HasRoles;

    protected  $table = "roles";
    protected $guarded = [];
}
