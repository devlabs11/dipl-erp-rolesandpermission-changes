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
                        <div>Dear Team,</div><br>
                        <div>New Entries made on {{date('d-m-Y',strtotime(date('d-m-Y')))}}. </div><br>
                    </div>
                    <table style='border: 1px solid black;border-collapse: collapse;width:35%;' >
                        <thead>
                            <tr>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>Module Name</th>
                                <th style='border: 1px solid black;border-collapse: collapse;text-align:left'>No. of entries</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($counts as $module => $count)
                                <tr>
                                    <td style='border: 1px solid black;border-collapse: collapse;width:15%;'>{{ $module }}</td>
                                    <td style='border: 1px solid black;border-collapse: collapse;width:5%;'>{{ $count }}</td>
                                </tr>
                            @endforeach
                            {{-- <tr>
                                <td style='border: 1px solid black;border-collapse: collapse'></td>
                                <td style='border: 1px solid black;border-collapse: collapse'></td>
                            </tr> --}}
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
