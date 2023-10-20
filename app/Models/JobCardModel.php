<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCardModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_job_cart';

    protected $guarded = [];

    public function jobCard()
    {
        return $this->hasMany('App\Models\FgEntry','job_card_id','id');
    }

    public function getCreatedBy()
    {
        return $this->belongsTo('App\Models\Users','addeddby','id');
    }

    public function getUnitJCWidth()
    {
        return $this->belongsTo('App\Models\Unit','width_unit','id');
    }
    public function getUnitJCHeight()
    {
        return $this->belongsTo('App\Models\Unit','height_unit','id');
    }
}
