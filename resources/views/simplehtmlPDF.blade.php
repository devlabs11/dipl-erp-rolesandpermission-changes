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
<body style="font-family:'Helvetica';font-size: 11.25pt;">
 <!-- Define header and footer blocks before your content -->
 		<header>
		 	<div style="text-align:center;padding-top:0px;margin-top:0px;padding-bottom:20px">
				<img src="{{ asset('heder-phonepe.jpg') }}" width="70%" height="100%"/>
			</div>
		</header>

        <footer>
            
        </footer>
		<main>

		</main>
</body>
</html>

