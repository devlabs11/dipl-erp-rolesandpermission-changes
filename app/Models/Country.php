<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $table = 'mst_country';
    protected $fillable = [ 'description', 'status' ];

    public function countryOriginPI()
    {
        return $this->hasMany('App\Models\ProformaOversis','country_origin','id');
    }

    public function countryFinalDestinationPI()
    {
        return $this->hasMany('App\Models\ProformaOversis','final_destination','id');
    }

}
