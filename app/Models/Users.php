<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
// class Users extends Authenticatable
{
    use HasFactory;
    // use Notifiable;
    protected $table = 'users';

    public function get_user_des()
    {
        return $this->belongsTo('App\Models\Designation','designation','id');
    }

    public function get_user_role()
    {
        return $this->belongsTo('App\Models\Roles','id','role');
    }

    public function salesPerson()
    {
        return $this->hasMany('App\Models\QuotationMaster','sales_person_id','id');
    }

    public function CreatedByPerson()
    {
        return $this->hasMany('App\Models\QuotationMaster','created_by','id');
    }

    public function salesPersonName()
    {
        return $this->hasMany('App\Models\SalesMaster','user_id','id');
    }

    public function personNamePI()
    {
        return $this->hasMany('App\Models\ProformaInvoice','sales_person_id ','id');
    }

    public function salesPersonNameSalesContract()
    {
        return $this->hasMany('App\Models\SalesContract','sales_person_id','id');
    }

    public function CreatedByPersonPI()
    {
        return $this->hasMany('App\Models\ProformaInvoice','created_by','id');
    }

    public function CreatedByPersonFG()
    {
        return $this->hasMany('App\Models\FgEntry','created_by','id');
    }

    public function CreatedByPersonJC()
    {
        return $this->hasMany('App\Models\JobCardModel','addeddby','id');
    }

    public function CreatedByPersonSO()
    {
        return $this->hasMany('App\Models\SaleWorkOrder','addeddby','id');
    }

    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'access_roles', 'users_id', 'id');
    }

    public function hasPermission($permissionName)
    {

        $role_id = $this->role;

        $query = Roles::join('permission_role_mappings','access_roles.id', '=', 'permission_role_mappings.role_id')
            ->join('permission_menu_mappings', 'permission_menu_mappings.id', '=', 'permission_role_mappings.permission_id')
            ->where('access_roles.id', $role_id)
            ->whereNull('permission_role_mappings.deleted_at') // Check for null value
            ->where('permission_menu_mappings.slug', 'LIKE', '%' . $permissionName . '%')
            ->exists();

        return $query;
    }

    public function hasGetPermission()
    {

        $role_id = $this->role;

        $query = Roles::join('permission_role_mappings','access_roles.id', '=', 'permission_role_mappings.role_id')
            ->join('permission_menu_mappings', 'permission_menu_mappings.id', '=', 'permission_role_mappings.permission_id')
            ->where('access_roles.id', $role_id)
            ->whereNull('permission_role_mappings.deleted_at') // Check for null value
            // ->where('permission_menu_mappings.slug', 'LIKE', '%' . $permissionName . '%')
            ->get(['permission_menu_mappings.slug']);

        return $query;
    }
}
