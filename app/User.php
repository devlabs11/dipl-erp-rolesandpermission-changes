<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $table = 'users';

    public function get_user_des()
    {
        return $this->belongsTo('App\Models\Designation','designation','id');
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

    // ... Other default User model code ...

    /**
     * Define the relationship between users and roles.
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    // /**
    //  * Check if the user has access to a specific menu item.
    //  *
    //  * @param int $menuId
    //  * @return bool
    //  */
    // public function hasMenuAccess($menuId)
    // {
    //     // Check if the user's roles have access to the specified menu
    //     return $this->roles()
    //         ->join('permission_menu_mapping', 'roles.id', '=', 'permission_menu_mapping.role_id')
    //         ->where('menu_id', $menuId)
    //         ->exists();
    // }

    // /**
    //  * Check if the user has a specific permission.
    //  *
    //  * @param string $permissionName
    //  * @return bool
    //  */
    // public function hasPermission($permissionName)
    // {
    //     // Check if the user's roles have the specified permission
    //     return $this->roles()
    //         ->join('permission_role_mapping', 'roles.id', '=', 'permission_role_mapping.role_id')
    //         ->join('permissions', 'permission_role_mapping.permission_id', '=', 'permissions.id')
    //         ->where('permissions.name', $permissionName)
    //         ->exists();
    // }
    /**
 * Check if the user has a specific permission.
 *
 * @param string $permissionName
 * @return bool
 */
public function hasPermission($permissionName)
{
    // Get the user's role from the session
    $userRole = \Session::get('userdata')['role'];

    // Check if the user's role has the specified permission
    return $this->checkPermissionForRole($userRole, $permissionName);
}

/**
 * Check if a role has a specific permission.
 *
 * @param string $role
 * @param string $permissionName
 * @return bool
 */
private function checkPermissionForRole($role, $permissionName)
{
    // Implement your logic to check if the role has the specified permission
    // You can retrieve the role's permissions from your database or another data source

    // Example logic: Check if the role has the permission 'list'
    if ($role === 'admin' && $permissionName === 'list') {
        return true;
    }

    return false;
}
}
