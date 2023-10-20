<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Data;
use Session;
use Redirect;

class role extends Controller
{

    function index()
    {
        
        $list = \Helper::getPermission('role-list') ? 1 : 0;
        if($list){
            return view('role.index');
        }else{
            Redirect::to('dashboard')->send();
        }
    }


    public function roledata()
    {
        //die("here");
        $start=0;
        $length=10;
        $search_value="";
        if(isset($_GET))
        {
            $start=$_GET['start'];
            $length=$_GET['length'];
            $search_value=$_GET['search']['value'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {
            $search_string="where ar.id LIKE '%$search_value%' or ar.rolename LIKE '%$search_value%' or ar.unique_id LIKE '%$search_value%' or ar.description LIKE '%$search_value%' ";
            $tbldata = DB::select("select ar.id as roleid,ar.rolename as rolename,ar.unique_id as roleunique_id,ar.description as roledescription,ar.status as rolestatus from access_roles ar $search_string order by ar.id desc limit $start,$length");

            $user_count = DB::select("select count(*) as totalcount from access_roles ar $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select ar.id as roleid,ar.rolename as rolename,ar.unique_id as roleunique_id,ar.description as roledescription,ar.status as rolestatus from access_roles ar order by ar.id desc limit $start,$length");
            $user_count = DB::select("select count(*) as totalcount from access_roles ar");
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
        $edit = \Helper::getPermission('role-edit') ? 1 : 0;
        $delete = \Helper::getPermission('role-delete') ? 1 : 0;

        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $id=$tbldata->roleid;
            $roleunique_id=$tbldata->roleunique_id;

            $rolename=$tbldata->rolename;
            $roledescription=$tbldata->roledescription;
            $status=$tbldata->rolestatus;

            $row = array();
            $row[] = '<div class="form-check form-check-sm form-check-custom form-check-solid">
            <input class="form-check-input" type="checkbox" name="id[]" value="'.$id.'" />
            </div>';
            $row[] = $roleunique_id;
            $row[] = $rolename;
            $row[] = $roledescription;

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
            //{{ URL::to('moduledata') }}

            $action="";
            $access_url = url("/mappingrolepermisssion/{$id}");
            $pemission = \Helper::getPermission('role-permission') ? 1 : 0;
            if($pemission == 1){
                $action .= '<a href="'.$access_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Assign Permissions"><i class="fa fa-key" style="font-weight:normal !important;color:blue;"></i></a>';
            }

            if ($edit OR $delete)
            {
                $edit_url  = url("/roleaddedit/{$id}");
                // $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                if($edit)
                {
                    $action.='<a href="'.$edit_url.'" class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Edit"><i class="fa fa-edit" style="font-weight:normal !important;"></i></a>';
                }
                if($delete)
                {
                    $action.='<a onclick="LoadDeleteDialog('.$id.')"  class="menu-link flex-stack px-3" style="cursor: pointer;font-weight:normal !important;" title="Delete"><i class="fa fa-trash" style="color:red;"> </i></a>';
                }
            }
            else
            {
                //die("here");
                // $action.='<button class="btn  btn-sm btn-primary " type="button"  aria-expanded="false">
                // Locked&nbsp;&nbsp;<i class="fa fa-lock" style="display:inline"></i>
                // </button>';
            }
            $row[]=$action;
            // $row[] = '<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
            // <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
            // <span class="svg-icon svg-icon-5 m-0">
            //     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            //         <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
            //     </svg>
            // </span>
            // <!--end::Svg Icon--></a>
            // <!--begin::Menu-->
            // <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3">View</a>
            //     </div>
            //     <!--end::Menu item-->
            //     <!--begin::Menu item-->
            //     <div class="menu-item px-3">
            //         <a href="" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
            //     </div>
            //     <!--end::Menu item-->
            // </div>
            // <!--end::Menu-->';

            $output['aaData'][] = $row;
        }



        echo json_encode($output);
    }

    public function moduledatanew()
    {

        //$edit_id=26;
        if(isset($_GET))
        {
            $edit_id=$_GET['id'];
        }



        echo '<ul id="myUL" class="fs-6 fw-bold form-label mt-3" >
            <li>
            <span class="caret">
            </span>
            <label class="mt-checkbox mt-checkbox-outline">
            <input type="checkbox" class="checkRole" id="checkallcheckbox"  value="1"  />
            <span></span>

            </label>

            MenuAccess

            <ul class="nested">';
        $tbldata = DB::select("select DISTINCT sub_module from access_modules where main_module='Master'");
        //var_dump($tbldata);die;
       ?>

        <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                             Master
        <ul class="nested fs-6 fw-bold form-label mt-3" >
        <?php
        foreach($tbldata as $tbldata) {

            $submodule_name=$tbldata->sub_module;
            ?>
            <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                             <?php echo $submodule_name; ?>
        <ul class="nested fs-6 fw-bold form-label mt-3" >

            <?php

            $master_sub_module_data = DB::select("select * from access_modules where sub_module='$submodule_name'");
            foreach($master_sub_module_data as $master_sub_module_data) {
            //var_dump($tbldata);die;
            //if($tbldata->main_module=='Master')
            //{

            $moduleid=$master_sub_module_data->id;

            $roledata = DB::select("Select * from access_role_modules where roleid='$edit_id' and moduleid='$moduleid'");

            $allow_access=0;
            $allow_add=0;
            $allow_view=0;
            $allow_edit=0;
            $allow_delete=0;
            $allow_print=0;
            $allow_import=0;
            $allow_export=0;

            if(is_array($roledata))
            {
                foreach($roledata as $roledata)
                {
                    $allow_access=$roledata->allow_access;
                    $allow_add=$roledata->allow_add;
                    $allow_view=$roledata->allow_view;
                    $allow_edit=$roledata->allow_edit;
                    $allow_delete=$roledata->allow_delete;
                    $allow_print=$roledata->allow_print;
                    $allow_import=$roledata->allow_import;
                    $allow_export=$roledata->allow_export;
                }
            }

            $checked_access=($allow_access == 1 ? 'checked' : '');
            $checked_add=($allow_add == 1 ? 'checked' : '');
            $checked_view=($allow_view == 1 ? 'checked' : '');
            $checked_edit=($allow_edit == 1 ? 'checked' : '');
            $checked_del=($allow_delete == 1 ? 'checked' : '');
            $checked_print=($allow_print == 1 ? 'checked' : '');
            $checked_import=($allow_import == 1 ? 'checked' : '');
            $checked_export=($allow_export == 1 ? 'checked' : '');

            //echo $moduleid;die;
            $modulename=$master_sub_module_data->modulename;
            $modulelabel=$master_sub_module_data->modulelabel;
            $modulegroup=$master_sub_module_data->modulegroup;
            $functionname="RoleCheckAll('$modulelabel')";
            ?>

                        <!-- newstart -->
                        <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                                    <label class="mt-checkbox mt-checkbox-outline" for="<?= $modulelabel ?>">
                                        <input type="checkbox" class="checkRole" onclick="<?= $functionname ?>" value="1" name="<?= $modulelabel ?>" id="<?= $modulelabel ?>" <?= $checked_access ?> />
                                        <span></span>
                                    </label>
                                    <?= $modulename; ?>
                            <ul class="nested fs-6 fw-bold form-label mt-3" >

                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_view<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="2" id="chk_view<?= $moduleid ?>"  <?= $checked_view ?>/>
                                        <span></span>
                                    </label>
                                    VIEW
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_add<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="3" id="chk_add<?= $moduleid ?>" <?= $checked_add ?>/>
                                        <span></span>
                                    </label>
                                    ADD
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_edit<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="4" id="chk_edit<?= $moduleid ?>" <?= $checked_edit ?> />
                                        <span></span>
                                    </label>
                                    EDIT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_del<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="5" id="chk_del<?= $moduleid ?>" <?= $checked_del ?> />
                                        <span></span>
                                    </label>
                                    DELETE
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="6" id="chk_print<?= $moduleid ?>" <?= $checked_print ?>/>
                                        <span></span>
                                    </label>
                                    PRINT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_import<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="7" id="chk_import<?= $moduleid ?>" <?= $checked_import ?>/>
                                        <span></span>
                                    </label>
                                    IMPORT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_export<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="8" id="chk_export<?= $moduleid ?>" <?= $checked_export ?> />
                                        <span></span>
                                    </label>
                                    EXPORT
                                </li>
                            </ul>
                        </li>
                        <!-- newstart -->
<?php
        }
?>

                        </ul>
        </li>

            <?php
        //}

    }
    ?>
    </ul></li>


    <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                             Sales
        <ul class="nested fs-6 fw-bold form-label mt-3" >

        <?php
        $tbldata = DB::select("select * from access_modules");
         foreach($tbldata as $tbldata)
         {

            //var_dump($tbldata);die;
            if($tbldata->main_module=='Sales')
            {
                $moduleid=$tbldata->id;

            $roledata = DB::select("Select * from access_role_modules where roleid='$edit_id' and moduleid='$moduleid'");

            $allow_access=0;
            $allow_add=0;
            $allow_view=0;
            $allow_edit=0;
            $allow_delete=0;
            $allow_print=0;
            $allow_import=0;
            $allow_export=0;
            $allow_print_with_hf=0;
            $allow_duplicate=0;

            if(is_array($roledata))
            {
                foreach($roledata as $roledata)
                {
                    $allow_access=$roledata->allow_access;
                    $allow_add=$roledata->allow_add;
                    $allow_view=$roledata->allow_view;
                    $allow_edit=$roledata->allow_edit;
                    $allow_delete=$roledata->allow_delete;
                    $allow_print=$roledata->allow_print;
                    $allow_print_with_hf=$roledata->allow_print_with_hf;
                    $allow_duplicate=$roledata->allow_duplicate;
                    $allow_import=$roledata->allow_import;
                    $allow_export=$roledata->allow_export;
                }
            }

                $checked_access=($allow_access == 1 ? 'checked' : '');
                $checked_add=($allow_add == 1 ? 'checked' : '');
                $checked_view=($allow_view == 1 ? 'checked' : '');
                $checked_edit=($allow_edit == 1 ? 'checked' : '');
                $checked_del=($allow_delete == 1 ? 'checked' : '');
                $checked_print=($allow_print == 1 ? 'checked' : '');
                $checked_print_with_hf=($allow_print_with_hf == 1 ? 'checked' : '');
                $checked_duplicate=($allow_duplicate == 1 ? 'checked' : '');
                $checked_import=($allow_import == 1 ? 'checked' : '');
                $checked_export=($allow_export == 1 ? 'checked' : '');

                $modulename=$tbldata->modulename;
                $modulelabel=$tbldata->modulelabel;
                $modulegroup=$tbldata->modulegroup;
                $functionname="RoleCheckAll('$modulelabel')";
                ?>
                <!-- newstart -->
                <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                                    <label class="mt-checkbox mt-checkbox-outline" for="<?= $modulelabel ?>">
                                        <input type="checkbox" class="checkRole" onclick="<?= $functionname ?>" value="1" name="<?= $modulelabel ?>" id="<?= $modulelabel ?>" <?= $checked_access ?> />
                                        <span></span>
                                    </label>
                                    <?= $modulename; ?>
                            <ul class="nested fs-6 fw-bold form-label mt-3" >

                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_view<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="2" id="chk_view<?= $moduleid ?>"  <?= $checked_view ?>/>
                                        <span></span>
                                    </label>
                                    VIEW
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_add<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="3" id="chk_add<?= $moduleid ?>" <?= $checked_add ?>/>
                                        <span></span>
                                    </label>
                                    ADD
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_edit<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="4" id="chk_edit<?= $moduleid ?>" <?= $checked_edit ?> />
                                        <span></span>
                                    </label>
                                    EDIT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_del<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="5" id="chk_del<?= $moduleid ?>" <?= $checked_del ?> />
                                        <span></span>
                                    </label>
                                    DELETE
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="6" id="chk_print<?= $moduleid ?>" <?= $checked_print ?>/>
                                        <span></span>
                                    </label>
                                    PRINT
                                </li>
                                <?php
                                $role_id=Session::get('userdata')['role'];

                                //echo $role_id;die;

                                //if($role_id=="34")
                                //{
                                ?>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="9" id="chk_print_with_hf<?= $moduleid ?>" <?= $checked_print_with_hf ?>/>
                                        <span></span>
                                    </label>
                                    PRINT WITH HF
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="10" id="chk_duplicate<?= $moduleid ?>" <?= $checked_duplicate ?>/>
                                        <span></span>
                                    </label>
                                    DUPLICATE
                                </li>
                                <?php
                                //}
                                ?>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_import<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="7" id="chk_import<?= $moduleid ?>" <?= $checked_import ?>/>
                                        <span></span>
                                    </label>
                                    IMPORT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_export<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="8" id="chk_export<?= $moduleid ?>" <?= $checked_export ?> />
                                        <span></span>
                                    </label>
                                    EXPORT
                                </li>
                            </ul>
                        </li>
                        <!-- newstart -->
                <?php
            }
        }
        ?>

        </ul>
    </li>


    <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
            Jobs
        <ul class="nested fs-6 fw-bold form-label mt-3" >

        <?php
        $tbldata = DB::select("select * from access_modules");
         foreach($tbldata as $tbldata)
         {

            //var_dump($tbldata);die;
            if($tbldata->main_module=='Jobs')
            {
                $moduleid=$tbldata->id;

            $roledata = DB::select("Select * from access_role_modules where roleid='$edit_id' and moduleid='$moduleid'");

            $allow_access=0;
            $allow_add=0;
            $allow_view=0;
            $allow_edit=0;
            $allow_delete=0;
            $allow_print=0;
            $allow_import=0;
            $allow_export=0;
            $allow_print_with_hf=0;
            $allow_duplicate=0;

            if(is_array($roledata))
            {
                foreach($roledata as $roledata)
                {
                    $allow_access=$roledata->allow_access;
                    $allow_add=$roledata->allow_add;
                    $allow_view=$roledata->allow_view;
                    $allow_edit=$roledata->allow_edit;
                    $allow_delete=$roledata->allow_delete;
                    $allow_print=$roledata->allow_print;
                    $allow_print_with_hf=$roledata->allow_print_with_hf;
                    $allow_duplicate=$roledata->allow_duplicate;
                    $allow_import=$roledata->allow_import;
                    $allow_export=$roledata->allow_export;
                }
            }

                $checked_access=($allow_access == 1 ? 'checked' : '');
                $checked_add=($allow_add == 1 ? 'checked' : '');
                $checked_view=($allow_view == 1 ? 'checked' : '');
                $checked_edit=($allow_edit == 1 ? 'checked' : '');
                $checked_del=($allow_delete == 1 ? 'checked' : '');
                $checked_print=($allow_print == 1 ? 'checked' : '');
                $checked_print_with_hf=($allow_print_with_hf == 1 ? 'checked' : '');
                $checked_duplicate=($allow_duplicate == 1 ? 'checked' : '');
                $checked_import=($allow_import == 1 ? 'checked' : '');
                $checked_export=($allow_export == 1 ? 'checked' : '');

                $modulename=$tbldata->modulename;
                $modulelabel=$tbldata->modulelabel;
                $modulegroup=$tbldata->modulegroup;
                $functionname="RoleCheckAll('$modulelabel')";
                ?>
                <!-- newstart -->
                <li class="fs-6 fw-bold form-label mt-3" ><span class="caret"></span>
                                    <label class="mt-checkbox mt-checkbox-outline" for="<?= $modulelabel ?>">
                                        <input type="checkbox" class="checkRole" onclick="<?= $functionname ?>" value="1" name="<?= $modulelabel ?>" id="<?= $modulelabel ?>" <?= $checked_access ?> />
                                        <span></span>
                                    </label>
                                    <?= $modulename; ?>
                            <ul class="nested fs-6 fw-bold form-label mt-3" >

                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_view<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="2" id="chk_view<?= $moduleid ?>"  <?= $checked_view ?>/>
                                        <span></span>
                                    </label>
                                    VIEW
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_add<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="3" id="chk_add<?= $moduleid ?>" <?= $checked_add ?>/>
                                        <span></span>
                                    </label>
                                    ADD
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_edit<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="4" id="chk_edit<?= $moduleid ?>" <?= $checked_edit ?> />
                                        <span></span>
                                    </label>
                                    EDIT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_del<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="5" id="chk_del<?= $moduleid ?>" <?= $checked_del ?> />
                                        <span></span>
                                    </label>
                                    DELETE
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="6" id="chk_print<?= $moduleid ?>" <?= $checked_print ?>/>
                                        <span></span>
                                    </label>
                                    PRINT
                                </li>
                                <?php
                                $role_id=Session::get('userdata')['role'];

                                //echo $role_id;die;

                                //if($role_id=="34")
                                //{
                                ?>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="9" id="chk_print_with_hf<?= $moduleid ?>" <?= $checked_print_with_hf ?>/>
                                        <span></span>
                                    </label>
                                    PRINT WITH HF
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_print<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="10" id="chk_duplicate<?= $moduleid ?>" <?= $checked_duplicate ?>/>
                                        <span></span>
                                    </label>
                                    DUPLICATE
                                </li>
                                <?php
                                //}
                                ?>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_import<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="7" id="chk_import<?= $moduleid ?>" <?= $checked_import ?>/>
                                        <span></span>
                                    </label>
                                    IMPORT
                                </li>
                                <li class="fs-6 fw-bold form-label mt-3" style="font-size:13px !important;display:none">
                                    <label class="mt-checkbox mt-checkbox-outline" for="chk_export<?= $moduleid ?>">
                                        <input type="checkbox" class="checkRole" name="<?= $modulelabel ?>_own[]" value="8" id="chk_export<?= $moduleid ?>" <?= $checked_export ?> />
                                        <span></span>
                                    </label>
                                    EXPORT
                                </li>
                            </ul>
                        </li>
                        <!-- newstart -->
                <?php
            }
        }
        ?>

        </ul>
    </li>


    <?php

      echo "</ul></li></ul>";
    }
    public function moduledata()
    {
        //die("here");
        $start=0;
        $length=10;
        $search_value="";
        if(isset($_GET))
        {
            $start=$_GET['start'];
            $length=$_GET['length'];
            $search_value=$_GET['search']['value'];
            $edit_id=$_GET['id'];
        }

        //echo $start."   ".$length;die;

        if($search_value!="")
        {
            $search_string="where am.id LIKE '%$search_value%' or am.modulegroup LIKE '%$search_value%' or am.modulelabel LIKE '%$search_value%' or am.modulename LIKE '%$search_value%' or am.module_sort LIKE '%$search_value%' or am.status LIKE '%$search_value%'";
            $tbldata = DB::select("select * from access_modules am $search_string limit $start,$length");

            $module_count = DB::select("select count(*) as totalcount from access_modules am $search_string");

            //$master_count = DB::select("select count(*) as totalcount from mst_country $search_string limit $start,$length");
        }
        else
        {
            $tbldata = DB::select("select * from access_modules am limit $start,$length");
            $module_count = DB::select("select count(*) as totalcount from access_modules am");
        }


        foreach($module_count as $module_count) {
            $totalcount=$module_count->totalcount;
        }

        // return $tbldata;
        $output = array(
            //"sEcho" => 0,
            "iTotalRecords" =>10,
            "iTotalDisplayRecords" => $totalcount,
            "aaData" => array()
        );
        $row = array();

        foreach($tbldata as $tbldata) {

            //var_dump($tbldata);die;
            $moduleid=$tbldata->id;

            $roledata = DB::select("Select * from access_role_modules where roleid='$edit_id' and moduleid='$moduleid'");

            $allow_access=0;
            $allow_add=0;
            $allow_view=0;
            $allow_edit=0;
            $allow_delete=0;
            $allow_print=0;
            $allow_import=0;
            $allow_export=0;

            if(is_array($roledata))
            {
                foreach($roledata as $roledata)
                {
                    $allow_access=$roledata->allow_access;
                    $allow_add=$roledata->allow_add;
                    $allow_view=$roledata->allow_view;
                    $allow_edit=$roledata->allow_edit;
                    $allow_delete=$roledata->allow_delete;
                    $allow_print=$roledata->allow_print;
                    $allow_import=$roledata->allow_import;
                    $allow_export=$roledata->allow_export;
                }
            }

            $checked_access=($allow_access == 1 ? 'checked' : '');
            $checked_add=($allow_add == 1 ? 'checked' : '');
            $checked_view=($allow_view == 1 ? 'checked' : '');
            $checked_edit=($allow_edit == 1 ? 'checked' : '');
            $checked_del=($allow_delete == 1 ? 'checked' : '');
            $checked_print=($allow_print == 1 ? 'checked' : '');
            $checked_import=($allow_import == 1 ? 'checked' : '');
            $checked_export=($allow_export == 1 ? 'checked' : '');

            //echo $moduleid;die;
            $modulename=$tbldata->modulename;
            $modulelabel=$tbldata->modulelabel;
            $modulegroup=$tbldata->modulegroup;

            $row = array();

            $row[] = $moduleid;
            $row[] = $modulename;

            $functionname="RoleCheckAll('$modulelabel')";

            $row[] = '<td class="td-full-access">
            <label class="mt-checkbox mt-checkbox-outline" for="'.$modulelabel.'">
                <input type="checkbox" class="checkRole" onclick="'.$functionname.'" value="1" name="'.$modulelabel.'" id="'.$modulelabel.'" '.$checked_access.' />
                <span></span>
            </label>
        </td>';
            $row[] = ' <td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_view'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="2" id="chk_view'.$moduleid.'"  '.$checked_view.'/>
                <span></span>
            </label>
        </td>';
            $row[] = ' <td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_add'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="3" id="chk_add'.$moduleid.'" '.$checked_add.'/>
                <span></span>
            </label>
        </td>';
            $row[] = '<td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_edit'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="4" id="chk_edit'.$moduleid.'" '.$checked_edit.' />
                <span></span>
            </label>
        </td>';
            $row[] = '<td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_del'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="5" id="chk_del'.$moduleid.'" '.$checked_del.' />
                <span></span>
            </label>
        </td>';
            $row[] = ' <td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_print'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="6" id="chk_print'.$moduleid.'" '.$checked_print.'/>
                <span></span>
            </label>
        </td>';
            $row[] = '<td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_import'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="7" id="chk_import'.$moduleid.'" '.$checked_import.'/>
                <span></span>
            </label>
        </td>';
            $row[] ='<td>
            <label class="mt-checkbox mt-checkbox-outline" for="chk_export'.$moduleid.'">
                <input type="checkbox" class="checkRole" name="'.$modulelabel.'_own[]" value="8" id="chk_export'.$moduleid.'" '.$checked_export.' />
                <span></span>
            </label>
        </td>';


            $output['aaData'][] = $row;
        }

        echo json_encode($output);
    }


    function delete(Request $request)
    {
        $id=$request->request->get('id');

        $user_count = DB::select("select count(*) as user_count from users where role=$id");

        foreach($user_count as $user_count) {
            $user_count=$user_count->user_count;
        }

        if($user_count==0)
        {
            //DB::table("tbl_user")->delete($id);
            DB::table('access_roles')->where('id', $id)->delete();
        }
        else
        {
            $message="You can not delete this record.";
            $alert_type="error";
            echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
        }
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

        if($opt==1)
        {
            $status=1;
            foreach($id as $id) {

                //DB::enableQueryLog();

                $result = DB::table('access_roles')
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

                $result = DB::table('access_roles')
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
                foreach($id as $id) {
                    $user_count = DB::select("select count(*) as user_count from users where role=$id");

                    foreach($user_count as $user_count) {
                        $user_count=$user_count->user_count;
                    }

                    if($user_count==0)
                    {
                        //DB::table("access_roles")->delete($id);
                        DB::table('access_roles')->where('id', $id)->delete();
                    }
                    else
                    {
                        $message="You can not delete this record.";
                        $alert_type="error";
                        echo json_encode(array('message' => $message,'alert_type'=>$alert_type));die;
                    }
                }

                $message="Record(s) deleted successfully.";
                $alert_type="succ";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type));
                //return redirect()->back()->with('message', 'Record Deleted Successfuly!');

        }
        //echo "done";
    }

    function submitrole(Request $request)
    {
        //die("here");
        $edit_id=$request->request->get('edit_id');
        $rolename=$request->request->get('rolename');
        $roledescription=$request->request->get('roledescription');
        $rolestatus=$request->request->get('status');

        //$tbl='state';


        $data = array();
        $data['rolename']= $rolename;
        $data['description']= $roledescription;
        $data['status']= $rolestatus;

        if($edit_id=="0")
        {
            //echo "here";die;

            $data['addedby']= "0";
            $date=date("Y/m/d h:m:s");
            $data['addeddate']= $date;

            //var_dump($data);die;

            $query_insert = DB::table("access_roles")->insert($data);

            //var_dump($query_insert);die;

            if($query_insert==true)
            {
                $last_inserted_id=DB::getPdo()->lastInsertId();

                //$lastInsertId = DB::getPdo()->lastInsertId();
                $unique_id="RO/$last_inserted_id";

                $result = DB::table("access_roles")
                ->where('id', $last_inserted_id)
                ->update([
                    'unique_id'=> $unique_id
                ]);

                //echo $last_inserted_id;die;

                $tbldata = DB::select("select * from access_modules");


                foreach($tbldata as $tbldata)
                {

                    $modulelabel = $tbldata->modulelabel;
                    $moduleid = $tbldata->id;
                    $role_checks =$request->request->get($modulelabel . '_own');

                    if(isset($_POST["$modulelabel"]))
                    {
                        $access_checkbox=1;
                    }
                    else
                    {
                        $access_checkbox=0;
                    }

                    if (count((array)$role_checks) > 0)
                    {
                        $access_role_modules_data = array(
                            'roleid' => $last_inserted_id,
                            'moduleid' => $moduleid,
                            'allow_access' => $access_checkbox,
                            'addeddate' => $date,
                            'addedby' => 1
                        );


                        //var_dump($role_checks);die;


                        foreach ($role_checks as $rc) {

                            //echo $rc;die;
                            switch ($rc) {
                                case 2:
                                    $access_role_modules_data['allow_view'] = 1;
                                    break;
                                case 3:
                                    $access_role_modules_data['allow_add'] = 1;
                                    break;
                                case 4:
                                    $access_role_modules_data['allow_edit'] = 1;
                                    break;
                                case 5:
                                    $access_role_modules_data['allow_delete'] = 1;
                                    break;
                                case 6:
                                    $access_role_modules_data['allow_print'] = 1;
                                    break;
                                case 7:
                                    $access_role_modules_data['allow_import'] = 1;
                                    break;
                                case 8:
                                    $access_role_modules_data['allow_export'] = 1;
                                    break;
                                case 9:
                                    $access_role_modules_data['allow_print_with_hf'] = 1;
                                    break;
                                case 10:
                                    $access_role_modules_data['allow_duplicate'] = 1;
                                    break;
                            }
                        }

                    }
                    else
                    {
                        $access_role_modules_data = array(
                            'roleid' => $last_inserted_id,
                            'moduleid' => $moduleid,
                            'allow_access' => $access_checkbox,
                            'addeddate' => $date,
                            'addedby' => 1
                        );
                    }

                    //var_dump($data);die;

                    $query_insert = DB::table("access_role_modules")->insert($access_role_modules_data);

                    ///var_dump($role_checks);die;

                }

                $message="Record inserted successfully.";
                $alert_type="succ";
                $mode="add";
                $url="";
                echo json_encode(array('message' => $message,'alert_type'=>$alert_type,'url'=>$url,'mode'=>$mode));
            }
            else
            {
                //die("here");
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
            $result = DB::table("access_roles")
            ->where('id', $edit_id)
            ->update([
                'rolename'=>$rolename,
                'description' => $roledescription,
                'status'=>$rolestatus,
                'modifiedby'=>"0",
                'modifieddate'=>"$date"
            ]);


            DB::table('access_role_modules')->where('roleid', $edit_id)->delete();

            $tbldata = DB::select("select * from access_modules");


            foreach($tbldata as $tbldata)
            {

                $modulelabel = $tbldata->modulelabel;
                $moduleid = $tbldata->id;
                $role_checks =$request->request->get($modulelabel . '_own');

                if(isset($_POST["$modulelabel"]))
                    {
                        $access_checkbox=1;
                    }
                    else
                    {
                        $access_checkbox=0;
                    }


                if (count((array)$role_checks) > 0)
                {
                    $access_role_modules_data = array(
                        'roleid' => $edit_id,
                        'moduleid' => $moduleid,
                        'allow_access' => $access_checkbox,
                        'addeddate' => $date,
                        'addedby' => 1
                    );


                    //var_dump($role_checks);die;


                    foreach ($role_checks as $rc) {

                        //echo $rc;die;
                        switch ($rc) {
                            case 2:
                                $access_role_modules_data['allow_view'] = 1;
                                break;
                            case 3:
                                $access_role_modules_data['allow_add'] = 1;
                                break;
                            case 4:
                                $access_role_modules_data['allow_edit'] = 1;
                                break;
                            case 5:
                                $access_role_modules_data['allow_delete'] = 1;
                                break;
                            case 6:
                                $access_role_modules_data['allow_print'] = 1;
                                break;
                            case 7:
                                $access_role_modules_data['allow_import'] = 1;
                                break;
                            case 8:
                                $access_role_modules_data['allow_export'] = 1;
                                break;
                            case 9:
                                $access_role_modules_data['allow_print_with_hf'] = 1;
                                break;
                            case 10:
                                $access_role_modules_data['allow_duplicate'] = 1;
                                break;
                        }
                    }

                    //var_dump($access_role_modules_data);die;

                }
                else
                {
                    $access_role_modules_data = array(
                        'roleid' => $edit_id,
                        'moduleid' => $moduleid,
                        'allow_access' => $access_checkbox,
                        'addeddate' => $date,
                        'addedby' => 1
                    );
                }

                //var_dump($data);die;

                $query_insert = DB::table("access_role_modules")->insert($access_role_modules_data);

                ///var_dump($role_checks);die;

            }


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

    function validaterolename(Request $request)
    {
        $status = "false";

        $rolename=$request->request->get('rolename');
        $edit_id=$request->request->get('id');


        if ($edit_id=="0"){
            $tbldata = DB::select("select count(*) as found from access_roles where rolename='".$rolename."' ");
        }else{
            $tbldata = DB::select("select count(*) as found from access_roles where rolename='".$rolename."' and id!='".$edit_id."'");
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


}
