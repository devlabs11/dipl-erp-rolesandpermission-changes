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
                margin-top: 3cm;
                /* margin-left: 2cm; */
                /* margin-right: 2cm; */
                margin-bottom: 2cm;
				font-family:'Helvetica';
				font-size: 10.25pt;
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
			td{
				height:20px !important;
			}
        </style>


</head>
<body style="font-family:'Helvetica';font-size: 11.25pt;">
 <!-- Define header and footer blocks before your content -->
 		<header>
			
		</header>

        <footer>
            
        </footer>
		<main>
			<?php
				$tbl_customer_delivery_location = DB::select("select * from tbl_customer_delivery_location where customer_id=$customer_id");
				//var_dump($tbl_customer_delivery_location);die;
				$delivery_location_edit_id="";
				$delivery_location="";
				$delivery_location_gst_no="";
				$delivery_location_status="";

				//echo sizeof($tbl_customer_delivery_location);die;
				

				

				
				
			?>
			

			
			<?php


			//echo $job_card_paper_count;die;
			if(sizeof($tbl_customer_delivery_location)>0)
			{
				?>
				<b><h3><?php echo "Ply Details"; ?></h3></b>

				<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Sr No.</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Delivery Location</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Delivery GST No</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Active/Inactive</th>
				</tr>
				<?php
				//$tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='".$jobcard_id."'");

				//var_dump($tbl_job_card_paper);die;

				foreach($tbl_customer_delivery_location as $tbl_customer_delivery_location)
				{
						$delivery_location_edit_id=$tbl_customer_delivery_location->id;
						$delivery_location=$tbl_customer_delivery_location->delivery_location;
						$delivery_location_gst_no=$tbl_customer_delivery_location->delivery_location_gst_no;
						$delivery_location_status=$tbl_customer_delivery_location->delivery_location_status;

						if($delivery_location_status=="1")
						{
							$delivery_location_status="Active";
						}
						else
						{
							$delivery_location_status="In Active";
						}
					?>

					<tr>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $delivery_location_edit_id; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $delivery_location; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $delivery_location_gst_no; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $delivery_location_status; ?></td>

					</tr>
					<?php
				}
					
				?>
				</table>
				<?php
			}
			else
			{
				?>
				<b><?php //echo "Ply Details"; ?></b>
				<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Sr No.</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Delivery Location</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Delivery GST No</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Active/Inactive</th>
				</tr>
				<tr>
					<td colspan="5" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
				</tr>
				</table>
				<?php
			}
			?>
			







		</main>
</body>
</html>

