<?php

namespace App\Helpers;
use Session;
use Redirect;
use App\Models\Users;
use App\Models\QuotationMaster;
use App\Models\PermissionMenuMaster;
use App\Models\PermissionRoleMapping;
use App\Models\PermissionMenuMapping;
use App\Models\Roles;

class Helper {

    public static function helperfunction1(){
        return "GOOD! Helper is working";
    }

    public static function getPermission($permission = null){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = Users::find($user_id);
        if($permission != null){
            if ($user->hasPermission($permission)) {
                $givenPermission = 1;
            } else {
                $givenPermission = 0;
            }
        }
        return $givenPermission;
    }

    public static function getAvatar(){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        $user = Users::find($user_id);
        $avatar = $user->avatar;
        return $avatar;
    }

    public static function getAllPermissionOfRole(){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();

        
        $user = Users::find($user_id);
        dd($user->hasGetPermission());
       
    }

    public static function generateBreadcrumb($parentId, &$breadcrumb = []) {
        $parent = PermissionMenuMaster::find($parentId);

        if ($parent) {
            array_unshift($breadcrumb, $parent->title); // Add parent name to the beginning

            if ($parent->parent_id !== 0) {
                generateBreadcrumb($parent->parent_id, $breadcrumb); // Recursive call
            }
        }
    }

    public static function anyTable($tbl_name = null){
        $data = \DB::select("select * from $tbl_name");
        return $data ?? null;
    }

    public static function getAuthUser(){
        // $user_id = Session::get('userdata')['user_id'];
        $user_id = auth()->id();
        return $user_id ?? null;
    }

    public static function currentFincYear(){
        $year = date("m") >= 4 ? date("Y"). '-' . (date("Y")+1) : (date("Y") - 1). '-' . date("Y");
        return $year ?? null;
    }

    public static function getAllSalesPerson(){
        $salesPerson = \DB::select("select md.description as designationname,tu.username as username,tu.fullname as fullname,tu.id as userid from tbl_user tu left join mst_designation md on md.id=tu.designation where md.description='Sales'");
        return $salesPerson;
    }

    public static function getCompanies(){
        $company = \DB::table("tbl_company")->get();
        return $company;
    }

    public static function getCustomers(){
        $customer = \DB::table("tbl_customer_general")->select('id','customer_name')->get();
        return $customer;
    }

    public static function getCountry(){
        $countries = \DB::table("mst_country")->select('id','description')->get();
        return $countries;
    }

    public static function getcity(){
        $city = \DB::table("tbl_city")->select('id','description')->get();
        return $city;
    }

    public static function getAllCurrency(){
        $currency = \DB::table("tbl_currency")->select('id','description')->get();
        return $currency;
    }

    public static function getPaymentTermsValue(){
        $payment = \DB::table("terms_conditions")->whereIn('title_value_id',[1,19,31,44])->select('id','term_value')->get();
        return $payment;
    }

    public static function getDeliveryValue(){
        $delivery = \DB::table("terms_conditions")->whereIn('title_value_id',[7,17,24,37])->select('id','term_value')->get();
        return $delivery;
    }

    public static function getQuotations(){
        $quotations = QuotationMaster::get();
        return $quotations;
    }

    public static function getProductCategory(){
        $category = \DB::table("tbl_product_category")->select('id','product_category','hs_code')->get();
        return $category;
    }

    public static function getProductSize(){
        $productSize = \DB::table("product_size_masters")->select('id','product_size')->get();
        return $productSize;
    }

    public static function getUnit(){
        $unit = \DB::table("mst_unit")->select('id','description')->get();
        return $unit;
    }

    public static function getTax(){
        $tax = \DB::table("tbl_tax")->select('id','tax_name')->get();
        return $tax;
    }

    public static function jobWorkOrder($id = null){
        $data = \DB::table('tbl_salesworkorder')->where('job_card_no',$id)->get();
        return $data ?? null;
    }

    public static function ShowBreak($content = null){
        nl2br(e($content), false);
    }

    public static function numberToWord($num = ''){
        $num    = ( string ) ( ( int ) $num );
        if( ( int ) ( $num ) && ctype_digit( $num ) ){
            $words  = array( );
            $num    = str_replace( array( ',' , ' ' ) , '' , trim( $num ) );
            $list1  = array('','one','two','three','four','five','six','seven',
                    'eight','nine','ten','eleven','twelve','thirteen','fourteen',
                    'fifteen','sixteen','seventeen','eighteen','nineteen');

            $list2  = array('','ten','twenty','thirty','forty','fifty','sixty',
                    'seventy','eighty','ninety','hundred');

            $list3  = array('','thousand','million','billion','trillion',
                    'quadrillion','quintillion','sextillion','septillion',
                    'octillion','nonillion','decillion','undecillion',
                    'duodecillion','tredecillion','quattuordecillion',
                    'quindecillion','sexdecillion','septendecillion',
                    'octodecillion','novemdecillion','vigintillion');

            $num_length = strlen( $num );
            $levels = ( int ) ( ( $num_length + 2 ) / 3 );
            $max_length = $levels * 3;
            $num    = substr( '00'.$num , -$max_length );
            $num_levels = str_split( $num , 3 );

            foreach( $num_levels as $num_part ){
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';
                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 ){
                    $commas = $commas - 1;
                }
                $words  = implode( ', ' , $words );
                $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
                if( $commas ){
                    $words  = str_replace( ',' , ' and' , $words );
                }

                return $words;
            }
            else if( ! ( ( int ) $num ) ){
                return 'Zero';
            }

        return '';
    }

    public static function currencySymbol($id = ''){
        if($id == 2 || $id == 2){ //EUR
            $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&euro;</span>';
            $word = 'Euro';
        }elseif($id == 5){ //USD
            $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#36;</span>';
            $word = 'Dollars';
        }elseif($id == 103){ //INR
            $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
            $word = 'Rupees';
        }else{
            $symbol = '<span style="font-family: DejaVu Sans; sans-serif;">&#8377;</span>';
            $word = 'Dollars';
        }

        return $symbol;

    }

    public static function formatNumber($number) {
        return preg_replace("/(\d+?)(?=(\d\d)+(\d)(?!\d))(\.\d+)?/i", "$1,", $number);
    }
}




?>
