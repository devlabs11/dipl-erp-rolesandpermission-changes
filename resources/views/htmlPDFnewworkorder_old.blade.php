<!DOCTYPE html>
<html>
<head>
<style>
            /**
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
            /* @page {
                margin: 0cm 0cm;
            } */

            /** Define now the real margins of every page in the PDF **/
             body {
                /* margin-top: 3cm; */
                /* margin-left: 2cm; */
                /* margin-right: 2cm; */
                /* margin-bottom: 2cm; */
            }

            /** Define the header rules **/
            /* header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
				margin-left:auto;
				margin-right:auto;
            } */

            /** Define the footer rules **/
            /* footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
            } */
            table {
            width: 100%;
        }
        td {
            /* word-wrap: break-word; */
            word-wrap: break-word;
            width: 50%;
            /* Additional styles as needed */
        }
        table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        border: 1px solid black;
        padding: 5px;
        vertical-align: top;
        word-wrap: break-word;
    }

    .multiline-cell {
        height: 60px; /* Adjust the height as needed */
        overflow: hidden;
    }
        </style>


</head>
<body style="font-family:'Helvetica';font-size: 11.25pt;">
 <!-- Define header and footer blocks before your content -->
 		<!-- <header>

		</header>

        <footer>

        </footer> -->
		<main>
			<?php


			$tbl_salesworkorder = DB::select("select * from tbl_salesworkorder where id='".$new_work_order."'");

			$id="0";
			$order_no="";
			$order_name="";
			$customer_name="";
			$job_card_no="";
			$po_quantity="";
			$po_quantity_unit="";
			$po_quantity_unit_name="";
			$job_card_no="";
			$job_card_title="";
			$customer_name_description="";
			$quantity_unit_name="";
			$quantity_unit="";
			$quantity="";
			$sales_order_date="";
			$target_delivery_date="";
			$job_instruction="";
			$product_category_name="";
			$product_category="";
			$width="";
			$width_unit="";
			$width_unit_name="";
			$height="";
			$height_unit="";
			$height_unit_name="";
			$size="";
			$part_ply="";
			$special_instructions="";


			if(is_array($tbl_salesworkorder))
			{
				foreach($tbl_salesworkorder as $tbl_salesworkorder)
				{
					$id=$tbl_salesworkorder->id;
					$order_no=$tbl_salesworkorder->order_no;
					$order_name=$tbl_salesworkorder->order_name;
					$customer_name=$tbl_salesworkorder->customer_name;
					$sales_order_date=$tbl_salesworkorder->sales_order_date;
					$target_delivery_date=$tbl_salesworkorder->target_delivery_date;

					$tbl_customer_general = DB::select("select * from tbl_customer_general where id='$customer_name'");

					$customer_name_description="";
					foreach($tbl_customer_general as $tbl_customer_general){
						$customer_name_description=$tbl_customer_general->customer_name;
					}


					$job_card_id=$tbl_salesworkorder->job_card_no;
					$po_quantity=$tbl_salesworkorder->po_quantity;
					$po_quantity_unit=$tbl_salesworkorder->po_quantity_unit;
					$po_quantity_unit_name="";

					$mst_unit = DB::select("select * from mst_unit where id='$po_quantity_unit'");

					foreach($mst_unit as $mst_unit){
						$po_quantity_unit_name=$mst_unit->description;
					}

					$quantity=$tbl_salesworkorder->quantity;

					$rettxt = "";

					if($quantity!="")
					{
						$ones = array(
							0 =>"ZERO",
							1 => "ONE",
							2 => "TWO",
							3 => "THREE",
							4 => "FOUR",
							5 => "FIVE",
							6 => "SIX",
							7 => "SEVEN",
							8 => "EIGHT",
							9 => "NINE",
							10 => "TEN",
							11 => "ELEVEN",
							12 => "TWELVE",
							13 => "THIRTEEN",
							14 => "FOURTEEN",
							15 => "FIFTEEN",
							16 => "SIXTEEN",
							17 => "SEVENTEEN",
							18 => "EIGHTEEN",
							19 => "NINETEEN",
							"014" => "FOURTEEN"
							);
							$tens = array(
							0 => "ZERO",
							1 => "TEN",
							2 => "TWENTY",
							3 => "THIRTY",
							4 => "FORTY",
							5 => "FIFTY",
							6 => "SIXTY",
							7 => "SEVENTY",
							8 => "EIGHTY",
							9 => "NINETY"
							);
							$hundreds = array(
							"HUNDRED",
							"THOUSAND",
							"MILLION",
							"BILLION",
							"TRILLION",
							"QUARDRILLION"
							); /*limit t quadrillion */

						$num = number_format($quantity,2,".",",");
						$num_arr = explode(".",$num);
						$wholenum = $num_arr[0];
						$decnum = $num_arr[1];
						$whole_arr = array_reverse(explode(",",$wholenum));
						krsort($whole_arr,1);
						$rettxt = "";


						// foreach($whole_arr as $key => $i){
						// 	while(substr($i,0,1)=="0")
						// 			$i=substr($i,1,5);

							// if($i < 20){

							// $rettxt .= $ones[$i];
							// }elseif($i < 100){
							// if(substr($i,0,1)!="0")  $rettxt .= $tens[substr($i,0,1)];
							// if(substr($i,1,1)!="0") $rettxt .= " ".$ones[substr($i,1,1)];
							// }else{
							// if(substr($i,0,1)!="0") $rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0];
							// if(substr($i,1,1)!="0")$rettxt .= " ".$tens[substr($i,1,1)];
							// if(substr($i,2,1)!="0")$rettxt .= " ".$ones[substr($i,2,1)];
							// }
							// if($key > 0){
							// $rettxt .= " ".$hundreds[$key]." ";
							// }
							// }
						// 	if($decnum > 0){
						// 	$rettxt .= " and ";
						// 	if($decnum < 20){
						// 	$rettxt .= $ones[$decnum];
						// 	}elseif($decnum < 100){
						// 	$rettxt .= $tens[substr($decnum,0,1)];
						// 	$rettxt .= " ".$ones[substr($decnum,1,1)];
						// 	}
						// }
					}


					$quantity_unit=$tbl_salesworkorder->quantity_unit;

					$quantity_unit_name="";

					$mst_unit = DB::select("select * from mst_unit where id='$quantity_unit'");

					foreach($mst_unit as $mst_unit){
						$quantity_unit_name=$mst_unit->description;
					}

					$job_instruction=$tbl_salesworkorder->job_instruction;



					$tbl_job_cart = DB::select("select * from tbl_job_cart where id=$job_card_id");

					$job_card_no="";
					$job_card_title="";

					foreach($tbl_job_cart as $tbl_job_cart)
					{
						$job_card_no=$tbl_job_cart->job_card_no;
						$job_card_title=$tbl_job_cart->job_card_title;
						$product_category=$tbl_job_cart->product_category;

						$product_category_name="";

						$tbl_product_category = DB::select("select * from tbl_product_category where id='$product_category'");
						//var_dump($tbl_product_category);die;
						foreach($tbl_product_category as $tbl_product_category){
							$product_category_name=$tbl_product_category->product_category;
						}



						$width=$tbl_job_cart->width;
						$width_unit=$tbl_job_cart->width_unit;

						$width_unit_name="";

						$mst_unit = DB::select("select * from mst_unit where id='$width_unit'");

						foreach($mst_unit as $mst_unit){
							$width_unit=$mst_unit->description;
						}

						$height=$tbl_job_cart->height;
						$height_unit=$tbl_job_cart->height_unit;

						$height_unit_name="";

						$mst_unit = DB::select("select * from mst_unit where id='$height_unit'");

						foreach($mst_unit as $mst_unit){
							$height_unit_name=$mst_unit->description;
						}

						$size=$width." ".$width_unit_name." * ".$height." ".$height_unit_name;

						$part_ply=$tbl_job_cart->part_ply;
						$special_instructions=$tbl_job_cart->special_instructions;


					}

				}
			}
			function numberToWord($num = '')
    {
        $num    = ( string ) ( ( int ) $num );

        if( ( int ) ( $num ) && ctype_digit( $num ) )
        {
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

            foreach( $num_levels as $num_part )
            {
                $levels--;
                $hundreds   = ( int ) ( $num_part / 100 );
                $hundreds   = ( $hundreds ? ' ' . $list1[$hundreds] . ' Hundred' . ( $hundreds == 1 ? '' : 's' ) . ' ' : '' );
                $tens       = ( int ) ( $num_part % 100 );
                $singles    = '';

                if( $tens < 20 ) { $tens = ( $tens ? ' ' . $list1[$tens] . ' ' : '' ); } else { $tens = ( int ) ( $tens / 10 ); $tens = ' ' . $list2[$tens] . ' '; $singles = ( int ) ( $num_part % 10 ); $singles = ' ' . $list1[$singles] . ' '; } $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_part ) ) ? ' ' . $list3[$levels] . ' ' : '' ); } $commas = count( $words ); if( $commas > 1 )
            {
                $commas = $commas - 1;
            }

            $words  = implode( ', ' , $words );

            $words  = trim( str_replace( ' ,' , ',' , ucwords( $words ) )  , ', ' );
            if( $commas )
            {
                $words  = str_replace( ',' , ' and' , $words );
            }

            return $words;
        }
        else if( ! ( ( int ) $num ) )
        {
            return 'Zero';
        }
        return '';
    }
			$word = strtoupper(numberToWord($quantity));
			?>
			{{-- {{ $quantity }}
			{{ $word }} --}}
			<!-- <div style="text-align:center;display:none">
			<img style="display: block; margin-left: auto;margin-right: auto;width: 70%;"  alt="Logo" src="{{ URL::asset('assets/media/quotation-header-footer-images/DIPL_letter_head.png') }}" />
			</div> -->
			<h3 style="font-weight:bold;text-align:center">Sales Order</h3>

			<p style="font-weight:bold;text-align:left;">
			Devharsh Infotech Pvt Ltd - Bhiwandi Factory
			</p>

			<p style="text-align:left;">
			<b>Customer Details : </b> {{$customer_name_description}}
			</p>

			<p style="text-align:left;">
			<b>Sales Order No  : </b> {{$order_no}}
			</p>

			<p style="text-align:left;">
			<b>SO Date : </b> {{$sales_order_date}}
			</p>

			<p style="text-align:left;">
			<b>Shipment Date  : </b> {{$target_delivery_date}}
			</p>



			<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					JC No.
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Prod. Category
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Item
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Size
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Ply
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Quantity
					</th>
				</tr>


				<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">

					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $job_card_no; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $product_category_name; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $job_card_title; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $size; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $part_ply; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $quantity." ".$quantity_unit_name; ?></td>

				</tr>


				<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">

					<td colspan="2" style="text-align:right;font-weight:bold;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo "Quantity In Words"; ?></td>
					<td colspan="4" style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $word." ".$quantity_unit_name; ?></td>


				</tr>

			</table>


			<p style="text-align:left;">
			<b>JC Instructions : </b> {{$special_instructions}}
			</p>

			<p style="text-align:left;">
			<b>SO Instructions  : </b> {{$job_instruction}}
			</p>


			<h4><u>Print Specification</u></h4>
            <div style="overflow-x: auto;">
			<table id='maintable' style='width:100% !important; border: 1px solid black; border-collapse: collapse; padding-top: 15px; table-layout: fixed;'>
            {{-- style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'> --}}
                <tr>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Ply</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Inch</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Size</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Make</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Paper Shade</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Front Colors</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Back Colors</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Copy Mark</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Remark</th>
				</tr>

			<?php
				$tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='".$job_card_id."'");
                $count=1;
				foreach($tbl_job_card_paper as $tbl_job_card_paper)
				{
					$paper_id=$tbl_job_card_paper->id;
					$paper_thick=$tbl_job_card_paper->paper_thick;
					$paper_make=$tbl_job_card_paper->paper_make;

					$mst_paper_make   = DB::select("select * from mst_paper_make where id='".$paper_make."'");

					$paper_make_name="";
					foreach($mst_paper_make as $mst_paper_make)
					{
						$paper_make_name=$mst_paper_make->description;
					}

					$color_shade=$tbl_job_card_paper->color_shade;

					$mst_paper_color_shade   = DB::select("select * from mst_paper_color_shade where id='".$color_shade."'");

					$mst_color_shade_name="";
					foreach($mst_paper_color_shade as $mst_paper_color_shade)
					{
						$mst_color_shade_name=$mst_paper_color_shade->description;
					}


					$front_side_color=$tbl_job_card_paper->front_side_color;

					$front_side_color_arr = explode(",",$front_side_color);

					$front_side_color_name="";
					if(sizeof($front_side_color_arr)>0)
					{
						foreach ($front_side_color_arr as $key => $title) {


							$mst_color_master   = DB::select("select * from mst_color_master where id='".$title."'");

							//$front_side_color_name="";
							foreach($mst_color_master as $mst_color_master)
							{
								$front_side_color_name.=$mst_color_master->description.",";
							}
						 }

					}
					$front_side_color_name=trim($front_side_color_name,",");

					/*$mst_color_master   = DB::select("select * from mst_color_master where id='".$front_side_color."'");

					$front_side_color_name="";
					foreach($mst_color_master as $mst_color_master)
					{
						$front_side_color_name=$mst_color_master->description;
					}*/


					$back_side_color=$tbl_job_card_paper->back_side_color;

					$mst_color_master   = DB::select("select * from mst_color_master where id='".$back_side_color."'");

					$back_side_color_arr = explode(",",$back_side_color);
																					//var_dump($back_side_color_arr);die;

					$back_side_color_name="";
					if(sizeof($back_side_color_arr)>0)
					{
						foreach ($back_side_color_arr as $key => $title) {

							//echo $title;
							$mst_color_master = DB::select("select * from mst_color_master where id='".$title."'");

							//$front_side_color_name="";
							foreach($mst_color_master as $mst_color_master)
							{
								$back_side_color_name.=$mst_color_master->description.",";

								//echo $back_side_color_name;
							}
							}


					}

					$back_side_color_name=trim($back_side_color_name,",");

					/*$back_side_color_name="";
					foreach($mst_color_master as $mst_color_master)
					{
						$back_side_color_name=$mst_color_master->description;
					}*/


					$front_side_coating=$tbl_job_card_paper->front_side_coating;


					// $tbl_fron_side_color_coating   = DB::select("select * from tbl_fron_side_color_coating where id='".$front_side_coating."'");

					// $front_side_coating_name="";
					// foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating)
					// {
					// 	$front_side_coating_name=$tbl_fron_side_color_coating->description;
					// }


					$back_side_coating=$tbl_job_card_paper->back_side_coating;

					// $tbl_back_side_color_coating   = DB::select("select * from tbl_back_side_color_coating where id='".$back_side_coating."'");

					// $back_side_coating_name="";
					// foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating)
					// {
					// 	$back_side_coating_name=$tbl_back_side_color_coating->description;
					// }


					$tbl_fron_side_color_coating   = DB::select("select * from tbl_coating_thermal where id='".$front_side_coating."'");

					$front_side_coating_name="";
					foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating)
					{
						$front_side_coating_name=$tbl_fron_side_color_coating->description;
					}


					$back_side_coating=$tbl_job_card_paper->back_side_coating;

					$tbl_back_side_color_coating   = DB::select("select * from tbl_coating_thermal where id='".$back_side_coating."'");

					$back_side_coating_name="";
					foreach($tbl_back_side_color_coating as $tbl_back_side_color_coating)
					{
						$back_side_coating_name=$tbl_back_side_color_coating->description;
					}

					$copy_mark=$tbl_job_card_paper->copy_mark;
					$remark=$tbl_job_card_paper->remark;

					if($paper_thick=="")
					{
						$paper_thick="";
					}

					if($paper_make_name=="")
					{
						$paper_make_name="";
					}

					if($front_side_color_name=="")
					{
						$front_side_color_name="";
					}

					if($back_side_color_name=="")
					{
						$back_side_color_name="";
					}

					if($copy_mark=="")
					{
						$copy_mark="";
					}


					?>

					<tr>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $count++; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $size; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $paper_thick." ".'Gsm'; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $paper_make_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $mst_color_shade_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $front_side_color_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $back_side_color_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $copy_mark; ?></td>
						<td class="multiline-cell" style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $remark; ?></td>
					</tr>
					<?php
				}
			?>
			</table>
            </div>

			<h4><u>Pre Press : Colour Details</u></h4>

			<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Color</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Film Type</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Ply</th>
				</tr>
				<?php

				$tbl_job_card_pre_press_count=0;
				$tbl_job_card_pre_press_count_data = DB::select("select count(*) as totalcount from tbl_job_card_pre_press where job_card_id='".$job_card_id."'");
				foreach($tbl_job_card_pre_press_count_data as $tbl_job_card_pre_press_count_data)
				{
					//var_dump($tbl_plants_count);die;
					$tbl_job_card_pre_press_count=$tbl_job_card_pre_press_count_data->totalcount;
				}

				$pre_press_id="";
				$length="";
				$width="";
				$thickness="";
				$pre_press_length_unit="";
				$pre_press_width_unit="";
				$pre_press_thickness_unit="";

				if($tbl_job_card_pre_press_count!=0)
				{



					$tbl_job_card_pre_press = DB::select("select * from tbl_job_card_pre_press where job_card_id='".$job_card_id."'");

					if(is_array($tbl_job_card_pre_press))
					{
						foreach($tbl_job_card_pre_press as $tbl_job_card_pre_press)
						{

							$pre_press_id=$tbl_job_card_pre_press->id;
							$length=$tbl_job_card_pre_press->length;
							$width=$tbl_job_card_pre_press->width;
							$thickness=$tbl_job_card_pre_press->thickness;
							$pre_press_length_unit=$tbl_job_card_pre_press->length_unit;

							if($pre_press_length_unit!="")
							{
								$mst_unit = DB::select("select * from mst_unit where id=$pre_press_length_unit");

								foreach($mst_unit as $mst_unit)
								{
									$pre_press_length_unit=$mst_unit->description;
								}
							}


							$pre_press_width_unit=$tbl_job_card_pre_press->width_unit;

							if($pre_press_width_unit!="")
							{
								$mst_unit = DB::select("select * from mst_unit where id=$pre_press_width_unit");

								foreach($mst_unit as $mst_unit)
								{
									$pre_press_width_unit=$mst_unit->description;
								}
							}

							$pre_press_thickness_unit=$tbl_job_card_pre_press->thickness_unit;

							if($pre_press_thickness_unit!="")
							{
								$mst_unit = DB::select("select * from mst_unit where id=$pre_press_thickness_unit");

								foreach($mst_unit as $mst_unit)
								{
									$pre_press_thickness_unit=$mst_unit->description;
								}
							}
						}
					}

					//echo $pre_press_id;die;
					$tbl_job_card_pre_press_color = DB::select("select * from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_id."'");

					//var_dump($tbl_job_card_paper);die;

					foreach($tbl_job_card_pre_press_color as $tbl_job_card_pre_press_color)
					{


						//echo $press_id;die;
						$color=$tbl_job_card_pre_press_color->color;
						$color_arr = explode(",",$color);
						$film_type=$tbl_job_card_pre_press_color->film_type;
						$ply=$tbl_job_card_pre_press_color->ply;
						$plate_type=$tbl_job_card_pre_press_color->plate_type;

						$color_name="";

						if(sizeof($color_arr)>0)
						{
							foreach ($color_arr as $key => $title) {


								$mst_color_master   = DB::select("select * from mst_color_master where id='".$title."'");

								//$front_side_color_name="";
								foreach($mst_color_master as $mst_color_master)
								{
									$color_name.=$mst_color_master->description.",";
								}
							}

						}

						$color_name=trim($color_name,",");

						// if($color!="")
						// {
						// 	$mst_color_master = DB::select("select * from mst_color_master where id=$color");
						// 	foreach($mst_color_master as $mst_color_master)
						// 	{
						// 		$color_name=$mst_color_master->description;
						// 	}
						// }

						$film_type_name="";

						if($film_type!="")
						{
							$tbl_film_type = DB::select("select * from tbl_film_type where id=$film_type");
							foreach($tbl_film_type as $tbl_film_type)
							{
								$film_type_name=$tbl_film_type->description;
							}
						}

						$plate_type_name="";

						if($plate_type!="")
						{
							$tbl_plate_type = DB::select("select * from tbl_plate_type where id=$plate_type");
							foreach($tbl_plate_type as $tbl_plate_type)
							{
								$plate_type_name=$tbl_plate_type->description;
							}
						}
						?>
						<tr>
							<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $color_name; ?></td>
							<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $film_type_name; ?></td>
							<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $ply; ?></td>
						</tr>
					<?php
					}
				}
				else
				{
					?>
					<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
						<td colspan="3"  style="text-align:center;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >No data available</td>
					</tr>
					<?php
				}
				?>
			</table>

			<h4><u>Plate Details</u></h4>


			<p style="text-align:left;">
			<b>Length : </b> <?php echo $length." ".$pre_press_length_unit; ?>
			</p>

			<p style="text-align:left;">
			<b>Width : </b> <?php echo $width." ".$pre_press_width_unit; ?>
			</p>

			<p style="text-align:left;">
			<b>Thickness : </b> <?php echo $thickness." ".$pre_press_thickness_unit; ?>
			</p>

			<h4><u>Print Up Design</u></h4>

			<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Ply</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Print Size</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Print Qty</th>
				</tr>
				<tr>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $part_ply; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $size; ?></td>
					<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $quantity." ".$quantity_unit_name; ?></td>
				</tr>
			</table>


			<?php

//echo $jobcard_id;die;
$job_card_post_press_packaging_details_count=0;
$tbl_job_card_post_press_packaging_details_count = DB::select("select count(*) as totalcount from tbl_job_card_post_press_packaging_details where job_card_id='".$job_card_id."'");
foreach($tbl_job_card_post_press_packaging_details_count as $tbl_job_card_post_press_packaging_details_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_post_press_packaging_details_count=$tbl_job_card_post_press_packaging_details_count->totalcount;
}

?>


<h4><u>Packaging Details</u></h4>
<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >PCs</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Items</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Length</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Width</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >height</th>
		<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >Units</th>
	</tr>
<?php

//echo $job_card_paper_count;die;
if($job_card_post_press_packaging_details_count!=0)
{
?>




	<?php
	$tbl_job_card_post_press_packaging_details = DB::select("select * from tbl_job_card_post_press_packaging_details where job_card_id='".$job_card_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_post_press_packaging_details as $tbl_job_card_post_press_packaging_details)
	{

		$pcs=$tbl_job_card_post_press_packaging_details->pcs;
		$item=$tbl_job_card_post_press_packaging_details->item;

		//echo $item;die;
		$length=$tbl_job_card_post_press_packaging_details->length;
		$width=$tbl_job_card_post_press_packaging_details->width;
		$height=$tbl_job_card_post_press_packaging_details->height;
		$units=$tbl_job_card_post_press_packaging_details->units;

		$item_name="";
		if($item!="")
		{

			$tbl_items   = DB::select("select * from tbl_items where id='".$item."'");

			$item_name="";
			foreach($tbl_items as $tbl_items)
			{
				$item_name=$tbl_items->description;
			}
		}

		$unit_name="";

		if($units!="")
		{
			$mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

			$unit_name="";
			foreach($mst_unit as $mst_unit)
			{
				$unit_name=$mst_unit->description;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $pcs; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $item_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $length; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $width; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $height; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $unit_name; ?></td>

	</tr>
	<?php
	}
	?>


<?php
}
else
{
	?>
	<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
		<td colspan="6"  style="text-align:center;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >No data available</td>
	</tr>
	<?php
}
?>
</table>

<br/>
<br/>

<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Category
					</th>

					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Material Name
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Quantity
					</th>

					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Issued
					</th>
				</tr>

				<?php

					$tbl_job_card_material_count=0;

					$tbl_job_card_material_count_data = DB::select("select count(*) as totalcount from tbl_job_card_material_requirement where job_card_id='".$job_card_id."'");
					//var_dump($tbl_job_card_paper_count);
					foreach($tbl_job_card_material_count_data as $tbl_job_card_material_count_data)
					{
						//var_dump($tbl_job_card_paper_count);
						$tbl_job_card_material_count=$tbl_job_card_material_count_data->totalcount;
					}
					if($tbl_job_card_material_count==0)
					{
					?>
						<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
							<td colspan="4"  style="text-align:center;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >No data available</td>
						</tr>
					<?php
					}
					else
					{
						$tbl_job_card_material_requirement = DB::select("select * from tbl_job_card_material_requirement where job_card_id='".$job_card_id."'");

						//$k=0;
						foreach($tbl_job_card_material_requirement as $tbl_job_card_material_requirement)
						{
							//$k++;
							//$neft_count++;
							$material_requirement_id=$tbl_job_card_material_requirement->id;
							$rm_category=$tbl_job_card_material_requirement->rm_category;
							$type=$tbl_job_card_material_requirement->type;
							$rm_item=$tbl_job_card_material_requirement->rm_item;
							$quantity=$tbl_job_card_material_requirement->quantity;
							$units=$tbl_job_card_material_requirement->units;
							$wastage_allowed=$tbl_job_card_material_requirement->wastage_allowed;
							$pcs=$tbl_job_card_material_requirement->pcs;

							$tbl_rm_category   = DB::select("select * from tbl_rm_category where id='".$rm_category."'");

							$rm_category_name="";
							foreach($tbl_rm_category as $tbl_rm_category)
							{
								$rm_category_name=$tbl_rm_category->name;
							}

							$tbl_rm_product_category   = DB::select("select * from tbl_rm_product_category where id='".$type."'");

							$type_name="";
							foreach($tbl_rm_product_category as $tbl_rm_product_category)
							{
								$type_name=$tbl_rm_product_category->name;
							}

							$tbl_material   = DB::select("select * from tbl_material where id='".$rm_item."'");

							$rm_item_name="";
							foreach($tbl_material as $tbl_material)
							{
								$rm_item_name=$tbl_material->name;
							}

							$mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

							$units_name="";
							foreach($mst_unit as $mst_unit)
							{
								$units_name=$mst_unit->description;
							}

							?>
							<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">

								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $rm_category_name; ?></td>

								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $rm_item_name; ?></td>
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $quantity." ".$units_name." "."Per 1000 pcs"; ?></td>

								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo ""; ?></td>

							</tr>
							<?php
						}
					}

				?>
			</table>


			<h4><u>Process Flow List</u></h4>

			<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
			<tr>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"></th>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Work Entry No</th>

			</tr>

			<?php

//echo $jobcard_id;die;
$i=0;
$job_card_process_selection_pre_press_count=0;
$tbl_job_card_process_selection_pre_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_pre_press where job_card_id='".$job_card_id."'");
foreach($tbl_job_card_process_selection_pre_press_count as $tbl_job_card_process_selection_pre_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_pre_press_count=$tbl_job_card_process_selection_pre_press_count->totalcount;
}

$job_card_process_selection_press_count=0;
$tbl_job_card_process_selection_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_press where job_card_id='".$job_card_id."'");
foreach($tbl_job_card_process_selection_press_count as $tbl_job_card_process_selection_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_press_count=$tbl_job_card_process_selection_press_count->totalcount;
}

$job_card_process_selection_post_press_count=0;
$tbl_job_card_process_selection_post_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_post_press where job_card_id='".$job_card_id."'");
foreach($tbl_job_card_process_selection_post_press_count as $tbl_job_card_process_selection_post_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_post_press_count=$tbl_job_card_process_selection_post_press_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_process_selection_pre_press_count!=0)
{
?>




	<?php
	$tbl_job_card_process_selection_pre_press = DB::select("select * from tbl_job_card_process_selection_pre_press where job_card_id='".$job_card_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_process_selection_pre_press as $tbl_job_card_process_selection_pre_press)
	{
		$i++;
		$process=$tbl_job_card_process_selection_pre_press->process;
		$basicmachine=$tbl_job_card_process_selection_pre_press->basicmachine;
		$alternativemachine=$tbl_job_card_process_selection_pre_press->alternativemachine;
		$qc=$tbl_job_card_process_selection_pre_press->qc;

		$process_name="";
		if($process!="")
		{

			$tbl_process_master   = DB::select("select * from tbl_process_master where id='".$process."'");

			$process_name="";
			foreach($tbl_process_master as $tbl_process_master)
			{
				$process_name=$tbl_process_master->name;
			}
		}


	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $i; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo ""; ?></td>


	</tr>
	<?php
	}
	?>


<?php
}

if($job_card_process_selection_press_count!=0)
{
?>




	<?php
	$tbl_job_card_process_selection_press = DB::select("select * from tbl_job_card_process_selection_press where job_card_id='".$job_card_id."'");

	//var_dump($tbl_job_card_process_selection_press);die;

	foreach($tbl_job_card_process_selection_press as $tbl_job_card_process_selection_press)
	{
		$i++;
		$process=$tbl_job_card_process_selection_press->process;
		$basicmachine=$tbl_job_card_process_selection_press->basicmachine;
		$alternativemachine=$tbl_job_card_process_selection_press->alternativemachine;
		$qc=$tbl_job_card_process_selection_press->qc;

		$process_name="";
		if($process!="")
		{

			$tbl_process_master   = DB::select("select * from tbl_process_master where id='".$process."'");

			$process_name="";
			foreach($tbl_process_master as $tbl_process_master)
			{
				$process_name=$tbl_process_master->name;
			}
		}


	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $i; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo ""; ?></td>


	</tr>
	<?php
	}
}
	if($job_card_process_selection_post_press_count!=0)
{
?>


	<?php
	$tbl_job_card_process_selection_post_press = DB::select("select * from tbl_job_card_process_selection_post_press where job_card_id='".$job_card_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_process_selection_post_press as $tbl_job_card_process_selection_post_press)
	{
		$i++;
		$process=$tbl_job_card_process_selection_post_press->process;
		$basicmachine=$tbl_job_card_process_selection_post_press->basicmachine;
		$alternativemachine=$tbl_job_card_process_selection_post_press->alternativemachine;
		$qc=$tbl_job_card_process_selection_post_press->qc;

		$process_name="";
		if($process!="")
		{

			$tbl_process_master   = DB::select("select * from tbl_process_master where id='".$process."'");

			$process_name="";
			foreach($tbl_process_master as $tbl_process_master)
			{
				$process_name=$tbl_process_master->name;
			}
		}


	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $i; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo ""; ?></td>

	</tr>
	<?php
	}

	?>




<?php
}

if($job_card_process_selection_post_press_count=="0" && $job_card_process_selection_pre_press_count=="0" && $job_card_process_selection_press_count=="0" )
{
	?>
	<tr>
		<td colspan="3" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	<?php
}
?>
</table>
<br/>
@php
    $user_name = \Session::get('userdata')['fullname'];
@endphp
<table id='maintable1' style='width:100% !important;border: 0px solid black;border-collapse: collapse;padding-top:15px;'>
    <tr>
        <th style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Prepared by:</th>
        <th style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Approved by:</th>
        <th style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Received by:</th>
        <th style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Approved by at Production:</th>
    </tr>
    <tr>
        <td style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">
            {{ $user_name }}
        </td>
        <td style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"></td>
        <td style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"></td>
        <td style="text-align:left;border: 0px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"></td>
    </tr>
</table>





		</main>
</body>
</html>

