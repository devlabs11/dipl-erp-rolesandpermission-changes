<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = 'mst_unit';

    public function unit()
    {
        return $this->hasMany('App\Models\ProformaProducts','unit_id','id');
    }

    public function unitJCWidth()
    {
        return $this->hasMany('App\Models\JobCardModel','width_unit','id');
    }
    public function unitJCHeight()
    {
        return $this->hasMany('App\Models\JobCardModel','height_unit','id');
    }

    public function unitSOQuantityUnit()
    {
        return $this->hasMany('App\Models\SaleWorkOrder','quantity_unit','id');
    }
}
