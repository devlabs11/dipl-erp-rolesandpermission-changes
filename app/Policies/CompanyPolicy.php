<?php

namespace App\Policies;

use App\Models\User;
use App\Company;
use Illuminate\Auth\Access\HandlesAuthorization;

class CompanyPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function list(User $user)
    {
        \Log::info('Checking list permission for user: ' . $user->id);
        return $user->hasPermission('list');
    }
}
