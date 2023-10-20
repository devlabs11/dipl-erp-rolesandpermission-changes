<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;


class ProformaOversis extends Model
{
    use HasFactory,SoftDeletes;
    protected $guarded = [];

    protected $softDelete = true;
    protected $dates = ['deleted_at'];

    public function getBuyerDetails()
    {
        return $this->belongsTo('App\Models\Customer','notify_party','id');
    }

    public function getOrigin()
    {
        return $this->belongsTo('App\Models\Country','country_origin','id');
    }
    public function getFinalCountryDestination()
    {
        return $this->belongsTo('App\Models\Country','country_destination','id');
    }

    public function getPlaceofReceipt()
    {
        return $this->belongsTo('App\Models\City','place_of_receipt','id');
    }

    public function getPortLoading()
    {
        return $this->belongsTo('App\Models\City','port_loading','id');
    }

    public function getFinalDestination()
    {
        return $this->belongsTo('App\Models\City','final_destination','id');
    }

    public function getPortDischarge()
    {
        return $this->belongsTo('App\Models\City','port_discharge','id');
    }
}
