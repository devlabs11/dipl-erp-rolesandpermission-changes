<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'tbl_city';

    public function PlaceofReceipt()
    {
        return $this->hasMany('App\Models\ProformaOversis','place_of_receipt','id');
    }

    public function portLoading()
    {
        return $this->hasMany('App\Models\ProformaOversis','port_loading','id');
    }

    public function finalDestination()
    {
        return $this->hasMany('App\Models\ProformaOversis','final_destination','id');
    }

    public function portDischarge()
    {
        return $this->hasMany('App\Models\ProformaOversis','port_discharge','id');
    }
}
