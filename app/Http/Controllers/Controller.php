<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Session;
use DB;
use Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function check_rights($menu, $user_id = '') {

        if (!Session::has('userdata')){
            //die("here");
            //return redirect('/login');
            Redirect::to('login')->send();
        }

        $menu = str_replace(' ', '_', $menu);
        $menu=strtolower($menu);


       
        //var_dump(Session::get('userdata')['superaccess']);die;
        $superaccess = Session::get('userdata')['superaccess'];
        if ($superaccess) {
            $ResultSet = array(
                'role' => 1, 'allow_access' => 1,
                'allow_add' => 1, 'allow_view' => 1,
                'allow_edit' => 1, 'allow_delete' => 1,
                'allow_print' => 1, 'allow_import' => 1, 'allow_export' => 1,'allow_print_with_hf' => 1,'allow_duplicate' => 1);
            $ReturnData = (object) $ResultSet;
        } else {

            if ($user_id == "") {
                // $user_id = Session::get('userdata')['user_id'];
                $user_id = auth()->id();
            }

            //var_dump($user_id);die;

            //echo $menu." ".$user_id;die;
            $LcSqlStr = "SELECT u.role as role,a.allow_access,allow_add,allow_view,allow_edit,allow_delete,allow_print,allow_import,allow_export,allow_print_with_hf,allow_duplicate FROM access_role_modules a 
            LEFT JOIN tbl_user u ON a.roleid =u.role "
                . "LEFT JOIN access_modules c ON a.moduleid=c.id  WHERE c.status=1 and c.modulelabel='" . $menu . "' AND u.id=" . $user_id;
            //echo $LcSqlStr;die;
            $userdata = DB::select($LcSqlStr);

            $userdataarray = json_decode(json_encode($userdata), true);

            if(sizeof($userdataarray)>0)
            {
                foreach($userdataarray as $userdataarray)
                {
                    $role=$userdataarray['role'];
                    $allow_access=$userdataarray['allow_access'];
                    $allow_add=$userdataarray['allow_add'];
                    $allow_view=$userdataarray['allow_view'];
                    $allow_edit=$userdataarray['allow_edit'];
                    $allow_delete=$userdataarray['allow_delete'];
                    $allow_print=$userdataarray['allow_print'];
                    $allow_print_with_hf=$userdataarray['allow_print_with_hf'];
                    $allow_duplicate=$userdataarray['allow_duplicate'];
                    $allow_import=$userdataarray['allow_import'];
                    $allow_export=$userdataarray['allow_export'];
                }
                $ResultSet = array(
                    'role' => $role, 'allow_access' => $allow_access,
                    'allow_add' => $allow_add, 'allow_view' => $allow_view,
                    'allow_edit' => $allow_edit, 'allow_delete' => $allow_delete,
                    'allow_print' => $allow_print, 'allow_import' => $allow_import, 'allow_export' => $allow_export, 'allow_print_with_hf' => $allow_print_with_hf, 'allow_duplicate' => $allow_duplicate);
                $ReturnData = (object) $ResultSet;
            }
            else
            {
                Redirect::to('dashboard')->send();
            }
            

            //var_dump($userdataarray);die;

            
        }
        return $ReturnData;
    }


    
}
