<html>
    <head>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <style>
        .invoice{
            color: black !important;
        }
    </style>
<body>
    <div id="invoice">
        <div class="invoice overflow-auto">
            <div style="min-width: 600px">
                <main>
                    <div class="row contacts">
                        <div>Dear Sir/Madam,</div><br>
                        {{-- <div>The {{$weeklyRecords->count()}} quotation were generated on {{date('d-m-Y',strtotime($startDate))}} - {{ date('d-m-Y',strtotime($endDate)) }}. </div><br>
                        </div> --}}
                        <div>The {{ $weeklyRecords ? $weeklyRecords->count() : 0 }} Proforma Invoice were generated on {{ date('d-m-Y', strtotime($startDate)) }} - {{ date('d-m-Y', strtotime($endDate)) }}.</div>

                    <br>
                    <table style='border: 1px solid black;border-collapse: collapse;width:80% !important;min-width:80% !important;' >
                        <thead>
                            <tr>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Sr.No.</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Invoice No</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Consignee</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Sales Person</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Dispatch Through</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>View </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($weeklyRecords->count() > 0)
                                @foreach ($weeklyRecords as $pi)
                                <tr>
                                    @php
                                        $id = $pi->id;
                                        $unid= $pi->invoice_no ?? '-';
                                        $sales_person = $pi->getSaleName->fullname ?? '-';
                                        $customer = $pi->getCustomerName->customer_name ?? '-';
                                    @endphp
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $loop->iteration }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $unid }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $customer  }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $sales_person }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>
                                        @if ($pi->mode_of_dispatch == 1)
                                            Road
                                        @elseif ($item->mode_of_dispatch == 2)
                                            Air
                                        @elseif ($item->mode_of_dispatch == 3)
                                            Sea
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>
                                        <a  title="PDF With Header & Footer" href="{{route('proforma-invoice-show',['id' => $id])}}" target="_blank" class="menu-link flex-stack px-3">&#128206;</a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                        NO Record Found
                                </tr>
                            @endif
                        </tbody>
                    </table><br>
                    <div class="thanks">Thank you!</div>
                    <div class="notices">
                        <div class="notice">For Devharsh Infotech (P) Ltd.</div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
