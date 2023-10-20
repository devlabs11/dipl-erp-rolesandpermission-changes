<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="{{ URL::asset('assets/css/css.css') }}" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{ URL::asset('assets/plugins/custom/datatables/datatables.bundle.css') }} " rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ URL::asset('assets/plugins/global/plugins.bundle.css') }} " rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('assets/css/style.bundle.css') }} " rel="stylesheet" type="text/css" />
		<link href="{{ URL::asset('assets/css/jquery-confirm.min.css') }}" rel="stylesheet" type="text/css" />
		
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
                margin-top: 3cm;
                /* margin-left: 2cm; */
                /* margin-right: 2cm; */
                margin-bottom: 2cm;
            } 

            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
				margin-left:auto;
				margin-right:auto;
            }

            /** Define the footer rules **/
            footer {
                position: fixed; 
                bottom: 0cm; 
                left: 0cm; 
                right: 0cm;
                height: 2cm;
            }
        </style>


</head>
<body style="font-family:'Helvetica';font-size: 11.25pt;padding-left:25%;padding-right:25%">

<?php

$pdf_url  = url("/generatePDF/{$quotation_id}");
$hfpdf_url  = url("/generatePDFwithhf/{$quotation_id}");

?>


<p style="text-align:right">
	
	
	<a href="<?php echo $hfpdf_url; ?>" class="btn btn-primary" title="Download" style="font-weight:normal !important;">Download</a>
	
</p>

 <!-- Define header and footer blocks before your content -->
 		
<?php
$tbl_quotation = DB::select("select * from tbl_quotation where id='".$quotation_id."'");
$quotation_width_mapping = DB::select("select * from quotation_width_mapping where quotation_id='".$quotation_id."'");
$quotation_invoice_details = DB::select("select * from quotation_invoice_details where quotation_id='".$quotation_id."'");


		$id="0";

		$user="";
		$fullname="";
		$comp_name_add="";
		$attention_of="";
		$quotation_date="";
		$subject="";
		$reference="";
		$quote_type="";


		$discharge_point_term="";
		$installation_charge="";
		$warranty="";
		$training="";
		$bank_charges="";
		$sampling_charges="";
		$lchandling_charges="";
		$cancellation_of_order_charge="";
		$delivery_point="";
		$packing="";
		$payment_term="";
		$validity_of_quotation="";
		$documents="";
		$jurisdiction="";
		$statutory_clause="";
		$tax="";
		$excise="";
		$lbt="";
		$freight="";
		$delivery="";
		$prices="";

		$discharge_point_term_checkbox="";
		$installation_charge_checkbox="";
		$warranty_checkbox="";
		$training_checkbox="";
		$bank_charges_checkbox="";
		$sampling_charges_checkbox="";
		$lchandling_charges_checkbox="";
		$cancellation_of_order_charge_checkbox="";
		$delivery_point_checkbox="";
		$packing_checkbox="";
		$payment_term_checkbox="";
		$validity_of_quotation_checkbox="";
		$documents_checkbox="";
		$jurisdiction_checkbox ="";
		$statutory_clause_checkbox="";
		$tax_checkbox="";
		$excise_checkbox="";
		$lbt_checkbox="";
		$freight_checkbox="";
		$delivery_checkbox="";
		$prices_checkbox="";

		$note="";
		$rows=0;
		$columns=0; 




                                                if(is_array($tbl_quotation))
												{
													foreach($tbl_quotation as $tbl_quotation)
													{
														$id=$tbl_quotation->id;
														$user=$tbl_quotation->sales_person;

														$tbl_user_data = DB::select("select * from tbl_user where id=$user");

														foreach($tbl_user_data as $tbl_user_data){
															$fullname=$tbl_user_data->fullname;
														}

														//echo $user;die;
														$comp_name_add=$tbl_quotation->comp_name_add;
														$unique_reference=$tbl_quotation->unique_reference;
														$attention_of=$tbl_quotation->attention_of;
														$quotation_date=$tbl_quotation->quotation_date;
                                                        $quotation_date=date('d-m-Y', strtotime($quotation_date));
														$reference=$tbl_quotation->reference;
														$quote_type=$tbl_quotation->quote_type;


														$discharge_point_term=$tbl_quotation->discharge_point_term;
														$installation_charge=$tbl_quotation->installation_charge;
														$warranty=$tbl_quotation->warranty;
														$training=$tbl_quotation->training;
														$bank_charges=$tbl_quotation->bank_charges;
														$sampling_charges=$tbl_quotation->sampling_charges;
														$lchandling_charges=$tbl_quotation->lchandling_charges;
														$cancellation_of_order_charge=$tbl_quotation->cancellation_of_order_charge;
														$delivery_point=$tbl_quotation->delivery_point;
														$packing=$tbl_quotation->packing;
														$payment_term=$tbl_quotation->payment_term;
														$validity_of_quotation=$tbl_quotation->validity_of_quotation;
														$documents=$tbl_quotation->documents;
														$jurisdiction =$tbl_quotation->jurisdiction;
														$statutory_clause=$tbl_quotation->statutory_clause;
														$tax=$tbl_quotation->tax;
														$excise=$tbl_quotation->excise;
														$lbt=$tbl_quotation->lbt;
														$freight=$tbl_quotation->freight;
														$delivery=$tbl_quotation->delivery;
														$prices=$tbl_quotation->prices;




														$discharge_point_term_checkbox=$tbl_quotation->discharge_point_term_checkbox;
														$installation_charge_checkbox=$tbl_quotation->installation_charge_checkbox;
														$warranty_checkbox=$tbl_quotation->warranty_checkbox;
														$training_checkbox=$tbl_quotation->training_checkbox;
														$bank_charges_checkbox=$tbl_quotation->bank_charges_checkbox;
														$sampling_charges_checkbox=$tbl_quotation->sampling_charges_checkbox;
														$lchandling_charges_checkbox=$tbl_quotation->lchandling_charges_checkbox;
														$cancellation_of_order_charge_checkbox=$tbl_quotation->cancellation_of_order_charge_checkbox;
														$delivery_point_checkbox=$tbl_quotation->delivery_point_checkbox;
														$packing_checkbox=$tbl_quotation->packing_checkbox;
														$payment_term_checkbox=$tbl_quotation->payment_term_checkbox;
														$validity_of_quotation_checkbox=$tbl_quotation->validity_of_quotation_checkbox;
														$documents_checkbox=$tbl_quotation->documents_checkbox;
														$jurisdiction_checkbox =$tbl_quotation->jurisdiction_checkbox;
														$statutory_clause_checkbox=$tbl_quotation->statutory_clause_checkbox;
														$tax_checkbox=$tbl_quotation->tax_checkbox;
														$excise_checkbox=$tbl_quotation->excise_checkbox;
														$lbt_checkbox=$tbl_quotation->lbt_checkbox;
														$freight_checkbox=$tbl_quotation->freight_checkbox;
														$delivery_checkbox=$tbl_quotation->delivery_checkbox;
														$prices_checkbox=$tbl_quotation->prices_checkbox;





														$note=$tbl_quotation->note;
														$subject=$tbl_quotation->subject;

														$rows=$tbl_quotation->rows;
														$columns=$tbl_quotation->columns;

													}
												}


                                                if(is_array($quotation_width_mapping))
												{
													//var_dump($quotation_width_mapping);die;
													foreach($quotation_width_mapping as $quotation_width_mapping)
													{
														$mapping_id=$quotation_width_mapping->id;
														$quotation_id=$quotation_width_mapping->quotation_id;
														$column_id=$quotation_width_mapping->column_id;
														$width=$quotation_width_mapping->width;
														
														//${"td_width_" . $column_id} = $width;

														${"td_width_" . $column_id} = $width;
														
														${"td_mapping_id_".$column_id}=$mapping_id;
													}
												}



												/*if(is_array($quotation_invoice_details))
												{
													//var_dump($quotation_width_mapping);die;
													foreach($quotation_invoice_details as $quotation_invoice_details)
													{
														$details_id=$quotation_invoice_details->id;
														$quotation_id=$quotation_invoice_details->quotation_id;
														$column_id=$quotation_invoice_details->column_id;
														$row_id=$quotation_invoice_details->row_id;
														$description=$quotation_invoice_details->description;
														if($description=="")
														{
															$description="NULL";
														}
														
														${"data_" . $row_id.$column_id} = $description;
														${"data_id_" . $row_id.$column_id} = $details_id;
													}
												}*/


?>
<!-- <div style="text-align:center;display:none">
<img style="display: block; margin-left: auto;margin-right: auto;width: 70%;"  alt="Logo" src="{{ URL::asset('assets/media/quotation-header-footer-images/DIPL_letter_head.png') }}" />
</div> -->
<h3 style="text-align:center;font-weight:bold">Quotation</h3>

<p style="text-align:left;">
Ref. No : {{$unique_reference}}
    <span style="float:right;">
        Date : {{$quotation_date}}
    </span>
</p>

<div style="padding-bottom:0px;">
To,
</div>
<div style="padding-top:0px">
{{$comp_name_add}}
</div>
<p style="font-weight:bold;text-decoration: underline;text-decoration-color: black;">
Kind attn : {{$attention_of}}
</p>
<p style="text-align:left;">
Reference : {{$reference}}
</p>

<p style="text-align:center"><b>Subject : {{$subject}} </b> </p>
<p">Dear Sir/Madam,</p>
<div style="padding-bottom:0px">
We would like to thank you for your enquiry!!
</div>
<div style="padding-bottom:0px">
With the reference to the above subject, please find below quotation,
</div>
<br/>

<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
							
            <tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
            <?php
            $max_per_row = $columns;
            $item_count = 0;
            

		

			if(is_array($quotation_invoice_details))
			{

				//var_dump($quotation_width_mapping);die;
				foreach($quotation_invoice_details as $quotation_invoice_details)
				{

					$details_id=$quotation_invoice_details->id;
					$quotation_id=$quotation_invoice_details->quotation_id;
					$column_id=$quotation_invoice_details->column_id;
					$row_id=$quotation_invoice_details->row_id;
					$description=$quotation_invoice_details->description;
					if($description=="")
					{
						$description="NULL";
					}

            //for ($i = 0; $i < $rows; $i++) 
            //{
                //for ($j = 0; $j < $columns; $j++) 
                //{

                    if ($item_count == $max_per_row)
                    {
                        echo "</tr><tr style='border: 1px solid black;border-collapse: collapse;padding: 5px;'>";
                        $item_count = 0;
                    }
            ?>
                    <td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;<?php if(isset(${"td_width_" . $column_id})){echo "width:".${"td_width_" . $column_id}."%";}?>" ><!-- width:<?php //echo $."td_width_" . $column_id ?>-->
                    <?php echo nl2br($description); ?>
					<?php // echo nl2br("${'data_' . $i.$j}"); ?>
                    
                    </td>
            <?php		
                		
                    $item_count++;
				}
			}
            ?>
            </tr>
													
		</table>

</p>
<p>
Terms & Conditions:
</p>
<?php

//die;
$term_count=1;
if($discharge_point_term_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Discharge Point Term : {{$discharge_point_term}}</div>
<?php
$term_count++;
}
?>
<?php
if($installation_charge_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Installation Charge : {{$installation_charge}}</div>
<?php
$term_count++;
}
?>
<?php
if($warranty_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Warranty Checkbox : {{$warranty}}</div>
<?php
$term_count++;
}
?>
<?php
if($training_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Training : {{$training}}</div>
<?php
$term_count++;
}
?>
<?php
if($bank_charges_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Bank Bharges : {{$bank_charges}}</div>
<?php
$term_count++;
}
?>
<?php
if($sampling_charges_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Sampling Charges : {{$sampling_charges}}</div>
<?php
$term_count++;
}
?>
<?php
if($lchandling_charges_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Ichandling Charges : {{$lchandling_charges}}</div>
<?php
$term_count++;
}
?>
<?php
if($cancellation_of_order_charge_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Cancellation Of Order Charge : {{$cancellation_of_order_charge}}</div>
<?php
$term_count++;
}
?>
<?php
if($delivery_point_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Delivery Point : {{$delivery_point}}</div>
<?php
$term_count++;
}
?>

<?php
if($packing_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Packing : {{$packing}}</div>
<?php
$term_count++;
}
?>
<?php
if($payment_term_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Payment Term : {{$payment_term}}</div>
<?php
$term_count++;
}
?>
<?php
if($validity_of_quotation_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Validity Of Quotation : {{$validity_of_quotation}}</div>
<?php
$term_count++;
}
?>
<?php
if($documents_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Documents : {{$documents}}</div>
<?php
$term_count++;
}
?>
<?php
if($jurisdiction_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Jurisdiction : {{$jurisdiction}}</div>
<?php
$term_count++;
}
?>
<?php
if($statutory_clause_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Statutory Clause : {{$statutory_clause}}</div>
<?php
$term_count++;
}
?>
<?php
if($tax_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Tax : {{$tax}}</div>
<?php
$term_count++;
}
?>
<?php
if($excise_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Excise : {{$excise}}</div>
<?php
$term_count++;
}
?>
<?php
if($lbt_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Lbt : {{$lbt}}</div>
<?php
$term_count++;
}
?>
<?php
if($freight_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Freight : {{$freight}}</div>
<?php
$term_count++;
}
?>
<?php
if($delivery_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Delivery : {{$delivery}}</div>
<?php
$term_count++;
}
?>
<?php
if($prices_checkbox!=0)
{
?>
<div style="padding-bottom:0px;">{{$term_count}})  Prices : {{$prices}}</div>
<?php
$term_count++;
}
?>

<?php
if($note!="")
{
?>
<div style="padding-bottom:0px;">
Note : {{$note}} 
</div>
<?php
}
?>
<p style="font-weight:bold">
For Devharsh InfoTech (P) Ltd
</p>

<p style="font-weight:bold;margin-top:20px">
{{$fullname}}
<small style="clear:both;font-weight:normal">(This is a computer generated document.)</small>
</p>

<!-- <div style="text-align:center;display:none">
<img style="display: block; margin-left: auto;margin-right: auto;width: 100%;"  alt="Logo" src="{{ URL::asset('assets/media/quotation-header-footer-images/DIPL_Footer.png') }}" />
</div> -->
</body>
</html>

