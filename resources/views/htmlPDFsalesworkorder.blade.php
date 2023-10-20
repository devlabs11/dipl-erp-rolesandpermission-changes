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


			$tbl_salesworkorder = DB::select("select * from tbl_salesworkorder where id='".$sales_work_order."'");

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

			if(is_array($tbl_salesworkorder))
			{
				foreach($tbl_salesworkorder as $tbl_salesworkorder)
				{
					$id=$tbl_salesworkorder->id;
					$order_no=$tbl_salesworkorder->order_no;
					$order_name=$tbl_salesworkorder->order_name;
					$customer_name=$tbl_salesworkorder->customer_name;

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

					$tbl_job_cart = DB::select("select * from tbl_job_cart where id=$job_card_id");

					$job_card_no="";
					$job_card_title="";

					foreach($tbl_job_cart as $tbl_job_cart)
					{
						$job_card_no=$tbl_job_cart->job_card_no;
						$job_card_title=$tbl_job_cart->job_card_title;
					}

				}
			}


			?>
			<!-- <div style="text-align:center;display:none">
			<img style="display: block; margin-left: auto;margin-right: auto;width: 70%;"  alt="Logo" src="{{ URL::asset('assets/media/quotation-header-footer-images/DIPL_letter_head.png') }}" />
			</div> -->
			<h3 style="font-weight:bold;text-align:center">Bill Of Material</h3>

			<p style="text-align:left;">
			<b>Job Order : </b> {{$job_card_title}} ({{$job_card_no}})
			</p>

			<p style="text-align:left;">
			<b>Work Order : </b> {{$order_name}} ({{$order_no}})
			</p>

			<p style="text-align:left;">
			<b>Customer : </b> {{$customer_name_description}} 
			</p>

			<p style="text-align:left;">
			<b>PO Quantity : </b> {{$po_quantity}} {{$po_quantity_unit_name}} 
			</p>

			

			<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr style="border: 1px solid black;border-collapse: collapse;padding: 5px;">
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Category
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Product Category
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Material Name
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Quantity
					</th>
					<th style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >
					Unit
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
							<td colspan="6"  style="text-align:center;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" >No data available</td>
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
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $type_name; ?></td>
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $rm_item_name; ?></td>
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $quantity; ?></td>
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo $units_name; ?></td>
								<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;" ><?php echo ""; ?></td>
							
							</tr>
							<?php
						}
					}

				?>
			</table>

			<p style="text-align:left;">
				<b>Signature</b>
			</p>

			


		</main>
</body>
</html>

