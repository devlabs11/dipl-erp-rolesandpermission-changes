<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'tbl_company';

    protected $guarded = [];

    public function company()
    {
        return $this->hasMany('App\Models\QuotationMaster','company_id','id');
    }

    public function companyPI()
    {
        return $this->hasMany('App\Models\ProformaInvoice','consigner_id','id');
    }

    public function getCompanyRTGSPI()
    {
        return $this->hasMany('App\Models\ComapanyRTGSMaster','company_id','id');
    }

    public function getCompanySalesContract()
    {
        return $this->hasMany('App\Models\SalesContract','company_id','id');
    }

    public function list(User $user)
    {
        return $user->hasPermission('list'); // Assuming you have the hasPermission method as discussed earlier
    }
}
