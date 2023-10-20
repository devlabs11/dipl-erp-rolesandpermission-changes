<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;
use App\Models\PermissionRoleMapping;
use App\Models\PermissionMenuMapping;
use App\Models\PermissionMenuMaster;

class user extends Controller
{


    // login code
    // function index()
    // {
    //     $list = \Helper::getPermission('users-list') ? 1 : 0;
    //     if($list){
    //         return view('user.index');
    //     }else{
    //         Redirect::to('dashboard')->send();
    //     }
    // }




    public function index()
{
    

     
   
    $list = \Helper::getPermission('users-list') ? 1 : 0;

    if ($list) {
        return view('user.index');
    } else {
      
        Redirect::to('dashboard')->send();
    }
}

    public function userdata()
    {
        //die("here");
        $start=0;
        $length=10;
        $search_value="";
        if(isset($_POST))
        {
            $start=$_POST['start'];
            $length=$_POST['length'];
            $search_value=$_POST['search']['value'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {
            $search_string="where tu.fullname LIKE '%$search_value%' or tu.id LIKE '%$search_value%' or tu.unique_id LIKE '%$search_value%' or tu.username LIKE '%$search_value%' or tu.usercode LIKE '%$search_value%' or mp.description LIKE '%$search_value%' or ms.description LIKE '%$search_value%' or md.description LIKE '%$search_value%' or ar.rolename LIKE '%$search_value%'";
            $tbldata = DB::select("select *,tu.status as userstatus,tu.id as userid,tu.unique_id as userunique_id,ms.description as sitename,md.description as designationname,mp.description as positionname,ar.rolename as userrole from users tu left join mst_site ms on ms.id=tu.site left join mst_designation md on md.id=tu.designation left join mst_position mp on mp.id=tu.position left join access_roles ar on tu.role=ar.id $search_string order by tu.id desc limit $start,$length");

            $user_count = DB::select("select count(*) as totalcount from users tu left join mst_site ms on ms.id=tu.site left join mst_designation md on md.id=tu.designation left join mst_position mp on mp.id=tu.position left join access_roles ar on tu.role=ar.id $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select *,tu.status as userstatus,tu.id as userid,tu.unique_id as userunique_id,ms.description as sitename,md.description as designationname,mp.description as positionname,ar.rolename as userrole from users tu left join mst_site ms on ms.id=tu.site left join mst_designation md on md.id=tu.designation left join mst_position mp on mp.id=tu.position left join access_roles ar on tu.role=ar.id order by tu.id desc limit $start,$length");
            $user_count = DB::select("select count(*) as totalcount from users");
        }

        foreach($user_count as $user_count) {
            $totalcount=$user_count->totalcount;
        }

        // return $tbldata;
        $output = array(
            //"sEcho" => 0,
            "iTotalRecords" =>10,
            "iTotalDisplayRecords" => $totalcount,
            "aaData" => array()
        );
        $row = array();

        // $acces_management = $this->acces_management;
        $edit = \Helper::getPermission('users-edit') ? 1 : 0;
        $delete = \Helper::getPermission('users-delete') ? 1 : 0;
        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $id=$tbldata->userid;
            $userunique_id=$tbldata->userunique_id;


            $fullname=$tbldata->fullname;
            $username=$tbldata->username;
            $password=$tbldata->password;
            $designation=$tbldata->designationname;
            $position=$tbldata->positionname;
            $site=$tbldata->sitename;
            $status=$tbldata->userstatus;
            $emailid=$tbldata->emailid;
            $usercode=$tbldata->usercode;
            $maker_checker=$tbldata->maker_checker;
            $userrole=$tbldata->userrole;

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $userunique_id;
            $row[] = $usercode;
            $row[] = $fullname;
            $row[] = $username;
            $row[] = $userrole;
            $row[] = $designation;
            $row[] = $position;
            $row[] = $site;

            if($status=='1')
            {
                $row[] = '<span class="label label-sm label-info status-active" > Active </span>';
            }
            else
            {
                $row[]='<span class="label label-sm label-danger status-inactive" > In Active </span>';
            }

            // $row[]='<div class="badge badge-light fw-bold py-2 px-2"><a href="#" class="menu-link px-3" data-bs-toggle="modal" data-editid="'.$id.'" data-bs-target="#kt_modal_add_customer"><i class="fa fa-solid fa-pen" style="color:#000;"></i></a></div>
            // <div class="badge badge-light fw-bold py-2 px-2"><a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:#000;" aria-hidden="true"></i></a></div>';
            $action="";
            if ($edit OR $delete)
            {
                if($edit)
                {
                    $edit_url  = url("/useraddedit/{$id}");
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete)
                {
                    $edit_url  = url("/useraddedit/{$id}");
                    $action.='<a onclick="LoadDeleteDialog('.$id.')" style="cursor: pointer;font-weight:normal !important;" title="Delete"  class="menu-link flex-stack px-3"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
            }
            else
            {
                //  $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                //                 Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                //             </button>';
            }
            $row[]=$action;


            $output['aaData'][] = $row;
        }



        echo json_encode($output);
    }


    function delete(Request $request)
    {
        // $acces_management = $this->acces_management;
        $delete = \Helper::getPermission('users-delete') ? 1 : 0;
        if($delete != 1)
        {
            $Success=0;
            $Msg="You have no access rights to delete, Contact Administrator for access rights";
            echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
        }

        $id=$request->request->get('id');

        DB::table("users")->delete($id);
        //return redirect()->back()->with('message', 'Record Deleted Successfuly!');
        $message="Record deleted successfully.";
        $alert_type="succ";
        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
    }

    function record_actions(Request $request)
    {
        $id=$request->request->get('id');
        $opt=$request->request->get('opt');
        $data = array('status'=>0);
        //var_dump($id);die;

        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table('users')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;
                //$query = DB::getQueryLog();
                //print_r($query);

                //var_dump($result);die;

                // DB::table("$tbl")->where('id',$id)->update($data);
                // $query = DB::getQueryLog();
                // echo $query;die;
            }

            //die("here");
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));

            //return redirect()->back()->with('message', 'Status Updated Successfuly!');
        }
        else if($opt==2)
        {
            $status=0;
            foreach($id as $id) {

                $result = DB::table('users')
                ->where('id', $id)
                ->update([
                    'status' => $status
                ]);

                //var_dump($result);die;
            }
            $message="Record(s) status change successfully.";
            $alert_type="succ";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
            //return redirect()->back()->with('message', 'Status updated Successfuly!');
        }
        else
        {

            // $acces_management = $this->acces_management;
            $edit = \Helper::getPermission('users-edit') ? 1 : 0;
            if($edit != 1)
            {
                $Success=0;
                $Msg="You have no access rights to delete, Contact Administrator for access rights";
                echo json_encode(array('message' => $Msg,'alert_type'=>"err"));
            }
                foreach($id as $id) {
                    DB::table("users")->delete($id);
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submituser(Request $request){

        if($request->hasFile('sign')){
            $filename = $request->username . '.' . $request->sign->extension();
            $request->sign->move(public_path('user_sign'), $filename);
        }else{
            $filename = null;
        }

        $edit_id=$request->request->get('edit_id');
        $fullname=$request->request->get('fullname');
        $username=$request->request->get('username');
        $password=$request->request->get('password');
        $cpassword=$request->request->get('cpassword');
        $designation=$request->request->get('designation');
        $position=$request->request->get('position');
        $site=$request->request->get('site');
        $status=$request->request->get('status');
        $emailid=$request->request->get('emailid');
        $usercode=$request->request->get('usercode');
        $maker_checker=$request->request->get('maker_checker');
        $role=$request->request->get('role');
        $mobile=$request->request->get('mobile');
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        $data = array();
        $data['fullname']= $fullname;
        $data['username']= $username;
        $data['password']= $password;
        $data['designation']= $designation;
        $data['position']= $position;
        $data['site']= $site;
        $data['status']= $status;
        $data['emailid']= $emailid;
        $data['usercode']= $usercode;
        $data['maker_checker']= $maker_checker;
        $data['role']= $role;
        $data['sign']= $filename ?? null;
        $data['mobile']= $mobile ?? null;

        if($edit_id=="0")
        {
            $data['addeddby']= $user_id;
            $date=date("Y/m/d h:m:s");
            $data['addedddttm']= $date;

            $query_insert = DB::table("users")->insert($data);

            if($query_insert==true)
            {
                $lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="US/$lastInsertId";

                $result = DB::table("users")
                ->where('id', $lastInsertId)
                ->update([
                    'unique_id'=> $unique_id
                ]);

                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
            else
            {
                $message="Error, While you are trying to insert record.";
                $alert_type="err";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
        }
        else
        {
            $date=date("Y/m/d h:m:s");
            $result = DB::table("users")
            ->where('id', $edit_id)
            ->update([
                'fullname'=>$fullname,
                'username' => $username,
                'password'=>$password,
                'designation'=>$designation,
                'position'=>$position,
                'site'=>$site,
                'status'=>$status,
                'emailid'=>$emailid,
                'usercode'=>$usercode,
                'maker_checker'=>$maker_checker,
                'sign'=>$filename,
                'modifiedby'=>$user_id,
                'modifieddttm'=>"$date",
                'role'=>"$role",
                'mobile'=> $mobile ?? null,
            ]);


            $message="Record updated successfully.";
            $alert_type="succ";
            $mode="edit";
            $url="";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));

            // if($result!=0)
            // {
            //     echo "succ";die;
            // }
            // else
            // {
            //     echo "error";die;
            // }
        }


    }

    function editcity(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        //$tbl=$request->request->get('tbl');

        $tbldata = DB::select("select * from tbl_city where id=$edit_id");


        foreach($tbldata as $tbldata){
            $description=$tbldata->description;
            $status=$tbldata->status;
            $state=$tbldata->state;
        }
        echo json_encode(array('description' => $description,'status'=>$status,'state'=>$state,'message'=>''));
    }

    function validateusername(Request $request)
    {
        $status = "false";

        $username=$request->request->get('username');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from users where username='".$username."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from users where username='".$username."' and id!='".$edit_id."'");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }else{
                $status = "true";
            }
        }


        echo $status;
    }

    function validateusercode(Request $request)
    {
        $status = "false";

        $usercode=$request->request->get('usercode');
        $edit_id=$request->request->get('id');

        if ($edit_id==''){
            $tbldata = DB::select("select count(*) as found from users where usercode='".$usercode."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from users where usercode='".$usercode."' and id!='".$edit_id."' ");
        }

        foreach($tbldata as $tbldata){
            $found=$tbldata->found;
            if ($found>0){
                $status = "false";
            }else{
                $status = "true";
            }
        }
        echo $status;
    }

    public function profile(){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = DB::table('users')->where('id',$user_id)->first();
        $role = Session::get('userdata')['role'];

        $roles_permissions = PermissionRoleMapping::where('role_id', $role)->get()->pluck('permission_id')->toArray();
        $permission = PermissionMenuMapping::whereIn('id', $roles_permissions)->orderBy('menu_id')->orderBy('submenu_id')->get();
        $permissions = PermissionMenuMapping::whereIn('id', $roles_permissions)->orderBy('menu_id')->orderBy('submenu_id')->get()->toArray();
        $permissionIds = array_column($permissions, 'id');
        $menus = PermissionMenuMaster::whereIn('id', $permissionIds)
            ->orWhereIn('id', PermissionMenuMapping::pluck('submenu_id')->toArray())
            ->get()->pluck('title','id')->toArray();

        return view('profile',compact('user','permission','menus','roles_permissions'));
    }

    public function editProfile(){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = DB::table('users')->where('id',$user_id)->first();

        return view('edit-profile',compact('user'));
    }

    public function updateProfile(Request $request){
        if($request->hasFile('avatar')){
            $avatarame = $request->username . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('avatar'), $avatarame);
        }else{
            $avatarame = null;
        }
        if($request->hasFile('sign')){
            $signname = $request->username . '.' . $request->sign->extension();
            $request->sign->move(public_path('user_sign'), $signname);
        }else{
            $signname = null;
        }
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $date=date("Y/m/d h:m:s");
        $result = DB::table("users")
            ->where('id', $request->id)
            ->update([
                'fullname'=>$request->full_name,
                'username' => $request->username,
                'password'=>$request->password,
                'emailid'=>$request->email,
                'modifiedby'=>$request->user_id,
                'modifieddttm'=>"$date",
                'mobile'=> $request->contact_number ?? null,
                'sign'=> $signname,
                'avatar' => $avatarame,
            ]);
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }


}