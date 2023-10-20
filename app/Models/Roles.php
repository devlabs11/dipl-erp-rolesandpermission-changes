<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'access_roles';

    public function role()
    {
        return $this->hasMany('App\Models\Users','id','role');
    }
}
