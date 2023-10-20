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
                        {{-- <div>The {{$monthlyRecords->count()}} quotation were generated on {{date('d-m-Y',strtotime($startDate))}} - {{ date('d-m-Y',strtotime($endDate)) }}. </div><br>
                        </div> --}}
                        <div>The {{ $monthlyRecords ? $monthlyRecords->count() : 0 }} Sales Contract were generated on {{date('M-Y')}}.</div>

                    <br>
                    <table style='border: 1px solid black;border-collapse: collapse;width:80% !important;min-width:80% !important;' >
                        <thead>
                            <tr>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Sr.No.</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Sales Contract No.</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Quotation No.</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Company Name</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Sales Person Name</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>View </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($monthlyRecords->count() > 0)
                                @foreach ($monthlyRecords as $salesContract)
                                <tr>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $loop->iteration }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $salesContract->uq_no ?? '' }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $salesContract->getQuotation->unique_id ?? '-'  }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $salesContract->getCompany->name ?? '' ?? '-' }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>{{ $salesContract->getSalesPerson->fullname ?? ''}}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse'>
                                        <a  title="PDF With Header & Footer" href="{{route('sales-contract-show',['id' =>$salesContract->id])}}" target="_blank" class="menu-link flex-stack px-3">&#128206;</a>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                        NO Record Found
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
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
