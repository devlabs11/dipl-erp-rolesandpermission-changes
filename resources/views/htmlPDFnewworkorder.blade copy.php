@php

    $tbl_salesworkorder = DB::select("select * from tbl_salesworkorder where id='" . $new_work_order . "'");

$id = '0';
$order_no = '';
$order_name = '';
$customer_name = '';
$job_card_no = '';
$po_quantity = '';
$po_quantity_unit = '';
$po_quantity_unit_name = '';
$job_card_no = '';
$job_card_title = '';
$customer_name_description = '';
$quantity_unit_name = '';
$quantity_unit = '';
$quantity = '';
$sales_order_date = '';
$target_delivery_date = '';
$job_instruction = '';
$product_category_name = '';
$product_category = '';
$width = '';
$width_unit = '';
$width_unit_name = '';
$height = '';
$height_unit = '';
$height_unit_name = '';
$size = '';
$part_ply = '';
$special_instructions = '';

if (is_array($tbl_salesworkorder)) {
    foreach ($tbl_salesworkorder as $tbl_salesworkorder) {
        $id = $tbl_salesworkorder->id;
        $order_no = $tbl_salesworkorder->order_no;
        $order_name = $tbl_salesworkorder->order_name;
        $customer_name = $tbl_salesworkorder->customer_name;
        $sales_order_date = $tbl_salesworkorder->sales_order_date;
        $target_delivery_date = $tbl_salesworkorder->target_delivery_date;

        $tbl_customer_general = DB::select("select * from tbl_customer_general where id='$customer_name'");

        $customer_name_description = '';
        foreach ($tbl_customer_general as $tbl_customer_general) {
            $customer_name_description = $tbl_customer_general->customer_name;
        }

        $job_card_id = $tbl_salesworkorder->job_card_no;
        $po_quantity = $tbl_salesworkorder->po_quantity;
        $po_quantity_unit = $tbl_salesworkorder->po_quantity_unit;
        $po_quantity_unit_name = '';

        $mst_unit = DB::select("select * from mst_unit where id='$po_quantity_unit'");

        foreach ($mst_unit as $mst_unit) {
            $po_quantity_unit_name = $mst_unit->description;
        }

        $quantity = $tbl_salesworkorder->quantity;

        $rettxt = '';

        if ($quantity != '') {
            $ones = [
                0 => 'ZERO',
                1 => 'ONE',
                2 => 'TWO',
                3 => 'THREE',
                4 => 'FOUR',
                5 => 'FIVE',
                6 => 'SIX',
                7 => 'SEVEN',
                8 => 'EIGHT',
                9 => 'NINE',
                10 => 'TEN',
                11 => 'ELEVEN',
                12 => 'TWELVE',
                13 => 'THIRTEEN',
                14 => 'FOURTEEN',
                15 => 'FIFTEEN',
                16 => 'SIXTEEN',
                17 => 'SEVENTEEN',
                18 => 'EIGHTEEN',
                19 => 'NINETEEN',
                '014' => 'FOURTEEN',
            ];
            $tens = [
                0 => 'ZERO',
                1 => 'TEN',
                2 => 'TWENTY',
                3 => 'THIRTY',
                4 => 'FORTY',
                5 => 'FIFTY',
                6 => 'SIXTY',
                7 => 'SEVENTY',
                8 => 'EIGHTY',
                9 => 'NINETY',
            ];
            $hundreds = ['HUNDRED', 'THOUSAND', 'MILLION', 'BILLION', 'TRILLION', 'QUARDRILLION']; /*limit t quadrillion */

            $num = number_format($quantity, 2, '.', ',');
            $num_arr = explode('.', $num);
            $wholenum = $num_arr[0];
            $decnum = $num_arr[1];
            $whole_arr = array_reverse(explode(',', $wholenum));
            krsort($whole_arr, 1);
            $rettxt = '';
        }

        $quantity_unit = $tbl_salesworkorder->quantity_unit;

        $quantity_unit_name = '';

        $mst_unit = DB::select("select * from mst_unit where id='$quantity_unit'");

        foreach ($mst_unit as $mst_unit) {
            $quantity_unit_name = $mst_unit->description;
        }

        $job_instruction = $tbl_salesworkorder->job_instruction;

        $tbl_job_cart = DB::select("select * from tbl_job_cart where id=$job_card_id");

        $job_card_no = '';
        $job_card_title = '';
        $product_type = $product_type_name = "";
        foreach ($tbl_job_cart as $tbl_job_cart) {
            $job_card_no = $tbl_job_cart->job_card_no;
            $job_card_title = $tbl_job_cart->job_card_title;
            $product_category = $tbl_job_cart->product_category;
            $product_type = $tbl_job_cart->product_type;
            $product_category_name = '';

            $tbl_product_category = DB::select("select * from tbl_product_category where id='$product_category'");
            foreach ($tbl_product_category as $tbl_product_category) {
                $product_category_name = $tbl_product_category->product_category;
            }

            $tbl_product_type = DB::select("select * from tbl_product where id='$product_type'");
            foreach ($tbl_product_type as $tbl_product_type) {
                $product_type_name = strtolower($tbl_product_type->product_type) ?? '';
            }

            $width = $tbl_job_cart->width;
            $width_unit = $tbl_job_cart->width_unit;
            $width_unit_name = '';

            $mst_unit = DB::select("select * from mst_unit where id='$width_unit'");

            foreach ($mst_unit as $mst_unit) {
                $width_unit_name = $mst_unit->description;
            }

            $height = $tbl_job_cart->height;
            $height_unit = $tbl_job_cart->height_unit;

            $height_unit_name = '';

            $mst_unit = DB::select("select * from mst_unit where id='$height_unit'");

            foreach ($mst_unit as $mst_unit) {
                $height_unit_name = $mst_unit->description;
            }

            $size = $width . ' ' . $width_unit_name . ' * ' . $height . ' ' . $height_unit_name;

            $part_ply = $tbl_job_cart->part_ply;
            $special_instructions = $tbl_job_cart->special_instructions;
        }
    }
}
function numberToWord($num = '')
{
    $num = (string) ((int) $num);

    if ((int) $num && ctype_digit($num)) {
        $words = [];

        $num = str_replace([',', ' '], '', trim($num));

        $list1 = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];

        $list2 = ['', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred'];

        $list3 = ['', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion', 'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion', 'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'];

        $num_length = strlen($num);
        $levels = (int) (($num_length + 2) / 3);
        $max_length = $levels * 3;
        $num = substr('00' . $num, -$max_length);
        $num_levels = str_split($num, 3);

        foreach ($num_levels as $num_part) {
            $levels--;
            $hundreds = (int) ($num_part / 100);
            $hundreds = $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ($hundreds == 1 ? '' : 's') . ' ' : '';
            $tens = (int) ($num_part % 100);
            $singles = '';

            if ($tens < 20) {
                $tens = $tens ? ' ' . $list1[$tens] . ' ' : '';
            } else {
                $tens = (int) ($tens / 10);
                $tens = ' ' . $list2[$tens] . ' ';
                $singles = (int) ($num_part % 10);
                $singles = ' ' . $list1[$singles] . ' ';
            }
            $words[] = $hundreds . $tens . $singles . ($levels && (int) $num_part ? ' ' . $list3[$levels] . ' ' : '');
        }
        $commas = count($words);
        if ($commas > 1) {
            $commas = $commas - 1;
        }

        $words = implode(', ', $words);

        $words = trim(str_replace(' ,', ',', ucwords($words)), ', ');
        if ($commas) {
            $words = str_replace(',', ' and', $words);
        }

        return $words;
    } elseif (!((int) $num)) {
        return 'Zero';
    }
    return '';
}
$word = strtoupper(numberToWord($quantity));
@endphp
@if ($product_category == 3 || $product_category == 7)
    {{-- COMPUTER STATIONERY and CONTINUOUS STATIONARY --}}
    {{-- <div>COMPUTER STATIONERY and CONTINUOUS STATIONARY</div> --}}
    {{-- {{dd('Deepali1') }} --}}
    @include('pdf.sales-order.cs')
@elseif ($product_category == 1 || $product_category == 6)
    {{-- <div>Thermal roll and THERMAL</div> --}}
    {{-- {{dd('Deepali2') }} --}}
    @include('pdf.sales-order.thermal')   {{-- Thermal roll and THERMAL --}}
@elseif ($product_category == 16)
    {{-- <div>Cheque</div> --}}
     {{-- {{dd('Deepali2') }} --}}
     @php
         $image = asset('assets/uploadimage/perforation/Perforation_Details_Cheque_Image.png');
        if ($product_type_name == strtolower("Cheque Book"))
        {
            $image = asset('assets/uploadimage/perforation/perforation_Details_ChequeBook.png');
        }
        else if ($product_type_name == strtolower("Dividend Warrant"))
        {
            $image = asset('assets/uploadimage/perforation/Perforation_Details_DividentWarrent.png');
        }
        else if ($product_type_name == strtolower("PAYMENT ADVICE"))
        {
            $image = asset('assets/uploadimage/perforation/Perforation_Details_PaymentAdvice.png');
        }
        else if ($product_type_name == strtolower("Cheque Continuous Stationary"))
        {
            $image = asset('assets/uploadimage/perforation/Perforation_Details_ContinuousCheckStationary.png');
        }
        else
        {
            $jobCard_Width = $width;
            if ($jobCard_Width == "9")
            {
                $image = asset('assets/uploadimage/perforation/Perforation_Details_ContinuousCheckStationary.png');
            }
            else if ($jobCard_Width == "10")
            {
                $image = asset('assets/uploadimage/perforation/Perforation_Details_NepalChequeWithCounterfoil.png');
            }
            else if ($jobCard_Width == "8.47" || $jobCard_Width == "8.5")
            {
                $image = asset('assets/uploadimage/perforation/Perforation_Details_NepalContinuousStationary.png');
            }
            else
            {
                $image = asset('assets/uploadimage/perforation/Perforation_Details_Cheque_Image.png');
            }
        }
    @endphp
    @include('pdf.sales-order.cheque')
@elseif ($product_category == 4)
{{-- <div>ENTERTAINMENT TICKET</div> --}}
{{-- {{dd('Deepali3') }} --}}
    @include('pdf.sales-order.entertainment') {{-- ENTERTAINMENT TICKET --}}
@else
    @include('htmlPDFnewworkorder_old')
@endif
