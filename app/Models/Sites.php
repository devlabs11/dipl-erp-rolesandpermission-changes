<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    use HasFactory;
    protected $table = 'mst_site';

    public function site()
    {
        return $this->hasMany('App\Models\UserOperator','site_id','id');
    }

    public function location()
    {
        return $this->hasMany('App\Models\FgEntry','location','id');
    }
}
