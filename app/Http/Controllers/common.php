<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class common extends Controller
{


    function check_rights($menu, $user_id = '') {
        // dd($menu);

        //var_dump(Session::get('userdata'));die;

        if (!Session::has('userdata')){
            //die("here");
            //return redirect('/login');
            Redirect::to('login')->send();
        }

        $menu = str_replace(' ', '_', $menu);
        $menu=strtolower($menu);
        // dd($menu);
        $superaccess = Session::get('userdata')['superaccess'];

        //var_dump($superaccess);die;
        if ($superaccess) {

            $ReturnData = '1';
        } else {

            //die("here there");

            if ($user_id == "") {
                // $user_id = Session::get('userdata')['user_id'];
                $user_id = auth()->id();
            }


            //echo $menu." ".$user_id;die;
            $LcSqlStr = "SELECT a.allow_access FROM access_role_modules a
            LEFT JOIN tbl_user u ON a.roleid =u.role "
                . "LEFT JOIN access_modules c ON a.moduleid=c.id  WHERE c.status=1 and c.modulelabel='" . $menu . "' AND u.id=" . $user_id;
            //echo $LcSqlStr;die;
            $userdata = DB::select($LcSqlStr);

            //var_dump($userdata);die;



            $userdataarray = json_decode(json_encode($userdata), true);
            if(count($userdataarray)==0)
            {
                $allow_access = "0";
            }
            else
            {
                foreach($userdataarray as $userdataarray)
                {
                    $allow_access=$userdataarray['allow_access'];
                }
            }

            $ReturnData = $allow_access;
        }
        return $ReturnData;
    }

    public function check_menu_rights($user_id) {

        $ResultSet = DB::table('access_role_modules')
            ->leftJoin('tbl_user', 'access_role_modules.roleid', '=', 'tbl_user.role')
            ->leftJoin('access_modules', 'access_role_modules.moduleid', '=', 'access_modules.id')
            ->select(['access_modules.modulename','access_modules.modulegroup'])
            ->where(['access_modules.status'=>'1','tbl_user.id'=>$user_id])
            ->get();
        $RightsArray = array();
        $GroupArray = array();
        $GroupName = '';
        foreach ($ResultSet as $value) {
            if ($GroupName != $value->modulegroup) {
                $GroupArray[$value->modulegroup] = 1;
                $GroupName = $value->modulegroup;
            }
            $RightsArray[$value->modulename] = 1;
        }
        $data['GroupArray'] = $GroupArray;
        $data['RightsArray'] = $RightsArray;
        return $data;
    }




}
