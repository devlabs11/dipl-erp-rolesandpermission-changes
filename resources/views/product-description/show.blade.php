<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FINISH GOODS</title>
    <link rel="stylesheet" href="{{ public_path('assets/css/bootstrap.min.css') }}" />
</head>
<style>
    body{
        font-family: 'Times New Roman',Georgia, Times, serif;
        font-size: 12px;
    }
    .font{
        font-size: 12px;
    }
    .table-cust td,th{
        border: 1px solid black;
    }
    .bolded { font-weight: bold; }      
</style>
<body>
    @php
        if (isset($fg->answers)) {
            $arrAnawer = explode(",",$fg->answers);
        } else {
            $arrAnawer = '';
        }
        $question_count = count($questions);
        $row_count = count($questions)/4;
        $br_count = array(4,8,12,16);
        // dd($table_count);
    @endphp
    {{-- <td scope="col"> --}}
        <span class="bolded"><u>Entry No.</u> :</span>{{ $fg->entry_no }}
    {{-- </td> --}}
    {{-- <td scope="col"> --}}
       <span style="float: right;"> DATE : <span class="bolded">{{ date('d-m-Y',strtotime($fg->date)) }}</span></span>


    {{-- </td> --}}
    <br><br>
    <table style="width:100%" class="table-cust">
        <tbody>
            <tr>
                {{-- <td scope="col"><span class="bolded"><u>Entry No.</u> :<br>
                    {{ $fg->entry_no }}
                </td>
                <td scope="col">
                    DATE : <span class="bolded">{{ date('d-m-Y',strtotime($fg->date)) }}</span>
                </td> --}}

            </tr>
            <tr>
                <td scope="col">
                    <span class="bolded"><u>User Operator</u> :<br>
                        {{ $fg->getOperatorDetail->fullname }}
                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Process Category </u> :<br>
                        Post-Pres
                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Process</u> :<br>
                            FINISH GOODS (24)
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <table style="width:100%" class="table-cust">
        <tbody>
            <tr>
                <td scope="col">
                    <span class="bolded"><u>Location.</u> :<br>
                        {{$fg->getLocation->description ?? 'N/A'}}
                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Job Order.</u> :<br>
                        {{ $fg->getJobCardDetail->job_card_no ?? 'N/A' }} | {{ $fg->getJobCarDDetail->job_card_title ?? 'N/A' }}

                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Work Order.</u> :<br>
                        {{$fg->getWorkOrderDetail->order_no ?? 'N/A'}} | {{$fg->getWorkOrderDetail->order_name ?? 'N/A'}}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <b>Quantity Moved to FG</b>
    <table style="width:100%" class="table-cust">
        <thead>
            Quantity Moved to FG
        </thead>
        <tbody>
            <tr>
                <td scope="col">
                    <span class="bolded"><u>Finished Goods Quantity </u> :<br>
                        {{ $fg->fg_qty}}

                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>No. of boxes</u> :<br>
                        {{ $fg->no_boxes}}
                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Quantity in KGs</u> :<br>
                        {{ $fg->qty_kg}}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    <br>

    <b>Qc Points</b>
    <table style="width:100%" class="table-cust">
        <thead>Qc Points</thead>
        <tbody>
            <tr>
                @foreach ($questions as $key => $item)
                    <td scope="col">
                        <span class="bolded"><u>{{ $item->name }}</u> <br>
                            @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 1 )
                            Ok
                            @endif
                            @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 2 )
                            Not Ok
                            @endif
                            @if (isset($arrAnawer[$key]) && $arrAnawer[$key] == 3 )
                            Not Applicable
                            @endif
                        </span>
                    </td>
                @endforeach
            </tr>
        </tbody>    
    </table>
    <br>
    <table style="width:100%" class="table-cust">
        <tbody>
            <tr>
                <td scope="col">
                    <span class="bolded"><u>QC</u> :<br>
                        {{ $fg->qc  }}

                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>Complains</u> :<br>
                        {{ $fg->complains}}
                    </span>
                </td>
                <td scope="col">
                    <span class="bolded"><u>comments</u> :<br>
                        {{ $fg->comments}}
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>
