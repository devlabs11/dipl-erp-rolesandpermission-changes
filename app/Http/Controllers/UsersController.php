<?php

namespace App\Http\Controllers;
use App\Models\RolesModel;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{

    public function storeUser(Request $request)
    {

        $user = new User();
        $user->unique_id = $request->get('unique_id');
        $user->fullname = $request->get('fullname');
        $user->username = $request->get('username');
        $user->password = bcrypt($request->get('password'));
        $user->designation = $request->get('designation');
        $user->position = $request->get('position');
        $user->site = $request->get('site');
        $user->status = $request->get('status');
        $user->emailid = $request->get('emailid');
        $user->usercode = $request->get('usercode');
        $user->maker_checker = $request->get('maker_checker');
        $user->role = $request->get('role');
        $user->addeddby = auth()->id();
        $user->addedddttm = now();
        $user->modifiedby = auth()->id();
        $user->modifieddttm = now();
        $user->mobile = $request->input('mobile');
        $user->created_at = now();
        $user->updated_at = now();
        
        if ($request->hasFile('avatar')) {
            $user->avatar = $request->file('avatar')->store('avatars');
        }
       
        $user->assignRole($request->get('role'));
        $user->save();
        echo "stored";
        return redirect('showUsers')->with('success', 'User stored successfully.');
    }
    

    public function showRole(RolesModel $rm)
    {

        $role = RolesModel::all();
        return view('admin.User.addUsers', ['role' => $role]);
    }

    public function showUser(User $um)
    {

        $show = User::all();
        return view('admin.User.showUsers', ['show' => $show]);
    }

    public function editUser($id)
    {
        $edit = User::find(decrypt($id));
        $roleForUpdate = RolesModel::all();
        $roleId = DB::table('model_has_roles')
            ->where('model_id', decrypt($id))
            ->pluck('role_id');
        $roleId = !empty($roleId) ? $roleId->toArray() : [];

        return view('admin.User.editUsers', ['edit' => $edit, 'roleForUpdate' => $roleForUpdate, 'roleId' => $roleId]);
    }

    public function updateUser(Request $request, $id)
    {
        $update = User::find($id);
        $update->unique_id = $request->get('unique_id');
        $update->fullname = $request->get('fullname');
        $update->username = $request->get('username');
        $update->password = bcrypt($request->get('password'));
        $update->designation = $request->get('designation');
        $update->position = $request->get('position');
        $update->site = $request->get('site');
        $update->status = $request->get('status');
        $update->emailid = $request->get('emailid');
        $update->usercode = $request->get('usercode');
        $update->maker_checker = $request->get('maker_checker');
        $update->role = $request->get('role');
        $update->addeddby = auth()->id();
        $update->addedddttm = now();
        $update->modifiedby = auth()->id();
        $update->modifieddttm = now();
        $update->mobile = $request->get('mobile');
        
        if ($request->hasFile('avatar')) {
            $update->avatar = $request->file('avatar')->store('avatars');
        }

        
        $update->save();
        session()->flash('success', 'User Updated successfully.');

        return redirect('showUsers');
    }

    public function destroyUser($id, User $um)
    {
        $delete = User::find($id);
        $delete->delete();
        session()->flash('success', 'User Deleted successfully.');
        return redirect('showUsers');
    }

    
}