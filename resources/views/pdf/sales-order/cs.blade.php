<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
    {{-- @if ($product_category == 3 || $product_category == 7) --}}
        <style>
            .print
            {
                position: relative;
                top: -97px;
            }
        </style>
        <style type="text/css">
            .firsttd
            {
                border-style: solid;
            }
        </style>
    {{-- @endif --}}
</head>
<body>
    <table cellpadding="0" cellspacing="0" border="0" style="width: 100%; height: 100%;">
        <tr>
            <td align="center">
                <strong>Job Card</strong>
            </td>
        </tr>
        <tr>
            <td>
                <table cellpadding="5" cellspacing="0" border="0" style="width: 100%;" align="center">
                    <tr>
                        <td>
                            <table style="width: 100%" border="0">
                                <tr>
                                    <td style="height: 5px">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 50%" valign="top">
                                        Devharsh Infotech Pvt Ltd - Bhiwandi Factory <br />
                                        <b>Customer Details : </b> {{ $customer_name_description ?? '' }}
                                    </td>
                                    <td style="width: 50%" valign="top">
                                        <b>Sales Order No : </b> {{ $order_no ?? '' }}<br />
                                                <b>SO Date : </b> {{ $sales_order_date ?? '' }}&nbsp;&nbsp;
                                                <b>Shipment Date : </b> {{ $target_delivery_date ?? '' }}

                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 1px">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 80%">
                            <table cellpadding="2" cellspacing="0" border="0" style="width: 100%">
                                <tr>
                                    <td>
                                        <table cellpadding="0" cellspacing="" style="width: 100%"
                                                    border="1">
                                                    <tr>
                                                        <td align="center">
                                                            JC No
                                                        </td>
                                                        <td align="center">
                                                            Prod. Category
                                                        </td>
                                                        <td align="center">
                                                            Item
                                                        </td>
                                                        <td align="center">
                                                            Size
                                                        </td>
                                                        <td align="center">
                                                            Ply
                                                        </td>
                                                        <td align="center">
                                                            Quantity
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left">
                                                            <?php echo $job_card_no  ?? ''; ?>
                                                        </td>
                                                        <td align="left">
                                                            <?php echo $product_category_name  ?? ''; ?>
                                                        </td>
                                                        <td align="left">
                                                            <?php echo $job_card_title  ?? ''; ?>
                                                        </td>
                                                        <td align="left">
                                                            <?php echo $size  ?? ''; ?>
                                                        </td>
                                                        <td align="left">
                                                            <?php echo $part_ply  ?? ''; ?>
                                                        </td>
                                                        <td align="left">
                                                            {{ $quantity  ?? '' }} {{ $quantity_unit_name  ?? ''  }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" align="right">
                                                            Quantity In Words :-
                                                        </td>
                                                        <td colspan="4" style="border: 1px solid black">
                                                            <span id="container" class="red"
                                                                style="font-size: bold;"></span>
                                                                {{ $word  ?? '' }} {{  $quantity_unit_name  ?? ''  }}
                                                        </td>
                                                    </tr>
                                                </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 8px" align="right">

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%" border="0">
                                            <tr>
                                                <td>
                                                </td>
                                                <td width="40%" valign="top">
                                                    <table style="width: 100%" border="0">
                                                        <tr>
                                                            <td>
                                                                <table style="width: 100%" border="1">
                                                                    <tr>
                                                                        <td>
                                                                            <span id="Label22" style="font-weight: 700">JC Instructions</span>
                                                                            :
                                                                            <span id="lblInstructions"> {!! nl2br(e(special_instructions)) ?? '' !!}</span>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <span id="Label2" style="font-weight: 700">SO Instructions</span>
                                                                            :
                                                                            <span id="lblJCInstruction">  {!! nl2br(e(job_instruction)) ?? '' !!}</span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        @php
                                                            $tbl_job_card_position = \DB::table('tbl_job_card_position')->where('job_card_id',$job_card_id)->get();
                                                        @endphp
                                                        @if (count($tbl_job_card_position) > 0)
                                                            <tr>
                                                                <td valign="top" width="30%">
                                                                    <div id="DivPerforation">
                                                                        <strong>Perforation Details - </strong>
                                                                        <div>
                                                                            <table cellspacing="0" cellpadding="0" rules="all"
                                                                            id="grdvwManageSalesWorkOrder"
                                                                            style="background-color:White;border-width:1px;border-style:Inset;font-size:11pt;width:100%;border-collapse:collapse;">
                                                                                <tr>
                                                                                    <th>Position</th>
                                                                                    <th>Direction</th>
                                                                                </tr>
                                                                                @foreach ($tbl_job_card_position as $position)
                                                                                    <tr>
                                                                                        <td>{{ $position->position ?? '' }}</td>
                                                                                        <td>
                                                                                            @php
                                                                                                $position_direction = DB::table('tbl_direction')->where('id',$position->direction)->first();
                                                                                            @endphp
                                                                                            {{ $position_direction->description ?? '' }}
                                                                                        </td>
                                                                                    </tr>
                                                                                @endforeach

                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endif

                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span id="Label31" style="font-weight: 700">Print Specification</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%" border="0">
                                            <tr>
                                                <td>
                                                    <div>
                                                        <table cellspacing="0" cellpadding="0" rules="all"
                                                            id="grdvwManageSalesWorkOrder"
                                                            style="background-color:White;border-width:1px;border-style:Inset;font-size:11pt;width:100%;border-collapse:collapse;">
                                                            <tr>
                                                                <th scope="col">Ply</th>
                                                                <th scope="col">GSM</th>
                                                                <th scope="col">Paper Size</th>
                                                                <th scope="col">Make</th>
                                                                <th scope="col">Paper Shade</th>
                                                                <th scope="col">Front Colors</th>
                                                                <th scope="col">Back Colors</th>
                                                                <th scope="col">Copy Mark</th>
                                                                <th scope="col">Remark</th>
                                                            </tr>

                                                            <?php
                                                        $tbl_job_card_paper = DB::select("select * from tbl_job_card_paper where job_card_id='".$job_card_id."'");
                                                        $count=1;
                                                        foreach($tbl_job_card_paper as $tbl_job_card_paper){
                                                            $paper_id=$tbl_job_card_paper->id;
                                                            $paper_thick=$tbl_job_card_paper->paper_thick;
                                                            $paper_make=$tbl_job_card_paper->paper_make;
                                                            $paper_width=$tbl_job_card_paper->width;
                                                            $paper_unit=$tbl_job_card_paper->unit;
                                                            if($paper_unit){
                                                                $mst_unit = DB::table('mst_unit')->where('id',$paper_unit)->first();
                                                                $paper_unit_name = $mst_unit->description ?? '';
                                                            }else{
                                                                $paper_unit_name = '';
                                                            }
                                                            $mst_paper_make   = DB::select("select * from mst_paper_make where id='".$paper_make."'");
                                                            $paper_make_name="";
                                                            foreach($mst_paper_make as $mst_paper_make){
                                                                $paper_make_name=$mst_paper_make->description;
                                                            }
                                                            $color_shade=$tbl_job_card_paper->color_shade;
                                                            $mst_paper_color_shade   = DB::select("select * from mst_paper_color_shade where id='".$color_shade."'");
                                                            $mst_color_shade_name="";
                                                            foreach($mst_paper_color_shade as $mst_paper_color_shade){
                                                                $mst_color_shade_name=$mst_paper_color_shade->description;
                                                            }
                                                            $front_side_color=$tbl_job_card_paper->front_side_color;
                                                            $front_side_color_arr = explode(",",$front_side_color);
                                                            $front_side_color_name="";
                                                            if(sizeof($front_side_color_arr)>0)
                                                            {
                                                                foreach ($front_side_color_arr as $key => $title) {
                                                                    $mst_color_master   = DB::select("select * from mst_color_master where id='".$title."'");
                                                                    foreach($mst_color_master as $mst_color_master){
                                                                        $front_side_color_name.=$mst_color_master->description.",";
                                                                    }
                                                                 }
                                                            }
                                                            $front_side_color_name=trim($front_side_color_name,",");
                                                            $back_side_color=$tbl_job_card_paper->back_side_color;

                                                            $mst_color_master   = DB::select("select * from mst_color_master where id='".$back_side_color."'");

                                                            $back_side_color_arr = explode(",",$back_side_color);
                                                            $back_side_color_name="";
                                                            if(sizeof($back_side_color_arr)>0)
                                                            {
                                                                foreach ($back_side_color_arr as $key => $title) {
                                                                    $mst_color_master = DB::select("select * from mst_color_master where id='".$title."'");
                                                                    foreach($mst_color_master as $mst_color_master)
                                                                    {
                                                                        $back_side_color_name.=$mst_color_master->description.",";
                                                                    }
                                                                }
                                                            }

                                                            $back_side_color_name=trim($back_side_color_name,",");

                                                            $front_side_coating=$tbl_job_card_paper->front_side_coating;
                                                            $back_side_coating=$tbl_job_card_paper->back_side_coating;

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
                                                                <td align="center" style="width:3px;">
                                                                    <?php echo $count++  ?? '' ; ?></td>
                                                                <td><?php echo $paper_thick ?? '' . ' ' . 'Gsm'  ?? ''; ?></td>
                                                                <!-- <td> <?php echo $size ?? ''; ?></td> -->
                                                                <td>{{$paper_width}} {{$paper_unit_name}}</td>

                                                                <td><?php echo $paper_make_name  ?? ''; ?></td>
                                                                <td align="center"><?php echo $mst_color_shade_name  ?? ''; ?></td>
                                                                <td> <?php echo $front_side_color_name  ?? ''; ?></td>
                                                                <td> <?php echo $back_side_color_name  ?? ''; ?></td>
                                                                <td align="center"> {{ $copy_mark ?? '' }}</td>
                                                                <td align="center"><?php echo $remark  ?? ''; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                        </table>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table style="width: 100%" border="0">
                                            <tr>
                                                <td>
                                                    <span id="Label10" style="font-weight: 700">Pre Press : </span>
                                                    <span id="lblPlateDetails" style="font-weight: 700">Colour Details</span>
                                                </td>
                                                <td id="InkDetails">
                                                    <span id="Label32" style="font-weight: 700">Ink Details: </span>
                                                </td>

                                            </tr>
                                            <tr>
                                                <td valign="top">
                                                    <div>
                                                        <table cellspacing="0" cellpadding="4" rules="all"
                                                            id="grvcolor"
                                                            style="background-color:White;border-width:1px;border-style:Inset;width:100%;border-collapse:collapse;">
                                                            <tr>
                                                                <th scope="col">Color</th>
                                                                <th scope="col">Film Type</th>
                                                                <th scope="col">Ply</th>
                                                            </tr>
                                                            <?php

                                                                $tbl_job_card_pre_press_count=0;

                                                                $tbl_job_card_pre_press_count_data = DB::select("select count(*) as totalcount from tbl_job_card_pre_press where job_card_id='".$job_card_id."'");
                                                                foreach($tbl_job_card_pre_press_count_data as $tbl_job_card_pre_press_count_data){
                                                                    $tbl_job_card_pre_press_count=$tbl_job_card_pre_press_count_data->totalcount;
                                                                }

                                                                $pre_press_id="";
                                                                $length="";
                                                                $width="";
                                                                $thickness="";
                                                                $pre_press_length_unit="";
                                                                $pre_press_width_unit="";
                                                                $pre_press_thickness_unit="";
                                                                $pre_press_length_unit_name="";
                                                                $pre_press_width_unit_name="";
                                                                $pre_press_thickness_unit_name="";
                                                                $columns=0;
                                                                $row=0;

                                                                if($tbl_job_card_pre_press_count!=0)
                                                                {
                                                                    $tbl_job_card_pre_press = DB::select("select * from tbl_job_card_pre_press where job_card_id='".$job_card_id."'");
                                                                    // dd($job_card_id);
                                                                    // dd($tbl_job_card_pre_press);
                                                                    if(is_array($tbl_job_card_pre_press))
                                                                    {
                                                                        foreach($tbl_job_card_pre_press as $tbl_job_card_pre_press)
                                                                        {

                                                                            $pre_press_id=$tbl_job_card_pre_press->id;
                                                                            $length=$tbl_job_card_pre_press->length;
                                                                            $width=$tbl_job_card_pre_press->width;
                                                                            $thickness=$tbl_job_card_pre_press->thickness;
                                                                            $pre_press_length_unit=$tbl_job_card_pre_press->length_unit;
                                                                            $columns=$tbl_job_card_pre_press->columns;
                                                                            $row=$tbl_job_card_pre_press->rows;

                                                                            if($pre_press_length_unit!="")
                                                                            {
                                                                                $mst_unit = DB::select("select * from mst_unit where id=$pre_press_length_unit");

                                                                                foreach($mst_unit as $mst_unit)
                                                                                {
                                                                                    $pre_press_length_unit_name=$mst_unit->description;
                                                                                }
                                                                            }
                                                                            $pre_press_width_unit=$tbl_job_card_pre_press->width_unit;

                                                                            if($pre_press_width_unit!="")
                                                                            {
                                                                                $mst_unit = DB::select("select * from mst_unit where id=$pre_press_width_unit");

                                                                                foreach($mst_unit as $mst_unit)
                                                                                {
                                                                                    $pre_press_width_unit_name=$mst_unit->description;
                                                                                }
                                                                            }

                                                                            $pre_press_thickness_unit=$tbl_job_card_pre_press->thickness_unit;

                                                                            if($pre_press_thickness_unit!="")
                                                                            {
                                                                                $mst_unit = DB::select("select * from mst_unit where id=$pre_press_thickness_unit");

                                                                                foreach($mst_unit as $mst_unit)
                                                                                {
                                                                                    $pre_press_thickness_unit_name=$mst_unit->description;
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                    $tbl_job_card_pre_press_color = DB::select("select * from tbl_job_card_pre_press_color where pre_press_id='".$pre_press_id."'");

                                                                    foreach($tbl_job_card_pre_press_color as $tbl_job_card_pre_press_color)
                                                                    {
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
                                                                                foreach($mst_color_master as $mst_color_master)
                                                                                {
                                                                                    $color_name.=$mst_color_master->description.",";
                                                                                }
                                                                            }

                                                                        }

                                                                        $color_name=trim($color_name,",");
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
                                                                <td><?php echo $color_name ?? ''; ?></td>
                                                                <td><?php echo $film_type_name ?? ''; ?></td>
                                                                <td><?php echo $ply ?? ''; ?></td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            }
                                                            ?>
                                                        </table>
                                                    </div>
                                                </td>
                                                @php
                                                    $colorShadeCompanyArray = [];
                                                    $pre_press_details = DB::table('tbl_job_card_pre_press')->where('job_card_id',$job_card_id)->first();
                                                    $pre_press_id=$pre_press_details->id;
                                                    $tbl_job_card_pre_press_color = DB::select("select * from tbl_job_card_pre_press_color where pre_press_id='$pre_press_id'");
                                                    foreach ($tbl_job_card_pre_press_color as $tbl_job_card_pre_press_color) {
                                                        $color = $tbl_job_card_pre_press_color->color;
                                                        $pre_press_color_id = $tbl_job_card_pre_press_color->id;

                                                        $color_arr = explode(",", $color);
                                                        $ink_color = "";

                                                        if (sizeof($color_arr) > 0) {
                                                            foreach ($color_arr as $key => $title) {
                                                                $mst_color_master = DB::select("select * from mst_color_master where id='$title'");
                                                                foreach ($mst_color_master as $mst_color_master) {
                                                                    $ink_color .= $mst_color_master->description . ",";
                                                                }
                                                            }
                                                        }

                                                        $ink_color = trim($ink_color, ",");

                                                        $tbl_job_card_press_ink_details = DB::select("select * from tbl_job_card_press_ink_details where pre_press_color_id='$pre_press_color_id'");
                                                        $ink_shade = "";
                                                        $ink_company = "";

                                                        if (!empty($tbl_job_card_press_ink_details)) {
                                                            foreach ($tbl_job_card_press_ink_details as $tbl_job_card_press_ink_detail) {
                                                                $ink_shade = $tbl_job_card_press_ink_detail->ink_shade;
                                                                $ink_company = $tbl_job_card_press_ink_detail->ink_company;
                                                                $id = $tbl_job_card_press_ink_detail->id;

                                                                $colorShadeCompanyArray[] = [
                                                                    'color' => $ink_color,
                                                                    'shade' => $ink_shade,
                                                                    'company' => $ink_company,
                                                                    'id' => $id,
                                                                ];
                                                            }
                                                        }
                                                    }
                                                    $uniqueColorShadeCompanyArray = array_unique($colorShadeCompanyArray, SORT_REGULAR);
                                                @endphp
                                                @if (count($uniqueColorShadeCompanyArray) > 0 )
                                                    <td valign="top">
                                                        <div>
                                                            <table cellspacing="0" cellpadding="4" rules="all" id="grvInkDetails" style="background-color:White;border-width:1px;border-style:Inset;width:100%;border-collapse:collapse;">
                                                                <tr>
                                                                    <th scope="col">Color </th>
                                                                    <th scope="col">Shade</th>
                                                                    <th scope="col">Company</th>
                                                                </tr>
                                                                @foreach ($uniqueColorShadeCompanyArray as $entry)
                                                                    <tr>
                                                                        <td>{{ $entry['color']  ?? '' }} {{ $entry['id'] }}</td>
                                                                        <td>
                                                                            @php
                                                                                $shade_id = $entry['shade'];
                                                                                $shade_name = DB::table('mst_color_shade')->where('id', $shade_id)->value('description');
                                                                            @endphp
                                                                            {{ $shade_name }}
                                                                        </td>
                                                                        <td>
                                                                            @php
                                                                                $company_id = $entry['company'];
                                                                                $company_name = DB::table('mst_ink_make')->where('id', $company_id)->value('description');
                                                                            @endphp
                                                                            {{ $company_name }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            @php
                                                $collating_width = '';
                                                $collating_type = '';
                                                $collating_between_ply = '';
                                                $collating_carbon_option = '';
                                                $numbering_position = '';
                                                $numbering_style = '';
                                                $numbering_skip = '';
                                                $numbering_sequence = '';
                                                $numbering_orientation = '';
                                                $gumming_position = '';
                                                $gumming_gum_make = '';
                                                $gumming_between = '';
                                                $gumming_quantity = '';
                                                $hotspot_carbon_width = '';
                                                $hotspot_carbon_height = '';
                                                $hotspot_carbon_behind_ply_no = '';
                                                $cutting_width = '';
                                                $cutting_width_unit = '';
                                                $cutting_length = '';
                                                $cutting_length_unit = '';
                                                $cutting_core_size = '';
                                                $barcode_type = '';
                                                $barcode_height = '';
                                                $barcode_width = '';
                                                $barcode_orientation = '';
                                                $barcode_human_readable_text_to_show = '';
                                                $baby_roll_making_coating_side = '';
                                                $post_press = DB::table('tbl_job_card_post_press')->where('job_card_id',$job_card_id)->get();
                                                // dd($post_press);
                                                foreach ($post_press as $key => $value) {
                                                    $collating_width = $value->collating_width;
                                                    $collating_type = $value->collating_type;
                                                    $collating_between_ply = $value->collating_between_ply;
                                                    $collating_carbon_option = $value->collating_carbon_option;

                                                    $numbering_position = $value->numbering_position;
                                                    $numbering_style = $value->numbering_style;
                                                    $numbering_skip = $value->numbering_skip;
                                                    $numbering_sequence = $value->numbering_sequence;
                                                    $numbering_orientation = $value->numbering_orientation;

                                                    $gumming_position = $value->gumming_position;
                                                    $gumming_gum_make = $value->gumming_gum_make;
                                                    $gumming_between = $value->gumming_between;
                                                    $gumming_quantity = $value->gumming_quantity;

                                                    $hotspot_carbon_width = $value->hotspot_carbon_width;
                                                    $hotspot_carbon_height = $value->hotspot_carbon_height;
                                                    $hotspot_carbon_behind_ply_no = $value->hotspot_carbon_behind_ply_no;

                                                    $cutting_width = $value->cutting_width;
                                                    $cutting_width_unit = $value->cutting_width_unit;
                                                    $cutting_length = $value->cutting_length;
                                                    $cutting_length_unit = $value->cutting_length_unit;
                                                    $cutting_core_size = $value->cutting_core_size;

                                                    $cutting_width_unit_name = "";
                                                    $mst_unit   = DB::select("select * from mst_unit where id='".$cutting_width_unit."'");
                                                    foreach($mst_unit as $mst_unit)
                                                    {
                                                        $cutting_width_unit_name=$mst_unit->description;
                                                    }
                                                    $mst_unit   = DB::select("select * from mst_unit where id='".$cutting_length_unit."'");
                                                    $cutting_length_name ="";
                                                    foreach($mst_unit as $mst_unit)
                                                    {
                                                        $cutting_length_name=$mst_unit->description;
                                                    }

                                                    $barcode_type = $value->barcode_type;
                                                    $barcode_height = $value->barcode_height;
                                                    $barcode_width = $value->barcode_width;
                                                    $barcode_orientation = $value->barcode_orientation;
                                                    $barcode_human_readable_text_to_show = $value->barcode_human_readable_text_to_show;
                                                    $baby_roll_making_coating_side = $value->baby_roll_making_coating_side;
                                                }
                                            @endphp
                                            @if (count($post_press) > 0 )
                                                {{-- Number --}}
                                                @if ($numbering_position != '' && $numbering_style != '' && $numbering_skip != '' && $numbering_sequence != '' && $numbering_orientation != '')
                                                    <tr>
                                                        <td width="60%" valign="top">
                                                            <span id="Label16" style="font-weight: 700">Numbering :</span>
                                                            <br />
                                                            <span id="Label33">Position  :</span>&nbsp;
                                                            <span id="lblInkLength"><?php echo $numbering_position; ?></span>&nbsp;
                                                            {{-- <span id="lblInkLengthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label35">Style  :</span>
                                                            <span id="lblInkWidth"> <?php echo $numbering_style; ?></span>&nbsp;
                                                            {{-- <span id="lblInkWidthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Skips  :</span>
                                                            <span id="lblInkThickness"><?php echo $numbering_skip; ?></span>
                                                            {{-- <span id="lblInkThicknessUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Sequence :</span>
                                                            <span id="lblInkThickness"><?php echo $numbering_sequence; ?></span>
                                                            <span id="Label34">Orientation :</span>
                                                            <span id="lblInkThickness">
                                                                @php
                                                                    $orientation = DB::table('tbl_orientation')->where('id',$numbering_orientation)->first();
                                                                @endphp
                                                                {{ $orientation->description ?? '' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endif
                                                {{-- collating --}}
                                                @if ($collating_width != '' && $collating_type != '' && $collating_between_ply != '' && $collating_carbon_option != '')
                                                    <tr>
                                                        <td width="60%" valign="top">
                                                            <span id="Label16" style="font-weight: 700">Collating :</span>
                                                            <br />
                                                            <span id="Label33">Width  :</span>&nbsp;
                                                            <span id="lblInkLength"><?php echo $collating_width ?? ''; ?></span>&nbsp;
                                                            {{-- <span id="lblInkLengthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label35">Type  :</span>
                                                            <span id="lblInkWidth">
                                                                @php
                                                                    $type = DB::table('tbl_collating_type')->where('id',$collating_type)->first();
                                                                @endphp
                                                                {{ $type->description ?? '' }}
                                                            </span>&nbsp;
                                                            {{-- <span id="lblInkWidthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Ply :</span>
                                                            <span id="lblInkThickness"><?php echo $collating_between_ply ?? ''; ?></span>
                                                            {{-- <span id="lblInkThicknessUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Carbon Option :</span>
                                                            <span id="lblInkThickness">
                                                                @php
                                                                    $carbon = DB::table('tbl_carbon_option')->where('id',$collating_carbon_option)->first();
                                                                @endphp
                                                                {{ $carbon->description ?? '' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endif
                                                {{-- gumming --}}
                                                @if ($gumming_position != '' && $gumming_gum_make != '' && $gumming_between != '' && $gumming_quantity != '')
                                                    <tr>
                                                        <td width="60%" valign="top">
                                                            <span id="Label16" style="font-weight: 700">Gumming Details:</span>
                                                            <br />
                                                            <span id="Label33">Position  :</span>&nbsp;
                                                            <span id="lblInkLength"><?php echo $gumming_position; ?></span>&nbsp;
                                                            {{-- <span id="lblInkLengthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label35">Gum Make  :</span>
                                                            <span id="lblInkWidth">
                                                                @php
                                                                    $make = DB::table('mst_gum_make')->where('id',$gumming_gum_make)->first();
                                                                @endphp
                                                                {{ $make->description ?? '' }}
                                                            </span>&nbsp;
                                                            {{-- <span id="lblInkWidthUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Gumming between  :</span>
                                                            <span id="lblInkThickness"><?php echo $gumming_between; ?></span>
                                                            {{-- <span id="lblInkThicknessUnit">mm</span>&nbsp; --}}
                                                            <span id="Label34">Quantity (Per 1000 Prints)   :</span>
                                                            <span id="lblInkThickness"><?php echo $gumming_quantity; ?></span>
                                                        </td>
                                                    </tr>
                                                @endif

                                                 {{-- Hotspot --}}
                                                 @if ($hotspot_carbon_width != '' && $hotspot_carbon_height != '' && $hotspot_carbon_behind_ply_no != '')
                                                 <tr>
                                                     <td width="60%" valign="top">
                                                         <span id="Label16" style="font-weight: 700">Hotspot Carbon :</span>
                                                         <br />
                                                         <span id="Label33">Width   :</span>&nbsp;
                                                         <span id="lblInkLength"><?php echo $hotspot_carbon_width; ?></span>&nbsp;
                                                         {{-- <span id="lblInkLengthUnit">mm</span>&nbsp; --}}
                                                         <span id="Label35">Height  :</span>
                                                         <span id="lblInkWidth"> <?php echo $hotspot_carbon_height;?></span>&nbsp;
                                                         {{-- <span id="lblInkWidthUnit">mm</span>&nbsp; --}}
                                                         <span id="Label34">Carbon behind ply no.  :</span>
                                                         <span id="lblInkThickness"><?php echo $hotspot_carbon_behind_ply_no; ?></span>
                                                         {{-- <span id="lblInkThicknessUnit">mm</span>&nbsp; --}}
                                                     </td>
                                                 </tr>
                                                 @endif

                                            @endif
                                            <tr>
                                                <td>

                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table>
                                            <tr>
                                                <td width="60%" valign="top">
                                                    <span id="Label16" style="font-weight: 700">Plate Details :-</span>
                                                    <br />
                                                    <span id="Label33">Length :</span>&nbsp;
                                                    <span id="lblInkLength">{{ $length ?? '' }} {{ $pre_press_length_unit_name ?? '' }}</span>&nbsp;
                                                    {{-- <span id="lblInkLengthUnit">mm</span>&nbsp; --}}
                                                    <span id="Label35">Width :</span>
                                                    <span id="lblInkWidth"> {{ $width ?? '' }} {{ $pre_press_width_unit_name ?? '' }}</span>&nbsp;
                                                    {{-- <span id="lblInkWidthUnit">mm</span>&nbsp; --}}
                                                    <span id="Label34">Thickness :</span>
                                                    <span id="lblInkThickness">{{ $thickness ?? '' }} {{ $pre_press_thickness_unit_name ?? '' }}</span>
                                                    {{-- <span id="lblInkThicknessUnit">mm</span>&nbsp; --}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table style="width: 100%" border="0">
                                                        <tr>
                                                            <td width="60%" valign="top">
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            <span id="Label9"
                                                                                style="font-weight: 700">Print
                                                                                Up Design : </span>&nbsp;&nbsp;


                                                                            &nbsp;&nbsp;<br />
                                                                            <br />

                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div>
                                                                                <table cellspacing="0"
                                                                                    cellpadding="4"
                                                                                    rules="all"
                                                                                    id="grvPrintQty"
                                                                                    style="background-color:White;border-width:1px;border-style:Inset;width:400px;border-collapse:collapse;">
                                                                                    <tr>
                                                                                        <th scope="col">Ply
                                                                                        </th>
                                                                                        <th scope="col">
                                                                                            Print Size</th>
                                                                                        <th scope="col">
                                                                                            Print Qty</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td><?php echo $part_ply ?? ''; ?>
                                                                                        </td>
                                                                                        <td><?php echo $size ?? ''; ?>
                                                                                        </td>
                                                                                        <td><?php echo $quantity  ?? '' . ' ' . $quantity_unit_name ?? ''; ?>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </div>
                                                                            <span
                                                                                id="lblPrintQualityValueUnits"></span>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>

                                                            {{-- table of ply --}}
                                                            <td valign="top" width="40%">
                                                                <table cellspacing="3" cellpadding="3" border="1"
                                                                style="background-color:White;border-width:1px;border-style:Inset;border-collapse:collapse;">
                                                                    <?php
                                                                //     $columns=0;
                                                                // $row=0;
                                                                    $rowCount = $row;
                                                                    $colCount = $columns;
                                                                    $no = 1;
                                                                    for ($i = 1; $i <= $rowCount; $i++) {
                                                                        echo "<tr>";
                                                                        for ($j = 1; $j <= $colCount; $j++) {
                                                                            echo "<td> <table border='1' cellspacing='0' cellpadding='1'> <tr><td>$no</td></tr></table></td>";
                                                                            $no++;
                                                                        }
                                                                        echo "</tr>";
                                                                    }
                                                                    ?>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr id="Packaging">
                                    <td width="83%">
                                        <span id="Label27"
                                            style="font-weight: 700">Packaging</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                    </td>
                                </tr>

                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <table cellspacing="0" cellpadding="0" rules="all"
                                                border="1" id="grvPackagingDetails"
                                                style="width:100%;border-collapse:collapse;">
                                                <tr>
                                                    <th scope="col">Pcs</th>
                                                    <th scope="col">Items</th>
                                                    <th scope="col">Length</th>
                                                    <th scope="col">Width</th>
                                                    <th scope="col">height</th>
                                                    <th scope="col">Units</th>
                                                </tr>
                                                <?php
                                                    $job_card_post_press_packaging_details_count = 0;
                                                    $tbl_job_card_post_press_packaging_details_count = DB::select("select count(*) as totalcount from tbl_job_card_post_press_packaging_details where job_card_id='" . $job_card_id . "'");
                                                    foreach ($tbl_job_card_post_press_packaging_details_count as $tbl_job_card_post_press_packaging_details_count) {
                                                        //var_dump($tbl_plants_count);die;
                                                        $job_card_post_press_packaging_details_count = $tbl_job_card_post_press_packaging_details_count->totalcount;
                                                    }

                                                ?>
                                                <?php
                                                if($job_card_post_press_packaging_details_count!=0){
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
                                                    <td>  <?php echo $pcs  ?? ''; ?></td>
                                                    <td><?php echo $item_name  ?? ''; ?></td>
                                                    <td><?php echo $length  ?? ''; ?></td>
                                                    <td> <?php echo $width  ?? ''; ?></td>
                                                    <td> <?php echo $height  ?? ''; ?></td>
                                                    <td><?php echo $unit_name  ?? ''; ?></td>
                                                </tr>
                                                <?php
	}
}
	?>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div>
                                            <table cellspacing="0" cellpadding="0" rules="all"
                                                border="1" id="GridMaterialReq"
                                                style="width:100%;border-collapse:collapse;">
                                                <tr>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Material Name</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Qty Required</th>
                                                    <th scope="col">Issued</th>
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
                                                        $mquantity=$tbl_job_card_material_requirement->quantity;
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
                                                            // echo "rm_item_name--". $material_requirement_id.'--'.$rm_item_name.'--rm_item--'.$rm_item.'<br>';
                                                        };
                                                        $mst_unit   = DB::select("select * from mst_unit where id='".$units."'");

                                                        $units_name="";
                                                        foreach($mst_unit as $mst_unit)
                                                        {
                                                            $units_name=$mst_unit->description;
                                                        }

                                                        ?>
                                                <tr>
                                                    <td align="center">  <?php echo $rm_category_name ?? ''; ?></td>
                                                    <td> <?php echo $rm_item_name ?? ''; ?></td>
                                                    <td> <?php echo $mquantity ?? '' . ' ' . $units_name ?? '' . ' ' . 'Per 1000 pcs'; ?></td>
                                                    <td>
                                                        <?php
                                                            $qty = 0;
                                                            if(empty($mquantity)){
                                                                $mquantity = 0;
                                                            }
                                                            $qty = ($quantity/1000)*$mquantity;
                                                            $qty = number_format(floor($qty*100)/100, 2);
                                                            echo $qty ?? ''. ' ' . $units_name ?? '';
                                                        ?>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <?php
						}
					}

				?>

                                            </table>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div id="DivPinmailerTable">
                                            <table style="width: 100%" border="0">

                                                {{-- specific_deatails --}}
                                                @php
                                                    $specific_deatails = \DB::table('tbl_job_card_specific_details_check')->where('job_card_id',$job_card_id)->get(['tearing','cutting'])->toArray();
                                                @endphp
                                                @if (count($specific_deatails) > 0)
                                                    <tr>
                                                        <td>
                                                            <div id="DivPanPinMailer">
                                                                <div id="PanPinMailer">
                                                                    <table style="width: 100%" border="0">
                                                                        <tr>
                                                                            <td>
                                                                                {{-- <strong>Pin Maler</strong><span class="red">*</span> --}}
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="10">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>
                                                                                <fieldset id="Fieldset12" class="repeat" style="width: 750px">
                                                                                    <legend title="Post-Press">Post-Press</legend>
                                                                                    <table style="width: 100%">
                                                                                        <tr>
                                                                                            <td>
                                                                                                <table style="width: 100%">
                                                                                                    <tr>
                                                                                                        <td style="width: 15%">
                                                                                                            <strong>Collating</strong><span class="red">*</span>

                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <span id="lblCoalating">@if ($specific_deatails[0]->tearing == 1)
                                                                                                                Yes
                                                                                                            @else
                                                                                                                No
                                                                                                            @endif</span>

                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td height="10">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td>
                                                                                                            <strong>Perforation Smoothning</strong><span class="red">*</span>

                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <span id="lblSmoothing">
                                                                                                                @if ($specific_deatails[0]->cutting == 1)
                                                                                                                    Yes
                                                                                                                @else
                                                                                                                    No
                                                                                                                @endif
                                                                                                            </span>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td height="10">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </table>
                                                                                </fieldset>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>

                                <tr id="ProcessFLow">
	                                <td>
                                        <span id="Label21" style="font-weight: 700">Process Flow List</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="height: 2px">

                                    </td>
                                </tr>
                                @php
                                    $press = DB::table('tbl_job_card_process_selection_press')->where('job_card_id',$job_card_id)->get();
                                    $pre_press = DB::table('tbl_job_card_process_selection_pre_press')->where('job_card_id',$job_card_id)->get();
                                    $post_press = DB::table('tbl_job_card_process_selection_post_press')->where('job_card_id',$job_card_id)->get();
                                    $i=1;
                                @endphp
                                @if (count($press) > 0 || count($pre_press) > 0 || count($post_press) > 0)
                                    <tr>
                                        <td align="left">
                                            <div>
                                                <table cellspacing="0" cellpadding="4" rules="all" id="gridProcessFlow" style="background-color:White;border-width:1px;border-style:Inset;width:60%;border-collapse:collapse;">
                                                    <tr>
                                                        <th scope="col">&nbsp;</th>
                                                        <th scope="col">Process</th>
                                                        <th scope="col">Work Entry No.</th>
                                                    </tr>
                                                    @if (count($press) > 0)
                                                        @foreach ($press as $item)
                                                            @php
                                                                $process=$item->process;
                                                                $tbl_process_master = \DB::table('tbl_process_master')->where('id',$process)->get(['name']);
                                                             @endphp
                                                            <tr>
                                                                <td align="center">
                                                                    <span id="gridProcessFlow_lblProcessNo_0">{{ $i++ ?? ''}}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_lblProcess_0" style="display:inline-block;width:150px;">{{ $tbl_process_master[0]->name ?? 'NA' }}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_chkStatus_0"></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    @if (count($pre_press) > 0)
                                                        @foreach ($pre_press as $pre)
                                                            @php
                                                                $process=$pre->process;
                                                                $tbl_process_master = \DB::table('tbl_process_master')->where('id',$process)->get(['name']);
                                                             @endphp
                                                            <tr>
                                                                <td align="center">
                                                                    <span id="gridProcessFlow_lblProcessNo_0">{{ $i++ ?? '' }}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_lblProcess_0" style="display:inline-block;width:150px;">{{ $tbl_process_master[0]->name ?? 'NA' }}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_chkStatus_0"></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    @if (count($post_press) > 0)
                                                        @foreach ($post_press as $post)
                                                            @php
                                                                $process=$post->process;
                                                                $tbl_process_master = \DB::table('tbl_process_master')->where('id',$process)->get(['name']);
                                                             @endphp
                                                            <tr>
                                                                <td align="center">
                                                                    <span id="gridProcessFlow_lblProcessNo_0">{{ $i++ ?? '' }}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_lblProcess_0" style="display:inline-block;width:150px;">{{ $tbl_process_master[0]->name ?? 'NA' }}</span>
                                                                </td><td align="center">
                                                                    <span id="gridProcessFlow_chkStatus_0"></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @endif

                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td style="height: 2px">
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table style="width: 100%">
                                            <tr>
                                                <td valign="top">
                                                    <span id="Label3">Prepared by:</span><br />
                                                    <br />
                                                    @php
                                                    $user_name = \Session::get('userdata')['fullname'];
                                                @endphp
                                                    <span id="lblPrepared"> {{ $user_name ?? '' }}</span>
                                                </td>
                                                <td valign="top">
                                                    <span id="Label4">Approved by:</span>
                                                </td>
                                                <td valign="top">
                                                    <span id="Label7">Received by:</span>
                                                </td>
                                                <td valign="top">
                                                    <span id="Label14">Approved by at Production:</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

<br /><br />
<div style='page-break-after: always;'></div>


    </form>
</body>
</html>
