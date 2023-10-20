<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaxDetail extends Model
{
    use HasFactory;
    protected $table = 'tbl_tax';

    protected $guarded = [];

    public function taxValue()
    {
        return $this->hasMany('App\Models\TaxStructureMaster','tax_id','id');
    }
}
