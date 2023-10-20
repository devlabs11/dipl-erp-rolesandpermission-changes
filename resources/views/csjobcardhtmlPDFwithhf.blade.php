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
<body>
 <!-- Define header and footer blocks before your content -->
 		<header style="margin-bottom:10px">
			<div style="text-align:center;padding-top:0px;margin-top:0px;padding-bottom:20px">
            	<img src="<?php echo $pic; ?>" width="70%" height="100%"/>
			</div>
		</header>

        <footer>
            <img src="<?php echo $fpic; ?>" width="100%" height="100%"/>
        </footer>
		<main>
			<?php
				$tbl_job_cart = DB::select("select * from tbl_job_cart where id='".$jobcard_id."'");
				$tbl_job_card_pre_press = DB::select("select * from tbl_job_card_pre_press where job_card_id='".$jobcard_id."'");
				$tbl_job_card_post_press = DB::select("select * from tbl_job_card_post_press where job_card_id='".$jobcard_id."'");
				//var_dump($tbl_job_card_post_press);die;
				$tbl_job_card_press = DB::select("select * from tbl_job_card_press where job_card_id='".$jobcard_id."'");

				//var_dump($tbl_job_card_press);die;
				$tbl_job_card_material_requirement = DB::select("select * from tbl_job_card_material_requirement where job_card_id='".$jobcard_id."'");
				$tbl_job_card_process_selection_press = DB::select("select * from tbl_job_card_process_selection_press where job_card_id='".$jobcard_id."'");
				$tbl_job_card_process_selection_pre_press = DB::select("select * from tbl_job_card_process_selection_pre_press where job_card_id='".$jobcard_id."'");
				$tbl_job_card_process_selection_post_press = DB::select("select * from tbl_job_card_process_selection_post_press where job_card_id='".$jobcard_id."'");


				$product_category="";
				$product_category_name="";

				$product_type="";
				$product_type_name="";

				$job_card_no="";
				$job_card_title="";
				$company_product_no="";
				$product_name_by_customer="";

				$general_width="";
				$general_height_length="";
				$general_item_type="";
				$genral_height_unit="";
				$genral_width_unit="";

				$part_ply="";

				$perforation="";

				$special_instructions="";

				$columns="";
				$rows="";
				$length="";
				$width="";
				$thickness="";

				$pre_press_length_unit="";
				$pre_press_width_unit="";
				$pre_press_thickness_unit="";
				$pre_press_id="";

				// $special_instructions="";
				// $perforation="";

				$ink_color="";
				$ink_shade="";
				$ink_company="";
				$ink_quantity="";
				$ink_units="";


				$collating_width="";
				$collating_type="";
				$collating_carbon_option="";
				$collating_between_ply="";

				$numbering_position="";
				$numbering_style="";
				$numbering_skip="";
				$numbering_sequence="";
				$numbering_orientation="";

				$numbering_orientation="";
				$gumming_position="";
				$gumming_gum_make="";
				$gumming_between="";
				$gumming_quantity="";
				$gumming_between="";

				$hotspot_carbon_height="";
				$hotspot_carbon_width="";
				$hotspot_carbon_behind_ply_no="";

				$cutting_width="";
				$cutting_length="";
				$cutting_core_size="";
				$cutting_length_unit="";
				$cutting_width_unit="";


				$barcode_type="";
				$barcode_height="";
				$barcode_width="";
				$barcode_orientation="";
				$barcode_human_readable_text_to_show="";

				$baby_roll_making_coating_side="";

				$printing="";
				$coating="";



				if(is_array($tbl_job_cart))
				{
					foreach($tbl_job_cart as $tbl_job_cart)
					{
						$product_category=$tbl_job_cart->product_category;
						if($product_category!="")
						{
							$tbl_product_category = DB::select("select * from tbl_product_category where id=$product_category");

							foreach($tbl_product_category as $tbl_product_category)
							{
								$product_category_name=$tbl_product_category->product_category;
							}
						}

						$product_type=$tbl_job_cart->product_type;
						if($product_type!="")
						{
							$tbl_product = DB::select("select * from tbl_product where id=$product_type");

							foreach($tbl_product as $tbl_product)
							{
								$product_type_name=$tbl_product->product_type;
							}
						}

						$job_card_no=$tbl_job_cart->job_card_no;
						$job_card_title=$tbl_job_cart->job_card_title;
						$company_product_no=$tbl_job_cart->company_product_no;
						$product_name_by_customer=$tbl_job_cart->product_name_by_customer;
						$part_ply=$tbl_job_cart->part_ply;




						$general_width=$tbl_job_cart->width;
						$general_width_unit=$tbl_job_cart->width_unit;

						if($general_width_unit!="")
						{
							$mst_unit = DB::select("select * from mst_unit where id=$general_width_unit");

							foreach($mst_unit as $mst_unit)
							{
								$general_width_unit=$mst_unit->description;
							}
						}


						$general_height_length=$tbl_job_cart->height;
						$genral_height_unit=$tbl_job_cart->height_unit;

						if($genral_height_unit!="")
						{
							$mst_unit = DB::select("select * from mst_unit where id=$genral_height_unit");

							foreach($mst_unit as $mst_unit)
							{
								$genral_height_unit=$mst_unit->description;
							}
						}

						$general_item_type=$tbl_job_cart->item_type;

						//echo $item_type;die;

						if($general_item_type!="")
						{
							$tbl_item_type = DB::select("select * from tbl_item_type where id=$general_item_type");
							//var_dump($tbl_item_type);die;

							foreach($tbl_item_type as $tbl_item_type)
							{
								$general_item_type=$tbl_item_type->description;

							}
						}




						$special_instructions=$tbl_job_cart->special_instructions;

						$perforation=$tbl_job_cart->perforation;

						if($perforation!="")
						{

							$tbl_perforation = DB::select("select * from tbl_perforation where id=$perforation");

							foreach($tbl_perforation as $tbl_perforation)
							{
								$perforation=$tbl_perforation->description;
							}

						}

					}
				}

				if(is_array($tbl_job_card_pre_press))
				{
					foreach($tbl_job_card_pre_press as $tbl_job_card_pre_press)
					{

						$pre_press_id=$tbl_job_card_pre_press->id;
						$columns=$tbl_job_card_pre_press->columns;
						$rows=$tbl_job_card_pre_press->rows;
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

				if(is_array($tbl_job_card_post_press))
				{

					foreach($tbl_job_card_post_press as $tbl_job_card_post_press)
					{
						//var_dump($tbl_job_card_post_press);die;
						$collating_width=$tbl_job_card_post_press->collating_width;

						$collating_type=$tbl_job_card_post_press->collating_type;

						if($collating_type!="")
						{

							$tbl_collating_type = DB::select("select * from tbl_collating_type where id=$collating_type");

							foreach($tbl_collating_type as $tbl_collating_type)
							{
								$collating_type=$tbl_collating_type->description;
							}
						}


						$collating_carbon_option=$tbl_job_card_post_press->collating_carbon_option;

						if($collating_carbon_option!="")
						{

							$tbl_carbon_option = DB::select("select * from tbl_carbon_option where id=$collating_carbon_option");

							foreach($tbl_carbon_option as $tbl_carbon_option)
							{
								$collating_carbon_option=$tbl_carbon_option->description;
							}
						}

						//var_dump($tbl_job_card_post_press);die;

						$collating_between_ply=$tbl_job_card_post_press->collating_between_ply;

						//echo $collating_between_ply;die;




						$numbering_position=$tbl_job_card_post_press->numbering_position;

						$numbering_style=$tbl_job_card_post_press->numbering_style;

						if($numbering_style!="")
						{

							$tbl_style = DB::select("select * from tbl_style where id=$numbering_style");

							foreach($tbl_style as $tbl_style)
							{
								$numbering_style=$tbl_style->description;
							}
						}


						$numbering_skip=$tbl_job_card_post_press->numbering_skip;




						$numbering_sequence=$tbl_job_card_post_press->numbering_sequence;
						if($numbering_sequence!="")
						{
							$tbl_sequence = DB::select("select * from tbl_sequence where id=$numbering_sequence");

							foreach($tbl_sequence as $tbl_sequence)
							{
								$numbering_sequence=$tbl_sequence->description;
							}
						}


						$numbering_orientation=$tbl_job_card_post_press->numbering_orientation;

						if($numbering_orientation!="")
						{
							$tbl_orientation = DB::select("select * from tbl_orientation where id=$numbering_orientation");

							foreach($tbl_orientation as $tbl_orientation)
							{
								$numbering_orientation=$tbl_orientation->description;
							}
						}

						$gumming_position=$tbl_job_card_post_press->gumming_position;
						$gumming_gum_make=$tbl_job_card_post_press->gumming_gum_make;

						if($gumming_gum_make!="")
						{
							$mst_gum_make = DB::select("select * from mst_gum_make where id=$gumming_gum_make");


							foreach($mst_gum_make as $mst_gum_make)
							{
								$gumming_gum_make=$mst_gum_make->description;
							}
						}

						$gumming_quantity=$tbl_job_card_post_press->gumming_quantity;
						$gumming_between=$tbl_job_card_post_press->gumming_between;

						$hotspot_carbon_width=$tbl_job_card_post_press->hotspot_carbon_width;
						$hotspot_carbon_height=$tbl_job_card_post_press->hotspot_carbon_height;
						$hotspot_carbon_behind_ply_no=$tbl_job_card_post_press->hotspot_carbon_behind_ply_no;


						$cutting_width=$tbl_job_card_post_press->cutting_width;
						$cutting_width_unit=$tbl_job_card_post_press->cutting_width_unit;

						if($cutting_width_unit!="")
						{
							$mst_unit = DB::select("select * from mst_unit where id=$cutting_width_unit");

							foreach($mst_unit as $mst_unit)
							{
								$cutting_width_unit=$mst_unit->description;
							}
						}


						$cutting_length=$tbl_job_card_post_press->cutting_length;
						$cutting_length_unit=$tbl_job_card_post_press->cutting_length_unit;

						if($cutting_length_unit!="")
						{
							$mst_unit = DB::select("select * from mst_unit where id=$cutting_length_unit");

							foreach($mst_unit as $mst_unit)
							{
								$cutting_length_unit=$mst_unit->description;
							}
						}

						$cutting_core_size=$tbl_job_card_post_press->cutting_core_size;



						$barcode_type=$tbl_job_card_post_press->barcode_type;
						$barcode_height=$tbl_job_card_post_press->barcode_height;
						$barcode_width=$tbl_job_card_post_press->barcode_width;
						$barcode_orientation=$tbl_job_card_post_press->barcode_orientation;
						$barcode_human_readable_text_to_show=$tbl_job_card_post_press->barcode_human_readable_text_to_show;


						if($barcode_human_readable_text_to_show!="")
						{
							$tbl_barcode_human_readable_text_to_show = DB::select("select * from tbl_barcode_human_readable_text_to_show where id=$barcode_human_readable_text_to_show");

							foreach($tbl_barcode_human_readable_text_to_show as $tbl_barcode_human_readable_text_to_show)
							{
								$barcode_human_readable_text_to_show=$tbl_barcode_human_readable_text_to_show->description;
							}
						}


						if($barcode_orientation!="")
						{
							$tbl_barcode_orientation = DB::select("select * from tbl_barcode_orientation where id=$barcode_orientation");

							foreach($tbl_barcode_orientation as $tbl_barcode_orientation)
							{
								$barcode_orientation=$tbl_barcode_orientation->description;
							}
						}


						$baby_roll_making_coating_side=$tbl_job_card_post_press->baby_roll_making_coating_side;

						if($baby_roll_making_coating_side!="")
						{
							$tbl_baby_roll_making_coating_side = DB::select("select * from tbl_baby_roll_making_coating_side where id=$baby_roll_making_coating_side");

							foreach($tbl_baby_roll_making_coating_side as $tbl_baby_roll_making_coating_side)
							{
								$baby_roll_making_coating_side=$tbl_baby_roll_making_coating_side->description;
							}
						}









					}
				}

				$press_id=0;


				if(is_array($tbl_job_card_press))
				{
					foreach($tbl_job_card_press as $tbl_job_card_press)
					{

						$press_id=$tbl_job_card_press->id;






						// $mst_unit = DB::select("select * from mst_unit where id=$unit");

						// foreach($mst_unit as $mst_unit)
						// {
						// 	$ink_units=$mst_unit->description;
						// }
						//$quantity=$tbl_job_card_press->quantity;

						$printing=$tbl_job_card_press->printing;


						if($printing!="")
						{
							$tbl_printing = DB::select("select * from tbl_printing where id=$printing");

							foreach($tbl_printing as $tbl_printing)
							{
								$printing=$tbl_printing->description;
							}
						}



						$coating=$tbl_job_card_press->coating;

						if($coating!="")
						{
							$tbl_coating = DB::select("select * from tbl_coating where id=$coating");

							foreach($tbl_coating as $tbl_coating)
							{
								$coating=$tbl_coating->description;
							}
						}


					}
				}



			?>



			<h2><center><u>General Details</u></center></h2>
			<b><?php echo "Product Category :" ?></b><?php echo $product_category_name; ?><br/><br/>
			<b><?php echo "Product Type :" ?></b><?php echo $product_type_name; ?></b><br/><br/>
			<b><?php echo "Job Card No  :" ?></b><?php echo $job_card_no; ?></b><br/><br/>
			<b><?php echo "Job Card Title :" ?></b><?php echo $job_card_title; ?></b><br/><br/>
			<b><?php echo "Company's Product No :" ?></b><?php echo $company_product_no; ?></b><br/><br/>
			<b><?php echo "Product Name By Customer :" ?></b><?php echo $product_name_by_customer; ?></b><br/><br/>

			<b><h3><?php echo "Size"; ?></h3></b>

			<b><?php echo "Width :" ?></b><?php echo $general_width." ".$general_width_unit; ?><br/><br/>
			<b><?php echo "Height / Length  :" ?></b><?php echo $general_height_length." ".$genral_height_unit; ?></b><br/><br/>
			<b><?php echo "Part Ply :" ?></b><?php echo $part_ply; ?></b><br/><br/>
			<b><?php echo "Item Type :" ?></b><?php echo $general_item_type; ?></b><br/><br/>




			<?php
			$tbl_job_card_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_paper where job_card_id='".$jobcard_id."'");
			foreach($tbl_job_card_paper_count as $tbl_job_card_paper_count)
			{
				//var_dump($tbl_plants_count);die;
				$job_card_paper_count=$tbl_job_card_paper_count->totalcount;
			}


			//echo $job_card_paper_count;die;
			if($job_card_paper_count!=0)
			{
				?>
				<b><h3><?php echo "Ply Details"; ?></h3></b>

				<table id='maintable' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thick</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Make</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color Shade</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Front Colors</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Back Colors</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Front Coating</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Back Coating</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Copy Mark</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Remark</th>
				</tr>
				<?php
				$tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='".$jobcard_id."'");

				//var_dump($tbl_job_card_paper);die;

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


					$tbl_fron_side_color_coating   = DB::select("select * from tbl_fron_side_color_coating where id='".$front_side_coating."'");

					$front_side_coating_name="";
					foreach($tbl_fron_side_color_coating as $tbl_fron_side_color_coating)
					{
						$front_side_coating_name=$tbl_fron_side_color_coating->description;
					}


					$back_side_coating=$tbl_job_card_paper->back_side_coating;

					$tbl_back_side_color_coating   = DB::select("select * from tbl_back_side_color_coating where id='".$back_side_coating."'");

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
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $paper_thick; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $paper_make_name; ?></td>

						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $mst_color_shade_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $front_side_color_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $back_side_color_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $front_side_coating_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $back_side_coating_name; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $copy_mark; ?></td>
						<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $remark; ?></td>


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
				<b><?php echo "Ply Details"; ?></b>
				<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
				<tr>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thick</th>
				<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Make</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color Shade</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Front Colors</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Back Colors</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Front Coating</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Back Coating</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Copy Mark</th>
					<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Remark</th>
				</tr>
				<tr>
					<td colspan="5" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
				</tr>
				</table>
				<?php
			}
			?>

<p>




<b><?php echo "Special Instructions :"; ?></b><?php echo strtoupper($special_instructions); ?><br/><br/>

<b><?php echo "Perforation :"; ?></b><?php echo $perforation; ?><br/>

<?php

//echo $special_instructions;
//var_dump($special_instructions);die;
				// if($special_instructions=="" || $special_instructions=="NULL")
				// {
				// 	$special_instructions=="NULL";
				// }
				// echo $special_instructions;

?>
</p>

<?php

//echo $jobcard_id;die;
$tbl_job_card_position_count = DB::select("select count(*) as totalcount from tbl_job_card_position where job_card_id='".$jobcard_id."'");
foreach($tbl_job_card_position_count as $tbl_job_card_position_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_position_count=$tbl_job_card_position_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_position_count!=0)
{
?>




<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Position</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Direction</th>
	</tr>
	<?php
	$tbl_job_card_position = DB::select("select * from tbl_job_card_position where job_card_id='".$jobcard_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_position as $tbl_job_card_position)
	{

		$position=$tbl_job_card_position->position;
		$direction=$tbl_job_card_position->direction;

		$tbl_direction   = DB::select("select * from tbl_direction where id='".$direction."'");

		$direction_name="";
		foreach($tbl_direction as $tbl_direction)
		{
			$direction=$tbl_direction->description;
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $position; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $direction; ?></td>

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

	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Position</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Direction</th>
	</tr>
	<tr>
		<td colspan="2" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>

<br/>


<h2><center><u>Pre Press Details</u></center></h2>

<b><h3><?php echo "Printing Ups"; ?></h3></b>


<b><?php echo "Columns :"; ?></b><?php echo $columns; ?><br/><br/>
<b><?php echo "Rows :"; ?></b><?php echo $rows; ?><br/><br/>




<b><h3><?php echo "Size of Plates"; ?></h3></b>

<b><?php echo "Length :"; ?></b><?php echo $length." ".$pre_press_length_unit; ?><br/><br/>
<b><?php echo "Width :"; ?></b><?php echo $width." ".$pre_press_width_unit; ?><br/><br/>
<b><?php echo "Thickness :"; ?></b><?php echo $thickness." ".$pre_press_thickness_unit; ?><br/><br/>





<?php

//echo $jobcard_id;die;
$job_card_pre_press_color_count=0;
$tbl_job_card_pre_press_color_count = DB::select("select count(*) as totalcount from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_id."'");
//var_dump($tbl_job_card_material_requirement_count);die;
foreach($tbl_job_card_pre_press_color_count as $tbl_job_card_pre_press_color_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_pre_press_color_count=$tbl_job_card_pre_press_color_count->totalcount;
}

//echo $job_card_material_requirement_count;die;
if($job_card_pre_press_color_count!=0)
{
?>



<b><h3><?php echo "Colour Details"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Film Type</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Ply</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Plate Type</th>
	</tr>
	<?php
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
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $color_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $film_type_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ply; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $plate_type_name; ?></td>


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
	<b><h3><?php echo "Colour Details"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Film Type</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Ply</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Plate Type</th>
	</tr>
	<tr>
		<td colspan="4" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>









<br/>
<h2><center><u>Press Details</u></center></h2>


<!-- paper thickness -->

<br/>

<?php
$job_card_press_paper_count=0;
$tbl_job_card_press_paper_count = DB::select("select count(*) as totalcount from tbl_job_card_press_paper where press_id='".$press_id."'");
foreach($tbl_job_card_press_paper_count as $tbl_job_card_press_paper_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_press_paper_count=$tbl_job_card_press_paper_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_press_paper_count!=0)
{
?>

<b><h3><?php echo "Paper Details"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thickness Proposed</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">GSM Make</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thick Used</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity for 1 Piece (Kg)</th>

		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Papers</th>
	</tr>
	<?php
	$tbl_job_card_press_paper = DB::select("select * from tbl_job_card_press_paper where press_id='".$press_id."'");

	//var_dump($tbl_job_card_paper);die;


	foreach($tbl_job_card_press_paper as $tbl_job_card_press_paper)
	{

		$paper_thickness_proposed=$tbl_job_card_press_paper->paper_thickness_proposed;
		$gsm_make=$tbl_job_card_press_paper->gsm_make;
		$gsm_make_name="";
		if($gsm_make!="")
		{
			$mst_paper_make = DB::select("select * from mst_paper_make where id=$gsm_make");
			foreach($mst_paper_make as $mst_paper_make)
			{
				$gsm_make_name=$mst_paper_make->description;
			}
		}

		$paper_thickness_used=$tbl_job_card_press_paper->paper_thickness_used;
		$quantity=$tbl_job_card_press_paper->quantity;
		$unit=$tbl_job_card_press_paper->unit;

		$papers=$tbl_job_card_press_paper->papers;

		$papers_name="";
		if($papers!="")
		{
			$tbl_material = DB::select("select * from tbl_material where id=$papers");
			foreach($tbl_material as $tbl_material)
			{
				$papers_name=$tbl_material->name;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $paper_thickness_proposed; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $gsm_make_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $paper_thickness_used; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $unit; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $quantity; ?></td>

		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $papers_name; ?></td>

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
	<b><h3><?php echo "Paper Thickness"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thickness Proposed</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">GSM Make</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Paper Thick Used</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity for 1 Piece (Kg)</th>

		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Papers</th>
	</tr>
	<tr>
		<td colspan="6" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>

<br/>

<?php

//echo $jobcard_id;die;
$job_card_press_ink_details_count=0;
$tbl_job_card_press_ink_details_count = DB::select("select count(*) as totalcount from tbl_job_card_press_ink_details where press_id='".$press_id."'");
//var_dump($tbl_job_card_material_requirement_count);die;
foreach($tbl_job_card_press_ink_details_count as $tbl_job_card_press_ink_details_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_press_ink_details_count=$tbl_job_card_press_ink_details_count->totalcount;
}

//echo $job_card_material_requirement_count;die;
if($job_card_press_ink_details_count!=0)
{
?>



<b><h3><?php echo "Ink Details"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Shade</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Company</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity Per 1000 PC</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
	</tr>
	<?php
	$tbl_job_card_press_ink_details = DB::select("select * from tbl_job_card_press_ink_details where press_id='".$press_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_press_ink_details as $tbl_job_card_press_ink_details)
	{


		//echo $press_id;die;
		$ink_color=$tbl_job_card_press_ink_details->ink_color;
		$ink_shade=$tbl_job_card_press_ink_details->ink_shade;





		$ink_shade_name="";

		if($ink_shade!="")
		{
			$mst_color_shade = DB::select("select * from mst_color_shade where id=$ink_shade");
			foreach($mst_color_shade as $mst_color_shade)
			{
				$ink_shade_name=$mst_color_shade->description;
			}
		}


		$ink_company=$tbl_job_card_press_ink_details->ink_company;



		$ink_company_name="";

		if($ink_company!="")
		{
			$mst_ink_make = DB::select("select * from mst_ink_make where id=$ink_company");

			$ink_company_name="";

			foreach($mst_ink_make as $mst_ink_make)
			{
				$ink_company_name=$mst_ink_make->description;
			}
		}

		$ink_quantity=$tbl_job_card_press_ink_details->ink_quantity;

		$ink_units=$tbl_job_card_press_ink_details->ink_units;
		$ink_units_name="";

		if($ink_units!="")
		{

			$mst_unit = DB::select("select * from mst_unit where id=$ink_units");
			$ink_units_name="";
			foreach($mst_unit as $mst_unit)
			{
				$ink_units_name=$mst_unit->description;
			}
		}

	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ink_color; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ink_shade_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ink_company_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ink_quantity; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $ink_units_name; ?></td>

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
	<b><h3><?php echo "Ink Details"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Color</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Shade</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Company</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity Per 1000 PC</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
	</tr>
	<tr>
		<td colspan="5" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>






<br/>
<?php
$tbl_job_card_press_spare_to_use_count = DB::select("select count(*) as totalcount from tbl_job_card_press_spare_to_use where press_id='".$press_id."'");
foreach($tbl_job_card_press_spare_to_use_count as $tbl_job_card_press_spare_to_use_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_press_spare_to_use_count=$tbl_job_card_press_spare_to_use_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_press_spare_to_use_count!=0)
{
?>

<b><h3><?php echo "Spares to Use"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Spare</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity</th>
	</tr>
	<?php
	$tbl_job_card_press_spare_to_use = DB::select("select * from tbl_job_card_press_spare_to_use where press_id='".$press_id."'");

	//var_dump($tbl_job_card_paper);die;
	$spare="";

	foreach($tbl_job_card_press_spare_to_use as $tbl_job_card_press_spare_to_use)
	{

		$spare=$tbl_job_card_press_spare_to_use->spare;
		//echo $spare;die;

		$spare_quantity=$tbl_job_card_press_spare_to_use->spare_quantity;

		//$spare="";
		if($spare!="")
		{
			$tbl_spare= DB::select("select * from tbl_spare where id='".$spare."'");
			//var_dump($tbl_spare);die;

			$spare="";
			foreach($tbl_spare as $tbl_spare)
			{
				$spare=$tbl_spare->name;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $spare; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $spare_quantity; ?></td>

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
	<b><h3><?php echo "Spares to Use"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Spare</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity</th>

	</tr>
	<tr>
		<td colspan="2" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>

<br/>
<b><h3><?php echo "Coating Details"; ?></h3></b>


<b><?php echo "Printing :"; ?></b><?php echo $printing; ?><br/><br/>
<b><?php echo "Coating :"; ?></b><?php echo $coating; ?><br/><br/>



<h2><center><u>Post Press Details</u></center></h2>


<b><h3><?php echo "Collating"; ?></h3></b>

<b><?php echo "Width :"; ?></b><?php echo $collating_width; ?><br/><br/>
<b><?php echo "Type :"; ?></b><?php echo $collating_type; ?><br/><br/>
<b><?php echo "Carbon Option:"; ?></b><?php echo $collating_carbon_option; ?><br/><br/>
<b><?php echo "Collating between Ply:"; ?></b><?php echo $collating_between_ply; ?><br/><br/>


<b><h3><?php echo "Numbering"; ?></h3></b>

<b><?php echo "Position :"; ?></b><?php echo $numbering_position; ?><br/><br/>
<b><?php echo "Style :"; ?></b><?php echo $numbering_style; ?><br/><br/>
<b><?php echo "Skips :"; ?></b><?php echo $numbering_skip; ?><br/><br/>
<b><?php echo "Sequence :"; ?></b><?php echo $numbering_sequence; ?><br/><br/>
<b><?php echo "Orientation :"; ?></b><?php echo $numbering_orientation; ?><br/><br/>

<b><h3><?php echo "Gumming Details "; ?></h3></b>

<b><?php echo "Position :"; ?></b><?php echo $gumming_position; ?><br/><br/>
<b><?php echo "Gum Make :"; ?></b><?php echo $gumming_gum_make; ?><br/><br/>
<b><?php echo "Quantity (Per 1000 Prints) :"; ?></b><?php echo $gumming_quantity; ?><br/><br/>
<b><?php echo "Gumming between :"; ?></b><?php echo $gumming_between; ?><br/><br/>







<br/>

<?php

//echo $jobcard_id;die;
$job_card_post_press_packaging_details_count=0;
$tbl_job_card_post_press_packaging_details_count = DB::select("select count(*) as totalcount from tbl_job_card_post_press_packaging_details where job_card_id='".$jobcard_id."'");
foreach($tbl_job_card_post_press_packaging_details_count as $tbl_job_card_post_press_packaging_details_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_post_press_packaging_details_count=$tbl_job_card_post_press_packaging_details_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_post_press_packaging_details_count!=0)
{
?>



<b><h3><?php echo "Packaging Details"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">PCs</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Items</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Length</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Width</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">height</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units	</th>
	</tr>
	<?php
	$tbl_job_card_post_press_packaging_details = DB::select("select * from tbl_job_card_post_press_packaging_details where job_card_id='".$jobcard_id."'");

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
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $pcs; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $item_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $length; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $width; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $height; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $unit_name; ?></td>

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
	<b><h3><?php echo "Packaging Details"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">PCs</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Items</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Length</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Width</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">height</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units	</th>

	</tr>
	<tr>
		<td colspan="6" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>


<br/>
<b><h3><?php echo "Hotspot Carbon "; ?></h3></b>

<b><?php echo "Width :"; ?></b><?php echo $hotspot_carbon_width; ?><br/><br/>
<b><?php echo "Height :"; ?></b><?php echo $hotspot_carbon_height; ?><br/><br/>
<b><?php echo "Carbon behind ply no :"; ?></b><?php echo $hotspot_carbon_behind_ply_no; ?><br/><br/>

















<!-- process selection -->
<br/>

<h2><center><u>Process Selection</u></center></h2>




<br/>

<?php

//echo $jobcard_id;die;
$job_card_process_selection_pre_press_count=0;
$tbl_job_card_process_selection_pre_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_pre_press where job_card_id='".$jobcard_id."'");
foreach($tbl_job_card_process_selection_pre_press_count as $tbl_job_card_process_selection_pre_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_pre_press_count=$tbl_job_card_process_selection_pre_press_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_process_selection_pre_press_count!=0)
{
?>



<b><h3><?php echo "Pre Press"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<?php
	$tbl_job_card_process_selection_pre_press = DB::select("select * from tbl_job_card_process_selection_pre_press where job_card_id='".$jobcard_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_process_selection_pre_press as $tbl_job_card_process_selection_pre_press)
	{

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

		$basicmachine_name="";

		if($basicmachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$basicmachine."'");

			$basicmachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$basicmachine_name=$tbl_machine_master->name;
			}
		}

		$alternativemachine_name="";

		if($alternativemachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$alternativemachine."'");

			$alternativemachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$alternativemachine_name=$tbl_machine_master->name;
			}
		}

		$qc_name="";

		if($qc!="")
		{
			$mst_qc   = DB::select("select mq.id as id,tpm.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where mq.id='".$qc."'");

			$qc_name="";
			foreach($mst_qc as $mst_qc)
			{
				$qc_name=$mst_qc->name;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $basicmachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $alternativemachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $qc_name; ?></td>

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
	<b><h3><?php echo "Pre Press"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<tr>
		<td colspan="4" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>





<br/>

<?php

//echo $jobcard_id;die;
$job_card_process_selection_press_count=0;
$tbl_job_card_process_selection_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_press where job_card_id='".$jobcard_id."'");
foreach($tbl_job_card_process_selection_press_count as $tbl_job_card_process_selection_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_press_count=$tbl_job_card_process_selection_press_count->totalcount;
}

//echo $job_card_post_press_count;die;
if($job_card_process_selection_press_count!=0)
{
?>



<b><h3><?php echo "Press"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<?php
	$tbl_job_card_process_selection_press = DB::select("select * from tbl_job_card_process_selection_press where job_card_id='".$jobcard_id."'");

	//var_dump($tbl_job_card_process_selection_press);die;

	foreach($tbl_job_card_process_selection_press as $tbl_job_card_process_selection_press)
	{

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

		$basicmachine_name="";

		if($basicmachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$basicmachine."'");

			$basicmachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$basicmachine_name=$tbl_machine_master->name;
			}
		}

		$alternativemachine_name="";

		if($alternativemachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$alternativemachine."'");

			$alternativemachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$alternativemachine_name=$tbl_machine_master->name;
			}
		}

		$qc_name="";

		if($qc!="")
		{
			$mst_qc   = DB::select("select mq.id as id,tpm.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where mq.id='".$qc."'");

			$qc_name="";
			foreach($mst_qc as $mst_qc)
			{
				$qc_name=$mst_qc->name;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $basicmachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $alternativemachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $qc_name; ?></td>

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
	<b><h3><?php echo "Press"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
	<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<tr>
		<td colspan="4" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>


<br/>

<?php

//echo $jobcard_id;die;
$job_card_process_selection_post_press_count=0;
$tbl_job_card_process_selection_post_press_count = DB::select("select count(*) as totalcount from tbl_job_card_process_selection_post_press where job_card_id='".$jobcard_id."'");
foreach($tbl_job_card_process_selection_post_press_count as $tbl_job_card_process_selection_post_press_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_process_selection_post_press_count=$tbl_job_card_process_selection_post_press_count->totalcount;
}

//echo $job_card_paper_count;die;
if($job_card_process_selection_post_press_count!=0)
{
?>



<b><h3><?php echo "Post Press"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<?php
	$tbl_job_card_process_selection_post_press = DB::select("select * from tbl_job_card_process_selection_post_press where job_card_id='".$jobcard_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_process_selection_post_press as $tbl_job_card_process_selection_post_press)
	{

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

		$basicmachine_name="";

		if($basicmachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$basicmachine."'");

			$basicmachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$basicmachine_name=$tbl_machine_master->name;
			}
		}

		$alternativemachine_name="";

		if($alternativemachine!="")
		{
			$tbl_machine_master   = DB::select("select * from tbl_machine_master where id='".$alternativemachine."'");

			$alternativemachine_name="";
			foreach($tbl_machine_master as $tbl_machine_master)
			{
				$alternativemachine_name=$tbl_machine_master->name;
			}
		}

		$qc_name="";

		if($qc!="")
		{
			$mst_qc   = DB::select("select mq.id as id,tpm.name as name from mst_qc mq left join tbl_process_master tpm on tpm.id=mq.process where mq.id='".$qc."'");

			$qc_name="";
			foreach($mst_qc as $mst_qc)
			{
				$qc_name=$mst_qc->name;
			}
		}
	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $process_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $basicmachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $alternativemachine_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $qc_name; ?></td>

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
	<b><h3><?php echo "Post Press"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
	<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Process</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Basic Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Alternative Machine</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">QC</th>
	</tr>
	<tr>
		<td colspan="4" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>


<br/>
<h2><center><u>Material Requirement</u></center></h2>
<!-- Material Requirement -->
<br/>

<?php

//echo $jobcard_id;die;
$job_card_material_requirement_count=0;
$tbl_job_card_material_requirement_count = DB::select("select count(*) as totalcount from tbl_job_card_material_requirement where job_card_id='".$jobcard_id."'");
//var_dump($tbl_job_card_material_requirement_count);die;
foreach($tbl_job_card_material_requirement_count as $tbl_job_card_material_requirement_count)
{
	//var_dump($tbl_plants_count);die;
	$job_card_material_requirement_count=$tbl_job_card_material_requirement_count->totalcount;
}

//echo $job_card_material_requirement_count;die;
if($job_card_material_requirement_count!=0)
{
?>



<b><h3><?php echo "Material Requirement"; ?></h3></b>
<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">RM Category</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Type</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">RM Item</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Wastage allowed</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Pcs</th>
	</tr>
	<?php
	$tbl_job_card_material_requirement = DB::select("select * from tbl_job_card_material_requirement where job_card_id='".$jobcard_id."'");

	//var_dump($tbl_job_card_paper);die;

	foreach($tbl_job_card_material_requirement as $tbl_job_card_material_requirement)
	{

		$rm_category=$tbl_job_card_material_requirement->rm_category;
		$type=$tbl_job_card_material_requirement->type;
		$rm_item=$tbl_job_card_material_requirement->rm_item;
		$quantity=$tbl_job_card_material_requirement->quantity;
		$units=$tbl_job_card_material_requirement->units;
		$wastage_allowed=$tbl_job_card_material_requirement->wastage_allowed;
		$pcs=$tbl_job_card_material_requirement->pcs;

		$rm_category_name="";
		if($rm_category!="")
		{

			$tbl_rm_category   = DB::select("select * from tbl_rm_category where id='".$rm_category."'");

			$rm_category_name="";
			foreach($tbl_rm_category as $tbl_rm_category)
			{
				$rm_category_name=$tbl_rm_category->name;
			}
		}

		$type_name="";

		if($type!="")
		{
			$tbl_rm_product_category   = DB::select("select * from tbl_rm_product_category where id='".$type."'");

			$type_name="";
			foreach($tbl_rm_product_category as $tbl_rm_product_category)
			{
				$type_name=$tbl_rm_product_category->name;
			}
		}

		$rm_item_name="";

		if($rm_item!="")
		{
			$tbl_material   = DB::select("select * from tbl_material where id='".$rm_item."'");

			$rm_item_name="";
			foreach($tbl_material as $tbl_material)
			{
				$rm_item_name=$tbl_material->name;
			}
		}

		$units_name="";

		if($units!="")
		{
			$mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

			$units_name="";
			foreach($mst_unit as $mst_unit)
			{
				$units_name=$mst_unit->description;
			}
		}


	?>
	<tr>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $rm_category_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $type_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $rm_item_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $quantity; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $units_name; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $wastage_allowed; ?></td>
		<td style="border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;"><?php echo $pcs; ?></td>

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
	<b><h3><?php echo "Material Requirement"; ?></h3></b>
	<table id='maintable1' style='width:100% !important;border: 1px solid black;border-collapse: collapse;padding-top:15px;'>
	<tr>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">RM Category</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Type</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">RM Item</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Quantity</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Units</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Wastage allowed</th>
		<th style="text-align:left;border: 1px solid black;border-collapse: collapse;padding: 5px;vertical-align:top;">Pcs</th>
	</tr>
	<tr>
		<td colspan="7" style="text-align:center;padding-top:10px;padding-bottom:10px">No data available</td>
	</tr>
	</table>
	<?php
}
?>






		</main>
</body>
</html>

