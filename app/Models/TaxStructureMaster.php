<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxStructureMaster extends Model
{
    use HasFactory;

    public function getTaxValue()
    {
        return $this->belongsTo('App\Models\TaxDetail','tax_id','id');
    }
}
