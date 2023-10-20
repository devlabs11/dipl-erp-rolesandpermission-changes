<?php


namespace App\Http\Controllers;
use AuthenticatesUsers;
use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class login extends Controller
{  

    public function showLogin()
    {
        if (Session::has('user_id')){
            return redirect('/user');
        }
        else
        {
            return view('login');
        }
    }


    function checklogin(Request $request)
    {
        
        $email=$request->get('email');
        $password=$request->get('password');

        $hashdata = DB::select("select * from hash where username='".$email."' and password='".$password."'");
        $hashdataarray = json_decode(json_encode($hashdata), true);
        $userdata = DB::select("select * from tbl_user where username='".$email."' and password='".$password."'");
        $userdataarray = json_decode(json_encode($userdata), true);

       

        if (count($hashdataarray) > 0) 
        {
            foreach($hashdataarray as $hashdataarray)
            {
                $emailaddress=$hashdataarray['email'];

                $data = array(
                    'login_type'  => '1',
                    'user_id'     => '999999999',
                    'username'    => $email,
                    'fullname'  => 'Super Administrator',
                    'emailid' => $emailaddress,
                  
                    'role'        => 1,
                    'user_type'   => 1,
                    'validated'   => true,
                    'superaccess' => true
                );
    
                Session::put('userdata', $data);
    
                $message="User found";
                $alert_type="succ";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'role'=>'1'));
            }
            

        }
        else if(count($userdataarray) > 0)
        {
            foreach($userdataarray as $userdataarray)
            {
                $user_id=$userdataarray['id'];
                $fullname=$userdataarray['fullname'];
                $username=$userdataarray['username'];
                $emailid=$userdataarray['emailid'];
                $role=$userdataarray['role'];

                $data = array(
                    'login_type'  => 2,
                    'user_id'     => $user_id,
                    'username'    => $username,
                    'fullname'  => $fullname,
                    'emailid'   => $emailid,
                    'role'        => $role,
                    'user_type'   => 'user',
                    'validated'   => true,
                    'superaccess' => false
                );


                Session::put('userdata', $data);
                

                $message="User found";
                $alert_type="succ";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'role'=>$role));
                

            }            
        }
        else 
        {
                $message="Wrong Login Details";
                $alert_type="error";
                $url="";
                $role="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'role'=>$role));
        }
        

    }


    function logout()
    {
        Session::forget('userdata');
        

        if(!Session::has('userdata'))
        {
            return redirect('/login');
        }
        else
        {
            return redirect('/dashboard');
        }
    }


   
}