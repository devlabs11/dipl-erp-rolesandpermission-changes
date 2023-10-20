<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComapanyRTGSMaster extends Model
{
    use HasFactory;
    protected $table = 'tbl_rtgs_neft';

    protected $guarded = [];

    public function companyRTGS()
    {
        return $this->hasMany('App\Models\ProformaInvoice','company_bank_id','id');
    }
    public function getRTGSBanks()
    {
        return $this->hasMany('App\Models\SalesContract','company_bank_id','id');
    }

}
