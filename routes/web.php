<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolesAndPermissionController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Authenticate;
use App\Models\PermissionModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});



// role

Route::get('/p', function () {
    $permission_data = PermissionModel::all();
    return view('admin.RolesAndPermission.partialFiles.partial', ['permission_data' => $permission_data]);
});



Route::get('/addRoles', function () {
    return view('admin.roles.addRoles');
});




Route::post('/storeRole', [App\Http\Controllers\RolesController::class, 'storeRole'])->middleware('can:role-add');

Route::get('showRoles', [App\Http\Controllers\RolesController::class, 'showRole'])->middleware('can:role-show');

Route::get('/delete-role/{id}', [App\Http\Controllers\RolesController::class, 'destroyRole'])->middleware('can:role-delete');

Route::get('/edit-role/{id}', [App\Http\Controllers\RolesController::class, 'editRole']);

Route::post('/update-role/{id}', [App\Http\Controllers\RolesController::class, 'updateRole'])->middleware('can:role-update');


Route::get('/addPermission', function () {
    return view('admin.permission.addPermission');
});


Route::post('/storePermission', [App\Http\Controllers\PermissionController::class, 'storePermission'])->middleware('can:permission-add');

Route::get('/showPermission', [App\Http\Controllers\PermissionController::class, 'showPermission'])->middleware('can:permission-show');

Route::get('/edit-permission/{id}', [App\Http\Controllers\PermissionController::class, 'editPermission']);

Route::post('/update-permission/{id}', [App\Http\Controllers\PermissionController::class, 'updatePermission'])->middleware('can:permission-update');

Route::get('/delete-permission/{id}', [App\Http\Controllers\PermissionController::class, 'destroyPermission'])->middleware('can:permission-delete');




Route::get('/showroles_and_permission', [RolesAndPermissionController::class, 'showRP'])->name('showroles_and_permission');
Route::post('/showroles_and_permission', [RolesAndPermissionController::class, 'storeRolesAndPermission'])->name('showroles_and_permissions');
Route::get('/fetchPermission', [PermissionController::class, 'fetchPermission'])->name('fetchPermission');




// user


Route::get('/addUsers' , function(){
    return view('admin.user.addUsers');
});

Route::get('/addUsers', [UsersController::class, 'showRole']);
Route::get('/addUser', [UsersController::class, 'showRole'])->middleware('can:add-user');

Route::post('/showUsers', [App\Http\Controllers\UsersController::class, 'storeUser'])->name('store')->middleware('can:add-user');

Route::get('/showUsers', [App\Http\Controllers\UsersController::class, 'showUser'])->middleware('can:show-user');

Route::get('/edit/{id}', [App\Http\Controllers\UsersController::class, 'editUser']);

Route::post('/update/{id}', [App\Http\Controllers\UsersController::class, 'updateUser'])->middleware('can:update-user');

Route::post('/delete/{id}', [UsersController::class, 'destroyUser'])->middleware('can:delete-user');




//Sales-Contract
Route::get('sales-contract','App\Http\Controllers\SalesContractController@index')->name('sales-contract')->middleware('can:salesContract-show');
Route::get('sales-contract-create','App\Http\Controllers\SalesContractController@create')->name('sales-contract-create')->middleware('can:salesContract-add');
Route::post('sales-contract-store','App\Http\Controllers\SalesContractController@store')->name('sales-contract-store')->middleware('can:salesContract-add');
Route::get('sales-contract-edit','App\Http\Controllers\SalesContractController@edit')->name('sales-contract-edit');
Route::post('sales-contract-update','App\Http\Controllers\SalesContractController@update')->name('sales-contract-update')->middleware('can:salesContract-update');
Route::get('sales-contract-destroy','App\Http\Controllers\SalesContractController@destroy')->name('sales-contract-destroy')->middleware('can:salesContract-delete');
Route::get('sales-contract-show','App\Http\Controllers\SalesContractController@show')->name('sales-contract-show');
Route::get('get-product-hsn','App\Http\Controllers\SalesContractController@productHSN')->name('get-product-hsn');
Route::get('get-quotation-detail-SC','App\Http\Controllers\SalesContractController@quotationDetail')->name('get-quotation-detail-SC');
Route::get('sales-contract-export','App\Http\Controllers\SalesContractController@export')->name('sales-contract-export');

Route::get('job-card-duplicate/{id}','App\Http\Controllers\jobcard@duplicate')->name('job-card-duplicate');




//FG Entry


Route::get('fg-entry','App\Http\Controllers\FgEntryController@index')->name('fg-entry')->middleware('can:fg-show');
Route::get('fg-entry-create','App\Http\Controllers\FgEntryController@create')->name('fg-entry-create')->middleware('can:fg-add');
Route::post('fg-entry-store','App\Http\Controllers\FgEntryController@store')->name('fg-entry-store')->middleware('can:fg-add');
Route::get('fg-entry-edit','App\Http\Controllers\FgEntryController@edit')->name('fg-entry-edit');
Route::post('fg-entry-update','App\Http\Controllers\FgEntryController@update')->name('fg-entry-update')->middleware('can:fg-update');
Route::get('fg-entry-destroy','App\Http\Controllers\FgEntryController@destroy')->name('fg-entry-destroy')->middleware('can:fg-delete');
Route::get('fg-entry-show','App\Http\Controllers\FgEntryController@show')->name('fg-entry-show')->middleware('can:fgEntry-show');
Route::get('fg-entry-search','App\Http\Controllers\FgEntryController@search')->name('fg-entry-search');
Route::get('get-job-work-order-detail','App\Http\Controllers\FgEntryController@workOrders')->name('get-job-work-order-detail');
Route::get('get-work-order-name','App\Http\Controllers\FgEntryController@workOrdersName')->name('get-work-order-name');

















// clear-cache
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
     return '<h1>Clear Cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});

Route::get('/mail', function() {
    $exitCode = Artisan::call('schedule:run');
    return '<h1>auto:weeklyFGMail</h1>';
});

//dump-autoload
Route::get('/dump-autoload', function()
{
    exec('composer dump-autoload');
    echo 'composer dump-autoload complete';
});
Route::get('/run-composer',  function() {
    exec('composer:update');
    exec('composer:dump-autoload');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');

    return "Caches cleared successfully & Composer commands executed successfully.";

});

Route::get('sql-query', function(){

    \DB::select(" UPDATE `tbl_company` SET `header_image` = 'Devharsh_Infotech_Pvt_Ltd_header.png' WHERE `tbl_company`.`id` = 47;");
    \DB::select(" UPDATE `tbl_company` SET `footer_image` = 'Devharsh_Infotech_Pvt_Ltd_footer.png' WHERE `tbl_company`.`id` = 47;");
    \DB::select(" UPDATE `tbl_company` SET `stamp_image` = 'Devarsh_Stamp.png' WHERE `tbl_company`.`id` = 47;");
    \DB::select(" UPDATE `tbl_company` SET `header_image` = 'Scube_header.jpg' WHERE `tbl_company`.`id` = 49;");
    \DB::select(" UPDATE `tbl_company` SET `footer_image` = 'Scube_footer.jpg' WHERE `tbl_company`.`id` = 49;");
    \DB::select(" UPDATE `tbl_company` SET `stamp_image` = 'SSSL_Stamp.png' WHERE `tbl_company`.`id` = 49; ");

    echo 'Company record Update';
    exit;
    \DB::table('description_masters')->truncate();
    \DB::table('sub_menus')->truncate();
    \DB::select("INSERT INTO `description_masters` (`id`, `text`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
	(1, 'Basic Description', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Size', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Paper Weight/GSM', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'Paper Type', NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Front Printing', NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Back Printing', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'Design Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'Security Ink Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'Variable Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'SeQR Doc Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(11, 'Additional Security Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 'Core Type', NULL, NULL, NULL, NULL, NULL, NULL),
	(13, 'Core ID', NULL, NULL, NULL, NULL, NULL, NULL),
	(14, 'Core Color', NULL, NULL, NULL, NULL, NULL, NULL),
	(15, 'Finishing', NULL, NULL, NULL, NULL, NULL, NULL),
	(16, 'Packing', NULL, NULL, NULL, NULL, NULL, NULL),
	(17, 'Front Cover Page', NULL, NULL, NULL, NULL, NULL, NULL),
	(18, 'Back Cover Page', NULL, NULL, NULL, NULL, NULL, NULL),
	(19, '1st Part', NULL, NULL, NULL, NULL, NULL, NULL),
	(20, '2nd Part', NULL, NULL, NULL, NULL, NULL, NULL),
	(21, '3rd Part', NULL, NULL, NULL, NULL, NULL, NULL),
	(22, 'SeQR Doc Software Security Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(23, 'Base Printing Security Paper Features', NULL, NULL, NULL, NULL, NULL, NULL),
	(24, 'Advanced Printing Security Features', NULL, NULL, NULL, NULL, NULL, NULL);");

\DB::select("INSERT INTO `sub_menus` (`id`, `menu_id`, `text`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`, `created_at`, `updated_at`) VALUES
(1, 7, 'High Resolution Border', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 7, 'Guilloche Pattern', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 7, 'Rainbow Color', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 7, 'Void Pantograph / Anticopy', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 7, 'Latent Image', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 7, 'Watermark Logo / Image', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 'See Through Image', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 7, 'Relief Design', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 7, 'Micro Text/Line', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 7, 'Micro Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 7, 'Inverse Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 7, 'Spelling Mistake', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 7, 'Latent Text', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 7, 'Mirror Text', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 7, 'Micro Text Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 7, 'Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 8, 'Invisible Fluorescent Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 8, 'Invisible Fluorescent Sign', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 8, 'Invisible Fluorescent Text', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 8, 'Thermochromik Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(21, 8, 'Conductive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 8, 'Visible Fluorescent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(23, 8, 'Photochromic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(24, 8, 'Watermark Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 8, 'Fugitive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 8, 'Holographic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 8, 'InfraRed Invisible Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 8, 'Taggent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 8, 'Coin Reactive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 8, 'Solvent Sensitive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 9, 'Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 9, 'QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 9, 'Serial Number', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 9, 'Variable Data', NULL, NULL, NULL, NULL, NULL, NULL),
(35, 9, 'Variable Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(36, 9, 'Variable Watermark Text', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 10, 'Encrypted QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(38, 10, 'Dynamic Microline', NULL, NULL, NULL, NULL, NULL, NULL),
(39, 10, 'Dynamic Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 10, 'Track and Trace Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(41, 10, 'Watermark', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 10, 'Dynamic Invisible', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 11, 'Hologram', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 11, 'Blind Embossing', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 11, 'Foil Stamping', NULL, NULL, NULL, NULL, NULL, NULL),
(46, 11, 'Foil Stamping + Blind Embossing', NULL, NULL, NULL, NULL, NULL, NULL),
(47, 11, 'Lamination', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 4, 'Bond', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 4, 'Color Center', NULL, NULL, NULL, NULL, NULL, NULL),
(50, 4, 'MICR', NULL, NULL, NULL, NULL, NULL, NULL),
(51, 4, 'CB', NULL, NULL, NULL, NULL, NULL, NULL),
(52, 4, 'CFB', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 4, 'CF', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 4, 'SC', NULL, NULL, NULL, NULL, NULL, NULL),
(55, 4, 'SCCB', NULL, NULL, NULL, NULL, NULL, NULL),
(56, 4, 'Thermal', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 4, 'Parchment', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 4, 'Tear Resistant', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 4, 'Non-Tearable', NULL, NULL, NULL, NULL, NULL, NULL),
(60, 12, 'Paper', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 12, 'Plastic', NULL, NULL, NULL, NULL, NULL, NULL),
(62, 14, 'Black', NULL, NULL, NULL, NULL, NULL, NULL),
(63, 14, 'White', NULL, NULL, NULL, NULL, NULL, NULL),
(64, 14, 'Gray', NULL, NULL, NULL, NULL, NULL, NULL),
(65, 14, 'Other', NULL, NULL, NULL, NULL, NULL, NULL),
(66, 15, 'Fanfold', NULL, NULL, NULL, NULL, NULL, NULL),
(67, 15, 'Cut-sheet', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 15, 'Roll', NULL, NULL, NULL, NULL, NULL, NULL),
(69, 15, 'Saddle Sticthing', NULL, NULL, NULL, NULL, NULL, NULL),
(70, 15, 'Side Stitching', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 15, 'Pinning', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 22, 'Encrypted QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 22, 'Open QR Code', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 22, 'Track n Trace Barcode', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 22, 'Variable Invisible Text', NULL, NULL, NULL, NULL, NULL, NULL),
(76, 22, 'Variable Invisible Image', NULL, NULL, NULL, NULL, NULL, NULL),
(77, 22, 'Variable Watermark Security Line', NULL, NULL, NULL, NULL, NULL, NULL),
(78, 22, 'Variable Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(79, 22, 'Variable Micro Text', NULL, NULL, NULL, NULL, NULL, NULL),
(80, 22, 'Mobile &amp; Web App for Verification', NULL, NULL, NULL, NULL, NULL, NULL),
(81, 22, 'Secured Depository', NULL, NULL, NULL, NULL, NULL, NULL),
(82, 23, 'High Resolution Border', NULL, NULL, NULL, NULL, NULL, NULL),
(83, 23, 'Guilloche Pattern Design', NULL, NULL, NULL, NULL, NULL, NULL),
(84, 23, 'Micro Text / Micro Line', NULL, NULL, NULL, NULL, NULL, NULL),
(85, 23, 'Anti-Copy / Void Pantograph', NULL, NULL, NULL, NULL, NULL, NULL),
(86, 23, 'Ghost / Hidden Image', NULL, NULL, NULL, NULL, NULL, NULL),
(87, 23, 'Latent Image', NULL, NULL, NULL, NULL, NULL, NULL),
(88, 23, 'Relief Design', NULL, NULL, NULL, NULL, NULL, NULL),
(89, 23, 'Reverse text', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 23, 'Intentional Wrong Spelling', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 23, 'Watermark Logo', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 23, 'Prismatic Printing', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 24, 'Invisible UV Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 24, 'Thermochromic Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 24, 'Fluorescent Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 24, 'Conductive Ink', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 24, 'Hot Foil Stamping – Gold / Silver', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 24, 'Original/Genuine Hologram', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 24, 'Serial Numbering', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 24, 'See Through Image', NULL, NULL, NULL, NULL, NULL, NULL);");

echo 'Query Run succefully';





});


Route::get('/first/{id}', function ($id) {
    echo $id;
    return view('first');
});








Route::get('user_home','App\Http\Controllers\User@index');
Route::get('user_home/{id}','App\Http\Controllers\User@index');

Route::get('home','App\Http\Controllers\User@index');
Route::get('about','App\Http\Controllers\User@about');
Route::get('service','App\Http\Controllers\User@service');




Route::view('page','page');
Route::view('page2','page2');
Route::view('myfrm','myfrm');

Route::post('submitfrm','App\Http\Controllers\Myfrm@index');

Route::view('news1','news1');
Route::view('news2','news2');




Route::get('dashboard', function () {
    return view('dashboard');
});





Route::get('viewquotation', function ($id) {
    
    return view('dashboard');
});





Route::get('viewquotation/{id}', function ($quotation_id) {

    return view('viewquotation',array('quotation_id'=>$quotation_id));
});




Route::get('login/{id}', function ($id) {
    if (Session::has('userdata')){
         return redirect('/viewquotation/'.$id);
    }
    else
    {
        return view('/',array('id'=>$id));
    }
});





// Route::get('login', function () {
   
//     if (Session::has('userdata')){
//         return redirect('/dashboard');
//     }
//     else
//     {
//         return view('/');
//     }
// });


Route::get('/', function () {
    if (Session::has('userdata')){
        return redirect('/dashboard');
    }
    else
    {
        return view('login');
    }
});

Route::post('checklogin','App\Http\Controllers\login@checklogin');

Route::get('logout', 'App\Http\Controllers\login@logout');

Route::get('test', function () {
    return view('test');
});




Route::get('master/{id}','App\Http\Controllers\master@index');
Route::get('activemaster/{tbl}/{id}','App\Http\Controllers\master@activemaster');
Route::get('inactivemaster/{tbl}/{id}','App\Http\Controllers\master@inactivemaster');
Route::get('deleteallmaster/{tbl}/{id}','App\Http\Controllers\master@deleteall');
Route::post('record_actions','App\Http\Controllers\master@record_actions');
Route::post('submitmaster','App\Http\Controllers\master@submitmaster');
Route::post('editmaster','App\Http\Controllers\master@editmaster');
Route::post('validatemaster','App\Http\Controllers\master@validatemaster');
Route::post('deletemaster','App\Http\Controllers\master@delete');
Route::post('data/{id}','App\Http\Controllers\master@data');







//state module



Route::get('state','App\Http\Controllers\state@index');

Route::post('validatestate','App\Http\Controllers\state@validatestate');
Route::post('editstate','App\Http\Controllers\state@editstate');
Route::post('record_actions_state','App\Http\Controllers\state@record_actions');
Route::post('deletestate','App\Http\Controllers\state@delete');
Route::get('statedata','App\Http\Controllers\state@statedata');
Route::get('fetchstatecountrydata','App\Http\Controllers\state@fetchstatecountrydata');





Route::post('submitstate','App\Http\Controllers\state@submitstate');

//city module




Route::get('city','App\Http\Controllers\city@index');
Route::post('submitcity','App\Http\Controllers\city@submitcity');
Route::post('validatecity','App\Http\Controllers\city@validatecity');
Route::post('editcity','App\Http\Controllers\city@editcity');
Route::post('deletecity','App\Http\Controllers\city@delete');
Route::post('record_actions_city','App\Http\Controllers\city@record_actions');
Route::get('citydata','App\Http\Controllers\city@citydata');
Route::get('city_ajax_populate_state','App\Http\Controllers\city@city_ajax_populate_state');
Route::get('city_ajax_populate_country','App\Http\Controllers\city@city_ajax_populate_country');



//user module





// Route::get('user','App\Http\Controllers\user@index')->middleware('can:show-user');
// Route::post('userdata','App\Http\Controllers\user@userdata');
// Route::post('deleteuser','App\Http\Controllers\user@delete');
// Route::post('record_actions_user','App\Http\Controllers\user@record_actions');


// Route::get('/useraddedit/{id}', function ($id) {
//     if($id!="0")
//     {
//         $tbl_user = DB::select("select * from users where id='".$id."'");
//         return view('user.useraddedit',array('id'=>$id,'tbl_user'=>$tbl_user));
//     }
//     else
//     {
//         return view('user.useraddedit',array('id'=>$id,'tbl_user'=>""));
//     }
// })->middleware('can:user-add');


// Route::post('validateusername','App\Http\Controllers\user@validateusername');
// Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
// Route::post('submituser','App\Http\Controllers\user@submituser');






Route::get('role','App\Http\Controllers\role@index');
Route::get('roledata','App\Http\Controllers\role@roledata');
Route::get('moduledatanew','App\Http\Controllers\role@moduledatanew');
 

Route::get('/roleaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $access_roles = DB::select("select * from access_roles where arid='".$id."'");
        return view('role.roleaddedit',array('id'=>$id,'access_roles'=>$access_roles));
    }
    else
    {
        return view('role.roleaddedit',array('id'=>$id,'access_roles'=>""));
    }
});

Route::post('validaterolename','App\Http\Controllers\role@validaterolename');
Route::any('submitrole','App\Http\Controllers\role@submitrole');
Route::post('deleterole','App\Http\Controllers\role@delete');
Route::post('record_actions_role','App\Http\Controllers\role@record_actions');
Route::get('moduledata','App\Http\Controllers\role@moduledata');



//quotation module


Route::get('quotation','App\Http\Controllers\quotation@index');
Route::get('quotationdata','App\Http\Controllers\quotation@quotationdata');

Route::get('/quotationaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_quotation = DB::select("select * from tbl_quotation where id='".$id."'");
        $quotation_width_mapping = DB::select("select * from quotation_width_mapping where quotation_id='".$id."'");
        $quotation_invoice_details = DB::select("select * from quotation_invoice_details where quotation_id='".$id."'");
        return view('quotation.quotationaddedit',array('id'=>$id,'tbl_quotation'=>$tbl_quotation,'quotation_width_mapping'=>$quotation_width_mapping,'quotation_invoice_details'=>$quotation_invoice_details));
    }
    else
    {
        return view('quotation.quotationaddedit',array('id'=>$id,'tbl_quotation'=>"",'quotation_width_mapping'=>"",'quotation_invoice_details'=>""));
    }
});

Route::get('/quotationduplicate/{id}', function ($id) {

        $tbl_quotation = DB::select("select * from tbl_quotation where id='".$id."'");
        $quotation_width_mapping = DB::select("select * from quotation_width_mapping where quotation_id='".$id."'");
        $quotation_invoice_details = DB::select("select * from quotation_invoice_details where quotation_id='".$id."'");

        return view('quotation.quotationduplicate',array('id'=>$id,'tbl_quotation'=>$tbl_quotation,'quotation_width_mapping'=>$quotation_width_mapping,'quotation_invoice_details'=>$quotation_invoice_details));

});

Route::post('validatequotationname','App\Http\Controllers\quotation@validaterolename');
Route::post('submitquotation','App\Http\Controllers\quotation@submitquotation');
Route::post('duplicatequotation','App\Http\Controllers\quotation@duplicatequotation');
Route::post('deletequotation','App\Http\Controllers\quotation@delete');
Route::post('deletetbldata','App\Http\Controllers\quotation@deletetbldata');
Route::post('record_actions_quotation','App\Http\Controllers\quotation@record_actions');

//Route::get('moduledata','App\Http\Controllers\quotation@moduledata');

//pdf route



Route::get('htmlpdf','App\Http\Controllers\PDFController@htmlPDF');
Route::get('generatePDF/{id}','App\Http\Controllers\PDFController@generatePDF');
Route::get('generatePDFwithhf/{id}','App\Http\Controllers\PDFController@generatePDFwithhf');


//product_category module


Route::get('productcategory','App\Http\Controllers\productcategory@index');
Route::post('submitproductcategory','App\Http\Controllers\productcategory@submitproductcategory');
Route::post('validateproductcategory','App\Http\Controllers\productcategory@validateproductcategory');
Route::post('editproductcategory','App\Http\Controllers\productcategory@editproductcategory');
Route::post('deleteproductcategory','App\Http\Controllers\productcategory@delete');
Route::post('record_actions_productcategory','App\Http\Controllers\productcategory@record_actions');
Route::get('productcategorydata','App\Http\Controllers\productcategory@productcategorydata');
Route::post('get_excise_code_description','App\Http\Controllers\productcategory@get_excise_code_description');

//excise module




Route::get('excise','App\Http\Controllers\excise@index');
Route::get('excisedata','App\Http\Controllers\excise@excisedata');
Route::post('submitexcise','App\Http\Controllers\excise@submitexcise');
Route::post('validateexcisecode','App\Http\Controllers\excise@validateexcisecode');
Route::post('editexcise','App\Http\Controllers\excise@editexcise');
Route::post('deleteexcise','App\Http\Controllers\excise@delete');
Route::post('record_actions_excise','App\Http\Controllers\excise@record_actions');

//process master module


Route::get('process','App\Http\Controllers\process@index');
Route::get('processdata','App\Http\Controllers\process@processdata');
Route::post('deleteprocess','App\Http\Controllers\process@delete');
Route::post('record_actions_process','App\Http\Controllers\process@record_actions');

Route::get('/processaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_user = DB::select("select * from  tbl_process_master where id='".$id."'");
        return view('process.processaddedit',array('id'=>$id,'tbl_process'=>$tbl_user));
    }
    else
    {
        return view('process.processaddedit',array('id'=>$id,'tbl_process'=>""));
    }
});

Route::post('validateprocessname','App\Http\Controllers\process@validateprocessname');
//Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
Route::post('submitprocess','App\Http\Controllers\process@submitprocess');




//machine master module



Route::get('machine','App\Http\Controllers\machine@index');
Route::get('machinedata','App\Http\Controllers\machine@machinedata');
Route::post('deletemachine','App\Http\Controllers\machine@delete');
Route::post('record_actions_machine','App\Http\Controllers\machine@record_actions');





Route::get('/machineaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_machine = DB::select("select * from  tbl_machine_master where id='".$id."'");
        return view('machine.machineaddedit',array('id'=>$id,'tbl_machine'=>$tbl_machine));
    }
    else
    {
        return view('machine.machineaddedit',array('id'=>$id,'tbl_machine'=>""));
    }
});

Route::post('validateuniqueid','App\Http\Controllers\machine@validateuniqueid');
//Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
Route::post('submitmachine','App\Http\Controllers\machine@submitmachine');



//company master module



Route::get('company','App\Http\Controllers\company@index');
Route::get('companydata','App\Http\Controllers\company@companydata');
Route::post('deletecompany','App\Http\Controllers\company@delete');

Route::post('deleteplants','App\Http\Controllers\company@deleteplants');

Route::post('record_actions_company','App\Http\Controllers\company@record_actions');





Route::get('/companyaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_company = DB::select("select * from  tbl_company where id='".$id."'");
        return view('company.companyaddedit',array('id'=>$id,'tbl_company'=>$tbl_company));
    }
    else
    {
        return view('company.companyaddedit',array('id'=>$id,'tbl_company'=>""));
    }
});

Route::post('validatecompanyid','App\Http\Controllers\company@validatecompanyid');
//Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
Route::post('submitcompany','App\Http\Controllers\company@submitcompany');
Route::post('submitneft','App\Http\Controllers\company@submitneft');
Route::post('deleteneft','App\Http\Controllers\company@deleteneft');




Route::post('editneft','App\Http\Controllers\company@editneft');



//material module



Route::get('material','App\Http\Controllers\material@index');
Route::get('materialdata','App\Http\Controllers\material@materialdata');

Route::get('/materialaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_material = DB::select("select * from tbl_material where id='".$id."'");

        return view('material.materialaddedit',array('id'=>$id,'tbl_material'=>$tbl_material));
    }
    else
    {
        return view('material.materialaddedit',array('id'=>$id,'tbl_material'=>""));
    }
});



Route::post('validatematerialname','App\Http\Controllers\material@validaterolename');
Route::post('submitmaterial','App\Http\Controllers\material@submitmaterial');
Route::post('deletematerial','App\Http\Controllers\material@delete');
Route::post('record_actions_material','App\Http\Controllers\material@record_actions');
Route::get('ajax_populate_rm_product_category','App\Http\Controllers\material@ajax_populate_rm_product_category');


// Unit module


Route::get('unit','App\Http\Controllers\UnitMaster@index');
Route::get('unitdata','App\Http\Controllers\UnitMaster@unitdata');
Route::post('submitunit','App\Http\Controllers\UnitMaster@submitunit');
Route::post('validateunitcode','App\Http\Controllers\UnitMaster@validateunitcode');
Route::post('editunit','App\Http\Controllers\UnitMaster@editunit');
Route::post('deleteunit','App\Http\Controllers\UnitMaster@delete');
Route::post('record_actions_unit','App\Http\Controllers\UnitMaster@record_actions');


// Raw Material Category



Route::get('rmcategory','App\Http\Controllers\RMCategory@index');
Route::get('rmcategorydata','App\Http\Controllers\RMCategory@rmcategorydata');
Route::post('submitrmcategory','App\Http\Controllers\RMCategory@submitrmcategory');
Route::post('validatermcategorycode','App\Http\Controllers\RMCategory@validatermcategorycode');
Route::post('editrmcategory','App\Http\Controllers\RMCategory@editrmcategory');
Route::post('deletermcategory','App\Http\Controllers\RMCategory@delete');
Route::post('record_actions_rm_category','App\Http\Controllers\RMCategory@record_actions');


// Raw Material Product Category



Route::get('rmproductcategory','App\Http\Controllers\RMProductCategory@index');
Route::get('rmproductcategorydata','App\Http\Controllers\RMProductCategory@rmproductcategorydata');
Route::post('deletermproductcategory','App\Http\Controllers\RMProductCategory@delete');
Route::post('submitrmproductcategory','App\Http\Controllers\RMProductCategory@submitrmproductcategory');
Route::post('editrmproductcategory','App\Http\Controllers\RMProductCategory@editrmproductcategory');
Route::post('validatermproductcategory','App\Http\Controllers\RMProductCategory@validatermproductcategory');
Route::post('record_actions_rmproductcategory','App\Http\Controllers\RMProductCategory@record_actions');



//Product master module



Route::get('product','App\Http\Controllers\product@index');
Route::get('productdata','App\Http\Controllers\product@productdata');
Route::post('deleteproduct','App\Http\Controllers\product@delete');

Route::post('deleteprepress','App\Http\Controllers\product@deleteprepress');
Route::post('deletepress','App\Http\Controllers\product@deletepress');
Route::post('deletepostpress','App\Http\Controllers\product@deletepostpress');

Route::post('record_actions_product','App\Http\Controllers\product@record_actions');





Route::get('/productaddedit/{id}', function ($id) {
    $tbl_company = DB::select("select * from  tbl_company");
    $tbl_desc = DB::select("select * from  description_masters");
    if($id!="0")
    {
        $tbl_product = DB::select("select * from  tbl_product where id='".$id."'");
        return view('product.productaddedit',array('id'=>$id,'tbl_company'=>$tbl_company,'tbl_desc'=>$tbl_desc,'tbl_product'=>$tbl_product));
    }
    else
    {
        return view('product.productaddedit',array('id'=>$id,'tbl_company'=>$tbl_company,'tbl_desc'=>$tbl_desc,'tbl_product'=>""));
    }
});

Route::post('validateproductid','App\Http\Controllers\product@validateproductid');
//Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
Route::post('submitproduct','App\Http\Controllers\product@submitproduct');

// QC Master




Route::get('qcmaster','App\Http\Controllers\QcMaster@index');
Route::get('qcmasterdata','App\Http\Controllers\QcMaster@qcmasterdata');
Route::post('deleteqcmaster','App\Http\Controllers\QcMaster@delete');
Route::post('submitqcmaster','App\Http\Controllers\QcMaster@submitqcmaster');
Route::post('record_actions_qcmaster','App\Http\Controllers\QcMaster@record_actions_qcmaster');
Route::post('validateqcmaster','App\Http\Controllers\QcMaster@validateqcmaster');
Route::post('editqcmaster','App\Http\Controllers\QcMaster@editqcmaster');


//job card module



Route::get('jobcard','App\Http\Controllers\jobcard@index');
Route::get('jobcarddata','App\Http\Controllers\jobcard@jobcarddata');
Route::post('deletejobcard','App\Http\Controllers\jobcard@delete');
Route::post('deleteposition','App\Http\Controllers\jobcard@deleteposition');

Route::post('record_actions_jobcard','App\Http\Controllers\jobcard@record_actions');
Route::post('deletepaper','App\Http\Controllers\jobcard@deletepaper');

Route::post('deletecolor','App\Http\Controllers\jobcard@deletecolor');







Route::get('/jobcardaddedit/{id}/{tab}', function ($id,$tab="general") {
    if($id!="0")
    {
        $tbl_jobcard = DB::select("select * from  tbl_job_cart where id='".$id."'");
        return view('jobcard.jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>$tbl_jobcard));
    }
    else
    {
        return view('jobcard.jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>""));
    }
});






Route::post('subitjombcard','App\Http\Controllers\jobcard@submitjobcard');

Route::post('editpaper','App\Http\Controllers\jobcard@editpaper');
Route::post('edit_material_requirement','App\Http\Controllers\jobcard@edit_material_requirement');

Route::post('submitspecificdetails','App\Http\Controllers\jobcard@submitspecificdetails');
Route::post('submitprepress','App\Http\Controllers\jobcard@submitprepress');
Route::post('submitpress','App\Http\Controllers\jobcard@submitpress');
Route::post('submitpostpress','App\Http\Controllers\jobcard@submitpostpress');
Route::post('submitprocessselection','App\Http\Controllers\jobcard@submitprocessselection');
Route::post('submitmaterialrequirement','App\Http\Controllers\jobcard@submitmaterialrequirement');


Route::post('deletepresscoatingdetails','App\Http\Controllers\jobcard@deletepresscoatingdetails');
Route::post('deletepresssparetouse','App\Http\Controllers\jobcard@deletepresssparetouse');
Route::post('deleteprocessselectionprepress','App\Http\Controllers\jobcard@deleteprocessselectionprepress');
Route::post('deleteprocessselectionpress','App\Http\Controllers\jobcard@deleteprocessselectionpress');
Route::post('deleteprocessselectionpostpress','App\Http\Controllers\jobcard@deleteprocessselectionpostpress');
Route::post('delete_material_requirement','App\Http\Controllers\jobcard@delete_material_requirement');

Route::post('delete_packaging_details','App\Http\Controllers\jobcard@delete_packaging_details');

Route::post('edit_packaging_details','App\Http\Controllers\jobcard@edit_packaging_details');

Route::post('delete_packaging_details','App\Http\Controllers\jobcard@delete_packaging_details');

Route::get('generatejobcardPDF/{id}','App\Http\Controllers\PDFController@generatejobcardPDF');
Route::get('generatejobcardPDFwithhf/{id}','App\Http\Controllers\PDFController@generatejobcardPDFwithhf');

Route::get('thermalgeneratejobcardPDF/{id}','App\Http\Controllers\PDFController@thermalgeneratejobcardPDF');
Route::get('thermalgeneratejobcardPDFwithhf/{id}','App\Http\Controllers\PDFController@thermalgeneratejobcardPDFwithhf');

//spare module


Route::get('spare','App\Http\Controllers\spare@index');   // get
Route::get('sparedata','App\Http\Controllers\spare@sparedata');  // get
Route::any('submitspare','App\Http\Controllers\spare@submitspare');// post
Route::any('validatesparecode','App\Http\Controllers\spare@validatesparecode');// post
Route::any('editspare','App\Http\Controllers\spare@editspare');// post
Route::any('deletespare','App\Http\Controllers\spare@delete');// post
Route::any('record_actions_spare','App\Http\Controllers\spare@record_actions');// post

Route::any('ajax_populate_product_type','App\Http\Controllers\jobcard@ajax_populate_product_type');// get

Route::any('deleteimage','App\Http\Controllers\jobcard@deleteimage');// post
Route::any('downloadimage','App\Http\Controllers\jobcard@downloadimage');// post


//thermal job card



Route::get('thermal_jobcard','App\Http\Controllers\thermaljobcard@index');
Route::get('thermal_jobcarddata','App\Http\Controllers\thermaljobcard@jobcarddata');
Route::post('thermal_deletejobcard','App\Http\Controllers\thermaljobcard@delete');
Route::post('thermal_deleteposition','App\Http\Controllers\thermaljobcard@deleteposition');

Route::any('thermal_record_actions_jobcard','App\Http\Controllers\thermaljobcard@record_actions');
Route::post('thermal_deletepaper','App\Http\Controllers\thermaljobcard@deletepaper');

Route::post('thermal_deletecolor','App\Http\Controllers\thermaljobcard@deletecolor');


Route::get('/thermal_jobcardaddedit/{id}/{tab}', function ($id,$tab="general") {
    if($id!="0")
    {
        $tbl_jobcard = DB::select("select * from  tbl_job_cart where id='".$id."'");
        return view('jobcard.thermal_jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>$tbl_jobcard));
    }
    else
    {
        return view('jobcard.thermal_jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>""));
    }
});



Route::post('thermal_submitjobcard','App\Http\Controllers\thermaljobcard@submitjobcard');

Route::post('thermal_editpaper','App\Http\Controllers\thermaljobcard@editpaper');
Route::post('thermal_edit_material_requirement','App\Http\Controllers\thermaljobcard@edit_material_requirement');

Route::post('thermal_submitspecificdetails','App\Http\Controllers\thermaljobcard@submitspecificdetails');
Route::post('thermal_submitprepress','App\Http\Controllers\thermaljobcard@submitprepress');
Route::post('thermal_submitpress','App\Http\Controllers\thermaljobcard@submitpress');
Route::post('thermal_submitpostpress','App\Http\Controllers\thermaljobcard@submitpostpress');
Route::post('thermal_submitprocessselection','App\Http\Controllers\thermaljobcard@submitprocessselection');
Route::post('thermal_submitmaterialrequirement','App\Http\Controllers\thermaljobcard@submitmaterialrequirement');




Route::post('thermal_deletepresscoatingdetails','App\Http\Controllers\thermaljobcard@deletepresscoatingdetails');
Route::post('thermal_deletepresssparetouse','App\Http\Controllers\thermaljobcard@deletepresssparetouse');
Route::post('thermal_deleteprocessselectionprepress','App\Http\Controllers\thermaljobcard@deleteprocessselectionprepress');
Route::post('thermal_deleteprocessselectionpress','App\Http\Controllers\thermaljobcard@deleteprocessselectionpress');
Route::post('thermal_deleteprocessselectionpostpress','App\Http\Controllers\thermaljobcard@deleteprocessselectionpostpress');
Route::post('thermal_delete_material_requirement','App\Http\Controllers\thermaljobcard@delete_material_requirement');



Route::post('thermal_delete_packaging_details','App\Http\Controllers\jobcard@delete_packaging_details');

Route::post('thermal_edit_packaging_details','App\Http\Controllers\jobcard@edit_packaging_details');

Route::post('thermal_delete_packaging_details','App\Http\Controllers\jobcard@delete_packaging_details');

Route::get('thermal_generatejobcardPDF/{id}','App\Http\Controllers\PDFController@thermalgeneratejobcardPDF');
Route::get('thermal_generatejobcardPDFwithhf/{id}','App\Http\Controllers\PDFController@thermalgeneratejobcardPDFwithhf');

Route::post('thermal_deleteimage','App\Http\Controllers\jobcard@deleteimage');
Route::post('thermal_downloadimage','App\Http\Controllers\jobcard@downloadimage');





//computer stationary job card


Route::get('/computer_stationary_jobcardaddedit/{id}/{tab}', function ($id,$tab="general") {
    if($id!="0")
    {
        $tbl_jobcard = DB::select("select * from  tbl_job_cart where id='".$id."'");
        return view('jobcard.computer_stationary_jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>$tbl_jobcard));
    }
    else
    {
        return view('jobcard.computer_stationary_jobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>""));
    }
});


Route::post('computer_stationary_submitjobcard','App\Http\Controllers\computerstationaryjobcard@submitjobcard');
Route::post('computer_stationary_submitspecificdetails','App\Http\Controllers\computerstationaryjobcard@submitspecificdetails');
Route::post('computer_stationary_submitprepress','App\Http\Controllers\computerstationaryjobcard@submitprepress');
Route::post('computer_stationary_submitpress','App\Http\Controllers\computerstationaryjobcard@submitpress');
Route::post('computer_stationary_submitpostpress','App\Http\Controllers\computerstationaryjobcard@submitpostpress');
Route::post('computer_stationary_submitprocessselection','App\Http\Controllers\computerstationaryjobcard@submitprocessselection');
Route::post('computer_stationary_submitmaterialrequirement','App\Http\Controllers\computerstationaryjobcard@submitmaterialrequirement');


Route::get('csgeneratejobcardPDF/{id}','App\Http\Controllers\PDFController@csgeneratejobcardPDF');
Route::get('csgeneratejobcardPDFwithhf/{id}','App\Http\Controllers\PDFController@csgeneratejobcardPDFwithhf');



//computer stationary job card finished

//check job card


Route::get('/checkjobcardaddedit/{id}/{tab}', function ($id,$tab="general") {
    if($id!="0")
    {
        $tbl_jobcard = DB::select("select * from  tbl_job_cart where id='".$id."'");
        return view('jobcard.checkjobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>$tbl_jobcard));
    }
    else
    {
        return view('jobcard.checkjobcardaddedit',array('id'=>$id,'tab'=>$tab,'tbl_jobcard'=>""));
    }
});


Route::post('check_submitjobcard','App\Http\Controllers\checkjobcard@submitjobcard');
Route::post('check_submitspecificdetails','App\Http\Controllers\checkjobcard@submitspecificdetails');
Route::post('check_submitprepress','App\Http\Controllers\checkjobcard@submitprepress');
Route::post('check_submitpress','App\Http\Controllers\checkjobcard@submitpress');
Route::post('check_submitpostpress','App\Http\Controllers\checkjobcard@submitpostpress');
Route::post('check_submitprocessselection','App\Http\Controllers\checkjobcard@submitprocessselection');
Route::post('check_submitmaterialrequirement','App\Http\Controllers\checkjobcard@submitmaterialrequirement');
Route::post('submitspecificdetailscheck','App\Http\Controllers\checkjobcard@submitspecificdetailscheck');

Route::get('chequegeneratejobcardPDF/{id}','App\Http\Controllers\PDFController@chequegeneratejobcardPDF');
Route::get('chequegeneratejobcardPDFwithhf/{id}','App\Http\Controllers\PDFController@chequegeneratejobcardPDFwithhf');



//check job card finished


Route::get('sendbasicemail','App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail','App\Http\Controllers\MailController@html_email');
Route::get('sendattachmentemail','App\Http\Controllers\MailController@attachment_email');


//sales work order



Route::get('salesworkorder','App\Http\Controllers\salesworkorder@index');
Route::post('salesworkorderataformdata','App\Http\Controllers\salesworkorder@salesworkorderataformdata');
Route::post('salesworkorderata','App\Http\Controllers\salesworkorder@salesworkorderdata');
Route::post('deletesalesworkorder','App\Http\Controllers\salesworkorder@delete');

//Route::post('deletesalesworkorder','App\Http\Controllers\salesworkorder@deletesaleswrkoroder');

Route::post('record_actions_salesworkorder','App\Http\Controllers\salesworkorder@record_actions');



Route::get('/salesworkorderaddedit/{id}/{tab}', function ($id,$tab="general") {
    if($id!="0")
    {
        $tbl_salesworkorder = DB::select("select * from  tbl_salesworkorder where id='".$id."'");

       
        return view('salesworkorder.salesworkorderaddedit',array('id'=>$id,'tab'=>$tab,'tbl_salesworkorder'=>$tbl_salesworkorder));
    }
    else
    {
        return view('salesworkorder.salesworkorderaddedit',array('id'=>$id,'tab'=>$tab,'tbl_salesworkorder'=>""));
    }
});

Route::post('validatesalesworkorderid','App\Http\Controllers\salesworkorder@validatesalesworkorderid');
//Route::post('validateusercode','App\Http\Controllers\user@validateusercode');
Route::post('submitsalesworkorder','App\Http\Controllers\salesworkorder@submitsalesworkorder');
Route::post('submitlabeling','App\Http\Controllers\salesworkorder@submitlabeling');
Route::post('deletelabelingdetails','App\Http\Controllers\salesworkorder@deletelabelingdetails');




Route::post('editlabelingdetails','App\Http\Controllers\company@editlabelingdetails');








// customer


Route::get('customer','App\Http\Controllers\customer@index');
Route::get('customerdata','App\Http\Controllers\customer@customerdata');
Route::post('deletecustomer','App\Http\Controllers\customer@delete');

Route::post('deletecustomer','App\Http\Controllers\customer@deletecustomer');

Route::post('record_actions_customer','App\Http\Controllers\customer@record_actions');





Route::get('/customeraddedit/{id}/{tab}', function ($id,$tab) {
    if($id!="0")
    {
        $tbl_customer_general = DB::select("select * from  tbl_customer_general where id='".$id."'");
        return view('customer.customeraddedit',array('id'=>$id,'tab'=>$tab,'tbl_customer_general'=>$tbl_customer_general));
    }
    else
    {
        return view('customer.customeraddedit',array('id'=>$id,'tab'=>$tab,'tbl_customer_general'=>""));
    }
});

Route::post('submitcustomer','App\Http\Controllers\customer@submitcustomer');
Route::post('submitdeliverylocation','App\Http\Controllers\customer@submitdeliverylocation');
Route::post('submitcommunication','App\Http\Controllers\customer@submitcommunication');
Route::post('submitinvoicing','App\Http\Controllers\customer@submitinvoicing');
Route::post('submitpayment','App\Http\Controllers\customer@submitpayment');
Route::post('submitshipping','App\Http\Controllers\customer@submitshipping');
Route::post('submitshippingagent','App\Http\Controllers\customer@submitshippingagent');
Route::post('submitexporttrade','App\Http\Controllers\customer@submitexporttrade');
Route::post('submittaxinformation','App\Http\Controllers\customer@submittaxinformation');






Route::post('editdeliverylocation','App\Http\Controllers\customer@editdeliverylocation');
Route::post('deletedeliverylocation','App\Http\Controllers\customer@deletedeliverylocation');

Route::post('editdcommunication','App\Http\Controllers\customer@editdcommunication');
Route::post('deletecommunication','App\Http\Controllers\customer@deletecommunication');

Route::post('editdcontact','App\Http\Controllers\customer@editdcontact');
Route::post('deletecontact','App\Http\Controllers\customer@deletecontact');

Route::get('/export/{type}/{id}', 'App\Http\Controllers\customer@export');

Route::get('deliverylocationPDF/{id}','App\Http\Controllers\PDFController@deliverylocationPDF');



//tax master module
Route::middleware(['customeMiddleware'])->group(function () {

Route::get('tax','App\Http\Controllers\tax@index');
Route::get('taxdata','App\Http\Controllers\tax@taxdata');
Route::post('deletetax','App\Http\Controllers\tax@delete');
Route::post('record_actions_tax','App\Http\Controllers\tax@record_actions');





Route::get('/taxaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_tax = DB::select("select * from  tbl_tax where id='".$id."'");
        return view('tax.taxaddedit',array('id'=>$id,'tbl_tax'=>$tbl_tax));
    }
    else
    {
        return view('tax.taxaddedit',array('id'=>$id,'tbl_tax'=>""));
    }
});

Route::post('submittax','App\Http\Controllers\tax@submittax');

});
//transport master module


Route::get('transport','App\Http\Controllers\transport@index');
Route::get('transportdata','App\Http\Controllers\transport@transportdata');
Route::post('deletetransport','App\Http\Controllers\transport@delete');
Route::post('record_actions_transport','App\Http\Controllers\transport@record_actions');





Route::get('/transportaddedit/{id}', function ($id) {
    if($id!="0")
    {
        $tbl_transport = DB::select("select * from  tbl_transport where id='".$id."'");
        return view('transport.transportaddedit',array('id'=>$id,'tbl_transport'=>$tbl_transport));
    }
    else
    {
        return view('transport.transportaddedit',array('id'=>$id,'tbl_transport'=>""));
    }
});

Route::post('submittransport','App\Http\Controllers\transport@submittransport');
Route::post('submitlocation','App\Http\Controllers\transport@submitlocation');
Route::post('submittransporter','App\Http\Controllers\salesworkorder@submittransporter');

Route::get('generatePDFsalesworkorder/{id}','App\Http\Controllers\PDFController@generatePDFsalesworkorder');
Route::get('generatePDFSaleWorkOderCosting/{id}','App\Http\Controllers\PDFController@generatePDFSaleWorkOderCosting');

Route::get('generatePDFnewworkorder/{id}','App\Http\Controllers\PDFController@generatePDFnewworkorder');


    Route::get('prospect-master','App\Http\Controllers\ProspectMasterController@index')->name('prospect-master');
    Route::get('prospect-master-create','App\Http\Controllers\ProspectMasterController@create')->name('prospect-master-create');
    Route::post('prospect-master-store','App\Http\Controllers\ProspectMasterController@store')->name('prospect-master-store');
    Route::get('prospect-master-edit','App\Http\Controllers\ProspectMasterController@edit')->name('prospect-master-edit');
    Route::post('prospect-master-update','App\Http\Controllers\ProspectMasterController@update')->name('prospect-master-update');
    Route::get('prospect-master-destroy','App\Http\Controllers\ProspectMasterController@destroy')->name('prospect-master-destroy');



Route::get('tax-master','App\Http\Controllers\TaxController@index')->name('tax-master');
Route::get('tax-master-create','App\Http\Controllers\TaxController@create')->name('tax-master-create');
Route::post('tax-master-store','App\Http\Controllers\TaxController@store')->name('tax-master-store');
Route::get('tax-master-edit','App\Http\Controllers\TaxController@edit')->name('tax-master-edit');
Route::post('tax-master-update','App\Http\Controllers\TaxController@update')->name('tax-master-update');
Route::get('tax-master-destroy','App\Http\Controllers\TaxController@destroy')->name('tax-master-destroy');

Route::get('quotation-master','App\Http\Controllers\QuotationMasterController@index')->name('quotation-master');
Route::get('quotation-master-create','App\Http\Controllers\QuotationMasterController@create')->name('quotation-master-create');
Route::post('quotation-master-store','App\Http\Controllers\QuotationMasterController@store')->name('quotation-master-store');
Route::get('quotation-master-edit','App\Http\Controllers\QuotationMasterController@edit')->name('quotation-master-edit');
Route::post('quotation-master-update','App\Http\Controllers\QuotationMasterController@update')->name('quotation-master-update');
Route::get('quotation-master-destroy','App\Http\Controllers\QuotationMasterController@destroy')->name('quotation-master-destroy');
Route::get('quotation/preview-pdf','App\Http\Controllers\QuotationMasterController@previewPdf')->name('quotation-preview-pdf');
Route::get('quotation-master-show','App\Http\Controllers\QuotationMasterController@show')->name('quotation-master-show');
Route::get('get-quotation-detail','App\Http\Controllers\QuotationMasterController@quotationDetail')->name('get-quotation-detail');
Route::get('quotation-search','App\Http\Controllers\QuotationMasterController@search')->name('quotation-search');
Route::get('quotation-export','App\Http\Controllers\QuotationMasterController@export')->name('quotation-export');

Route::get('terms-condition-master','App\Http\Controllers\TermsConditionController@index')->name('terms-condition-master');
Route::get('terms-condition-master-create','App\Http\Controllers\TermsConditionController@create')->name('terms-condition-master-create');
Route::post('terms-condition-master-store','App\Http\Controllers\TermsConditionController@store')->name('terms-condition-master-store');
Route::get('terms-condition-master-edit','App\Http\Controllers\TermsConditionController@edit')->name('terms-condition-master-edit');
Route::post('terms-condition-master-update','App\Http\Controllers\TermsConditionController@update')->name('terms-condition-master-update');
Route::get('terms-condition-master-destroy','App\Http\Controllers\TermsConditionController@destroy')->name('terms-condition-master-destroy');
Route::get('terms-condition-title-value','App\Http\Controllers\TermsConditionController@TermTitlewiseValue')->name('terms-condition-title-value');
Route::get('terms-condition-value','App\Http\Controllers\TermsConditionController@termsValue')->name('terms-condition-value');

Route::get('terms-condition-title','App\Http\Controllers\TermsTitleController@categorywiseTitle')->name('terms-condition-title');
Route::get('add-term-title','App\Http\Controllers\TermsTitleController@store')->name('add-term-title');

Route::get('test_mail','App\Http\Controllers\QuotationMasterController@testMail');

Route::get('sales-master','App\Http\Controllers\SalesMasterController@index')->name('sales-master');
Route::get('sales-master-create','App\Http\Controllers\SalesMasterController@create')->name('sales-master-create');
Route::post('sales-master-store','App\Http\Controllers\SalesMasterController@store')->name('sales-master-store');

Route::get('description',

'App\Http\Controllers\QuotationMasterController@productWiseDesc')->name('description');

Route::get('product-description1','App\Http\Controllers\product@productWiseDesc')->name('product-description1');



Route::get('get-customer','App\Http\Controllers\QuotationMasterController@customer')->name('get-customer');
Route::get('get-prospect','App\Http\Controllers\QuotationMasterController@prospect')->name('get-prospect');
Route::get('get-customer-attention','App\Http\Controllers\QuotationMasterController@customerAttention')->name('get-customer-attention');

Route::get('get-quotation-advance-feature','App\Http\Controllers\QuotationMasterController@featureQuotation')->name('get-quotation-advance-feature');
Route::get('quotation-master-alter','App\Http\Controllers\QuotationMasterController@alter')->name('quotation-master-alter');
Route::post('quotation-master-alterUpdate','App\Http\Controllers\QuotationMasterController@alterUpdate')->name('quotation-master-alterUpdate');

Route::get('product-size-master','App\Http\Controllers\ProductSizeMasterController@index')->name('product-size-master');
Route::get('product-size-master-create','App\Http\Controllers\ProductSizeMasterController@create')->name('product-size-master-create');
Route::post('product-size-master-store','App\Http\Controllers\ProductSizeMasterController@store')->name('product-size-master-store');
Route::get('product-size-master-edit','App\Http\Controllers\ProductSizeMasterController@edit')->name('product-size-master-edit');
Route::post('product-size-master-update','App\Http\Controllers\ProductSizeMasterController@update')->name('product-size-master-update');
Route::get('product-size-master-destroy','App\Http\Controllers\ProductSizeMasterController@destroy')->name('product-size-master-destroy');
//Tax Structure


Route::get('tax-structure-master','App\Http\Controllers\TaxStructureMasterController@index')->name('tax-structure-master');
Route::get('tax-structure-master-create','App\Http\Controllers\TaxStructureMasterController@create')->name('tax-structure-master-create');
Route::post('tax-structure-master-store','App\Http\Controllers\TaxStructureMasterController@store')->name('tax-structure-master-store');
Route::get('tax-structure-master-edit','App\Http\Controllers\TaxStructureMasterController@edit')->name('tax-structure-master-edit');
Route::post('tax-structure-master-update','App\Http\Controllers\TaxStructureMasterController@update')->name('tax-structure-master-update');
Route::get('tax-structure-master-destroy','App\Http\Controllers\TaxStructureMasterController@destroy')->name('tax-structure-master-destroy');
Route::get('tax-structure-master-status','App\Http\Controllers\TaxStructureMasterController@status')->name('tax-structure-master-status');
//Proforma Invoice

Route::get('proforma-invoice','App\Http\Controllers\ProformaInvoiceController@index')->name('proforma-invoice');
Route::get('proforma-invoice-create','App\Http\Controllers\ProformaInvoiceController@create')->name('proforma-invoice-create');
Route::post('proforma-invoice-store','App\Http\Controllers\ProformaInvoiceController@store')->name('proforma-invoice-store');
Route::get('proforma-invoice-edit','App\Http\Controllers\ProformaInvoiceController@edit')->name('proforma-invoice-edit');
Route::post('proforma-invoice-update','App\Http\Controllers\ProformaInvoiceController@update')->name('proforma-invoice-update');
Route::get('proforma-invoice-show','App\Http\Controllers\ProformaInvoiceController@show')->name('proforma-invoice-show');
Route::get('proforma-invoice-destroy','App\Http\Controllers\ProformaInvoiceController@destroy')->name('proforma-invoice-destroy');
Route::get('get-company-bank-detail','App\Http\Controllers\ProformaInvoiceController@companyBankDetail')->name('get-company-bank-detail');
Route::get('get-customer-delivery','App\Http\Controllers\ProformaInvoiceController@customerDelivery')->name('get-customer-delivery');
Route::get('get-product-category-items','App\Http\Controllers\ProformaInvoiceController@categoryWiseProduct')->name('get-product-category-items');
Route::get('get-product-category-hsn','App\Http\Controllers\ProformaInvoiceController@categoryHSN')->name('get-product-category-hsn');
Route::get('get-tax-value','App\Http\Controllers\ProformaInvoiceController@getTaxName')->name('get-tax-value');
Route::get('get-product-category-size','App\Http\Controllers\ProformaInvoiceController@categoryProductSize')->name('get-product-category-size');
//Job Card Route

Route::get('job-card-type','App\Http\Controllers\JobCardTypeController@index')->name('job-card-type');
Route::get('job-card-type-create','App\Http\Controllers\JobCardTypeController@create')->name('job-card-type-create');
Route::post('job-card-type-store','App\Http\Controllers\JobCardTypeController@store')->name('job-card-type-store');
Route::get('job-card-type-edit','App\Http\Controllers\JobCardTypeController@edit')->name('job-card-type-edit');
Route::post('job-card-type-update','App\Http\Controllers\JobCardTypeController@update')->name('job-card-type-update');
Route::get('job-card-type-destroy','App\Http\Controllers\JobCardTypeController@destroy')->name('job-card-type-destroy');
Route::get('job-card-create','App\Http\Controllers\JobCardController@create')->name('job-card-create');




//Challan




Route::get('challan','App\Http\Controllers\ChallanController@index')->name('challan');
Route::get('challan-create','App\Http\Controllers\ChallanController@create')->name('challan-create');
Route::post('challan-store','App\Http\Controllers\ChallanController@store')->name('challan-store');
Route::get('challan-edit','App\Http\Controllers\ChallanController@edit')->name('challan-edit');
Route::post('challan-update','App\Http\Controllers\ChallanController@update')->name('challan-update');
Route::get('challan-destroy','App\Http\Controllers\ChallanController@destroy')->name('challan-destroy');






//User Operator

Route::get('user-operator','App\Http\Controllers\UserOperatorController@index')->name('user-operator');
Route::get('user-operator-create','App\Http\Controllers\UserOperatorController@create')->name('user-operator-create');
Route::post('user-operator-store','App\Http\Controllers\UserOperatorController@store')->name('user-operator-store');
Route::get('user-operator-edit','App\Http\Controllers\UserOperatorController@edit')->name('user-operator-edit');
Route::post('user-operator-update','App\Http\Controllers\UserOperatorController@update')->name('user-operator-update');
Route::get('user-operator-destroy','App\Http\Controllers\UserOperatorController@destroy')->name('user-operator-destroy');
Route::get('user-operator-status','App\Http\Controllers\UserOperatorController@status')->name('user-operator-status');
Route::get('user-operator-search','App\Http\Controllers\UserOperatorController@search')->name('user-operator-search');
//Invoice Master

Route::get('invoice-master','App\Http\Controllers\InvoiceMasterController@index')->name('invoice-master');
Route::get('invoice-master-create','App\Http\Controllers\InvoiceMasterController@create')->name('invoice-master-create');
Route::post('invoice-master-store','App\Http\Controllers\InvoiceMasterController@store')->name('invoice-master-store');
Route::get('invoice-master-edit','App\Http\Controllers\InvoiceMasterController@edit')->name('invoice-master-edit');
Route::post('invoice-master-update','App\Http\Controllers\InvoiceMasterController@update')->name('invoice-master-update');
Route::get('invoice-master-destroy','App\Http\Controllers\InvoiceMasterController@destroy')->name('invoice-master-destroy');
//Process Category


Route::get('process-category','App\Http\Controllers\ProcessCategoryController@index')->name('process-category');
Route::get('process-category-create','App\Http\Controllers\ProcessCategoryController@create')->name('process-category-create');
Route::post('process-category-store','App\Http\Controllers\ProcessCategoryController@store')->name('process-category-store');
Route::get('process-category-edit','App\Http\Controllers\ProcessCategoryController@edit')->name('process-category-edit');
Route::post('process-category-update','App\Http\Controllers\ProcessCategoryController@update')->name('process-category-update');
Route::get('process-category-destroy','App\Http\Controllers\ProcessCategoryController@destroy')->name('process-category-destroy');
//Product-Description


Route::get('product-description','App\Http\Controllers\ProductDescriptionController@index')->name('product-description');
Route::get('product-sub-description','App\Http\Controllers\ProductDescriptionController@indexSub')->name('product-sub-description');
Route::get('product-item-description','App\Http\Controllers\ProductDescriptionController@indexMenu')->name('product-item-description');

Route::get('product-description-create','App\Http\Controllers\ProductDescriptionController@create')->name('product-description-create');
Route::post('product-description-store','App\Http\Controllers\ProductDescriptionController@store')->name('product-description-store');

Route::post('product-description-sub-store','App\Http\Controllers\ProductDescriptionController@storeSubDescription')->name('product-description-sub-store');
Route::post('product-description-menu-store','App\Http\Controllers\ProductDescriptionController@storeDescription')->name('product-description-menu-store');


Route::get('product-description-edit','App\Http\Controllers\ProductDescriptionController@edit')->name('product-description-edit');
Route::post('product-description-update-parent','App\Http\Controllers\ProductDescriptionController@updateParent')->name('product-description-update-parent');
Route::post('product-description-update-sub','App\Http\Controllers\ProductDescriptionController@updateSub')->name('product-description-update-sub');
Route::post('product-description-update-menu','App\Http\Controllers\ProductDescriptionController@updateMenu')->name('product-description-update-menu');

Route::get('product-description-destroy','App\Http\Controllers\ProductDescriptionController@destroy')->name('product-description-destroy');
Route::get('product-description-destroySub','App\Http\Controllers\ProductDescriptionController@destroySub')->name('product-description-destroySub');
Route::get('product-description-destroyMenu','App\Http\Controllers\ProductDescriptionController@destroyMenu')->name('product-description-destroyMenu');
//Advance Printing Feature

Route::get('advance-feature','App\Http\Controllers\AdvanceFeatureMasterController@index')->name('advance-feature');
Route::get('advance-feature-create','App\Http\Controllers\AdvanceFeatureMasterController@create')->name('advance-feature-create');
Route::post('advance-feature-store','App\Http\Controllers\AdvanceFeatureMasterController@store')->name('advance-feature-store');
Route::get('advance-feature-edit','App\Http\Controllers\AdvanceFeatureMasterController@edit')->name('advance-feature-edit');
Route::post('advance-feature-update','App\Http\Controllers\AdvanceFeatureMasterController@update')->name('advance-feature-update');
Route::get('advance-feature-destroy','App\Http\Controllers\AdvanceFeatureMasterController@destroy')->name('advance-feature-destroy');
//Prnter Feature
Route::get('printer-feature','App\Http\Controllers\ProcessCategoryController@index')->name('printer-feature');
Route::get('printer-feature-create','App\Http\Controllers\ProcessCategoryController@create')->name('printer-feature-create');
Route::post('printer-feature-store','App\Http\Controllers\ProcessCategoryController@store')->name('printer-feature-store');
Route::get('printer-feature-edit','App\Http\Controllers\ProcessCategoryController@edit')->name('printer-feature-edit');
Route::post('printer-feature-update','App\Http\Controllers\ProcessCategoryController@update')->name('printer-feature-update');
Route::get('printer-feature-destroy','App\Http\Controllers\ProcessCategoryController@destroy')->name('printer-feature-destroy');
//Prnter Feature
Route::get('printer','App\Http\Controllers\ProcessCategoryController@index')->name('printer');
Route::get('printer-create','App\Http\Controllers\ProcessCategoryController@create')->name('printer-create');
Route::post('printer-store','App\Http\Controllers\ProcessCategoryController@store')->name('printer-store');
Route::get('printer-edit','App\Http\Controllers\ProcessCategoryController@edit')->name('printer-edit');
Route::post('printer-update','App\Http\Controllers\ProcessCategoryController@update')->name('printer-update');
Route::get('printer-destroy','App\Http\Controllers\ProcessCategoryController@destroy')->name('printer-destroy');

Route::get('get-advance-feature','App\Http\Controllers\AdvanceFeatureMasterController@getAdvanceFeature')->name('get-advance-feature');


//Permission Menu

Route::get('menu','App\Http\Controllers\PermissionMenuMasterController@index')->name('menu');
Route::get('menu-create','App\Http\Controllers\PermissionMenuMasterController@create')->name('menu-create');
Route::post('menu-store','App\Http\Controllers\PermissionMenuMasterController@store')->name('menu-store');
Route::get('menu-edit','App\Http\Controllers\PermissionMenuMasterController@edit')->name('menu-edit');
Route::post('menu-update','App\Http\Controllers\PermissionMenuMasterController@update')->name('menu-update');
Route::get('menu-destroy','App\Http\Controllers\PermissionMenuMasterController@destroy')->name('menu-destroy');
Route::get('menu-show','App\Http\Controllers\PermissionMenuMasterController@show')->name('menu-show');
Route::post('add-menu-under-parent','App\Http\Controllers\PermissionMenuMasterController@showStore')->name('add-menu-under-parent');
Route::get('get-parent-menu','App\Http\Controllers\PermissionMenuMasterController@parentWiseMenu')->name('get-parent-menu');
//Permission

Route::get('permission','App\Http\Controllers\PermissionMenuMappingController@index')->name('permission');
Route::get('permission-create','App\Http\Controllers\PermissionMenuMappingController@create')->name('permission-create');
Route::post('permission-store','App\Http\Controllers\PermissionMenuMappingController@store')->name('permission-store');
Route::get('permission-edit','App\Http\Controllers\PermissionMenuMappingController@edit')->name('permission-edit');
Route::post('permission-update','App\Http\Controllers\PermissionMenuMappingController@update')->name('permission-update');
Route::get('permission-destroy','App\Http\Controllers\PermissionMenuMappingController@destroy')->name('permission-destroy');
Route::get('permission-show','App\Http\Controllers\PermissionMenuMappingController@show')->name('permission-show');
//MappingRolePermisssion

Route::get('/mappingrolepermisssion/{id}', 'App\Http\Controllers\PermissionRoleMappingController@store');
Route::post('update-permission','App\Http\Controllers\PermissionRoleMappingController@update_permission')->name('update-permission');

Route::get('/profile','App\Http\Controllers\user@profile')->name('profile');
Route::get('/edit-profile','App\Http\Controllers\user@editProfile')->name('edit-profile');
Route::post('/update-profile','App\Http\Controllers\user@updateProfile')->name('update-profile');

//insert permission
Route::get('/permission-insert', function(){
    $role_id = 25;
    for ($permission_id = 4; $permission_id <= 220; $permission_id++) {
        \DB::table('permission_role_mappings')->insert([
            'role_id' => $role_id,
            'permission_id' => $permission_id,
        ]);
    }
    echo 'Records inserted successfully';

});




Route::get('/home','App\Http\Controllers\User@index');



