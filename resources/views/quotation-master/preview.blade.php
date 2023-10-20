<html>
    <head>
    	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <style>
            @page {
                margin: 35px 0px;
            }
            p{
            	font-size: 15px;
            	margin-bottom: 10px;
            }
            /** Define now the real margins of every page in the PDF **/
            body {
                margin-top: 3cm;
                margin-left: 1cm;
                margin-right: 1cm;
                margin-bottom: 2cm;
                color: #000;
            }
            /** Define the header rules **/
            header {
                position: fixed;
                top: 0cm;
                left: 0cm;
                right: 0cm;
                height: 3cm;
            }
            /** Define the footer rules **/
            footer {
                position: fixed;
                bottom: 0cm;
                left: 0cm;
                right: 0cm;
                height: 2cm;
            }
            .table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > thead > tr > th {
				    border: 1px solid #000;
				}
			.table-bordered > tbody > tr > td, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > td, .table-bordered > tfoot > tr > th {
				    padding: 0px 0px 0px 3px;
				}
        </style>
    </head>
    <body>

		@if($preview->preview == "preview")
        <!-- Define header and footer blocks before your content -->
		@if($company->header_image)
			@php $headerImage = public_path()."/assets/uploadimage/company/".$company->header_image; @endphp
		@else
			@php $headerImage = public_path()."/assets/uploadimage/company/".$company->header_image; @endphp
		@endif

        <header>
            <center>
            	<img src="{{$headerImage}}" width="491px" height="90px"/>
            </center>
        </header>


		@if($company->footer_image)
			@php $footerImage = public_path()."/assets/uploadimage/company/".$company->footer_image; @endphp
		@else
			@php $footerImage = public_path()."/assets/uploadimage/company/".$company->footer_image; @endphp
		@endif
        <footer>
        	<center>
	            <img src="{{$footerImage}}" width="703px" height="76px"/>
	        </center>
        </footer>
		@endif


        <!-- Wrap the content of your PDF inside a main tag -->
        <main>
            <p style="position: absolute;top:88px;left:40px;color: #808080">DRAFT {{date('d-m-Y h:i:s')}}</p>
        	<h5 class="text-center" style="font-size: 18px"><b>Quotation</b></h5>
    		<p style="float: left;">Ref. No : CUS/RS/241/PR</p>
    		<p style="float: right;">Date : {{date('d-m-Y', strtotime($preview->quotation_date))}}</p>
    		<div style="clear:both;"></div>

    		<p>To,<br>{{$preview->customer_name}}</p>
    		<p><b><u>Kind attn : {{$preview->attention_of}}</b><u></p>
			<p>Reference : {{$preview->rederence}}</p>

			<p class="text-center" style="font-size: 16px"><b>Subject : {{$preview->subject}} </b></p>

			<p>Dear Sir/Madam,</p>
			<p>We would like to thank you for your enquiry!!<br>With the reference to the above subject, please find below quotation,</p>


			<table class="table table-bordered border-dark">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Item Code</th>
						<th>Item Description</th>
						<th>Quantity</th>
						<th>Price</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@php $count = 1; @endphp

					{{-- @for($i=0;$i< count($preview->item1);$i++)
					@for($i=0;$i< count($preview->qty);$i++)
					<tr>
						<td>{{$count++}}</td>
						<td>{{$preview->unit[$i]}}</td>
						<td>{{$preview->desc[$i]}}</td>
						<td>{{$preview->qty[$i]}}</td>
						<td>{{$preview->rate[$i]}}</td>
						<td>{{$preview->total[$i]}}</td>
					</tr>
					@endfor
					@endfor --}}
				</tbody>
			</table>
			<p>Terms & Conditions:</p>
			<p>
				1) Discharge Point Term : As per requirement<br>
				2) Delivery Point : As per customer requirement<br>
				3) Packing : Customized packing charges extra<br>
				4) Payment Term : 50% with order & 50% before dispatch<br>
				5) Validity Of Quotation : 30 days<br>
				6) Delivery : 3-4 weeks from date of production<br>
			</p>

			<p style="font-size: 16px"><b>For Devharsh InfoTech (P) Ltd </b></p>
			<p style="font-size: 16px"><b>Rakesh Shah </b></p>
			<p>(This is a computer generated document.)</p>
        </main>
    </body>
</html>
