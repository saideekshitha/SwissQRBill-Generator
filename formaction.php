<?php

$conn = mysqli_connect("localhost:3306", "root", "", "phplabdock");

if(isset($_POST['addInvoice'])){
	
	 $customerName = $_POST["customerName"];
	 $Address = $_POST["Address"];
	 $Zip = $_POST["Zip"];
	 $City = $_POST["City"];
	 $Country = $_POST["Country"];
	 
	 $val = 0;
 
        $sql = "INSERT INTO invoices (DebtorName, Address, Zip, City, Country) VALUES ('$customerName', '$Address','$Zip','$City','$Country')";
        mysqli_query($conn, $sql);
        $invoiceId = mysqli_insert_id($conn);
 
        for ($a = 0; $a < count($_POST["Label"]); $a++)
        {
            $sql = "INSERT INTO items (invoiceID, itemName, itemQuantity, itemTotal) VALUES ('$invoiceId', '" . $_POST["Label"][$a] . "', '" . $_POST["Count"][$a] . "', '" . $_POST["Total"][$a] . "')";
            mysqli_query($conn, $sql);
        }
}

if(isset($_POST['generate'])){
	
	 $customerName = $_POST["customerName"];
	 $Address = $_POST["Address"];
	 $Zip = $_POST["Zip"];
	 $City = $_POST["City"];
	 $Country = $_POST["Country"];
	 
	 $dcustomerName = $_POST["dcustomerName"];
	 $dAddress = $_POST["dAddress"];
	 $dZip = $_POST["dZip"];
	 $dCity = $_POST["dCity"];
	 $dCountry = $_POST["dCountry"];
	 
	 $date = $_POST["date"];
	 $day = $_POST["day"];
 $sum  = 0;
 $tempTable2="";
//if no errors carry on
    if(!isset($error)){
        //create HTML of the post data
$creditorbody1 = '<style>
p{
				margin:0;	
				font-family: Arial, Helvetica, sans-serif;
            }
</style><div>
				<p><img src="C:\xampp\htdocs\Task\Logo.png" width="150" height="150"> &nbsp;</p>
				&nbsp;
				<p>'.$dcustomerName.'</p>
				<p>'.$dAddress.'</p>
				<p>'.$dZip.'</p>
				<p>'.$dCity.'</p>
				<p>'.$dCountry.'</p>
				&nbsp;
</div>';

$body1 = '<style>
#debtor{
	text-align  : right;
}
p{
				margin:0;	
				font-family: Arial, Helvetica, sans-serif;
            }
			
</style><div id="debtor">
				<p>'.$customerName.'</p>
				<p>'.$Address.'</p>
				<p>'.$Zip.'</p>
				<p>'.$City.'</p>
				<p>'.$Country.'</p>
				&nbsp;
</div>';
$invnum = rand(1000,10000);
$datebody = '<style></style><div>
				<p style="text-align: left; font-family: Arial, Helvetica, sans-serif; font-size:25px"><b>Invoice No. '.$invnum.'</b></p>
				<p style="text-align: right">'.$day.' '.$date.'</p>
</div>';


$tempTable = '<style>
td {
  text-align: left;
  padding-top: 8px;
  padding-bottom: 8px;
}
</style><table class="table" style="width:100%" border=0 border-style=solid>';
$tempTable1 ='<tr style = "background-color:LightGray;"><td><b>Position</b></td><td><b>Count</b></td><td><b>Label</b></td><td><b>Total</b></td></tr>';
for ($a = 0; $a < count($_POST["Label"]); $a++){
	$b = $a + 1;
	$tempTable2.='<tr><td>'.$b.'</td><td>'. $_POST["Count"][$a].' Std.</td><td>'. $_POST["Label"][$a] .'</td><td> CHF '. $_POST["Total"][$a] .'</td></tr>';
	$val = $_POST["Total"][$a];
	$sum += $val;
} 	

	$vatamount = $sum * 0.077;
	$totalSum = $sum + $vatamount;
	$totalTag ='<tr><td></td><td></td><td><b>Total Amount</b></td><td><b>CHF '.$sum.'</b></td></tr>
				<tr><td></td><td></td><td>VAT</td><td>7.7%</td></tr>
				<tr><td></td><td></td><td>VAT Amount</td><td>CHF '.$vatamount.'</td></tr>
				<tr><td></td><td></td><td><b>Total Payable Amount</b></td><td><b>CHF '.$totalSum.'</b></td></tr>
				&nbsp;
				&nbsp;
				</table>';
	
	$footer = '<style> 
            #leftbox {
                float:left; 
                width:25%;
                height:280px;
            }
			
			#leftbox:after {
				  content: "";
  background-color: #000;
  position: absolute;
  width: 5px;
  height: 100px;
  top: 10px;
  left: 50%;
  display: block;
			}
            #middlebox{
                float:left; 
                width:25%;
                height:280px;
            }
            #rightbox{
                float:right;
                width:40%;
                height:280px;
            }
			p{
                margin:0;
				font-family: Arial, Helvetica, sans-serif;
            }
			}
        </style> 
		<div id = "boxes">
            <div id = "leftbox">
                <p><b>Receipt</b></p>
				&nbsp;
				&nbsp;
				&nbsp;
				<p><b>Account /Payable to</b></p>
				<p>'.$dcustomerName.'</p>
				<p>'.$dAddress.'</p>
				<p>'.$dZip.'</p>
				<p>'.$dCity.'</p>
				<p>'.$dCountry.'</p>
				&nbsp;
				&nbsp;
				<p><b>Payable by</b></p>
				<p>'.$customerName.'</p>
				<p>'.$Address.'</p>
				<p>'.$Zip.'</p>
				<p>'.$City.'</p>
				<p>'.$Country.'</p>
				&nbsp;
				&nbsp;
				<style>
				th, td {
  padding-top: 0px;
  padding-bottom: 0px;
  padding-left: 5px;
  
}
th{
	font-size : 10px;
}
				</style>
				<table border=0>
				<tr>
				<th >Currency</td>
				<th >Amount</td>
				</tr>
				<tr>
				<td >CHF</td>
				<td >'.$totalSum.'</td>
				</tr>
				</table>
            </div> 
            
            <div id = "middlebox">
                <p><b>Payment Part</b></p>
				<p><img src="C:\xampp\htdocs\Task\QRCode.png" width="200" height="200"></p>
				<style>
				th, td {
  padding-top: 0px;
  padding-bottom: 0px;
  padding-left: 5px;
  
}
th{
	font-size : 10px;
}
				</style>
				<table border=0>
				<tr>
				<th >Currency</td>
				<th >Amount</td>
				</tr>
				<tr>
				<td >CHF</td>
				<td >'.$totalSum.'</td>
				</tr>
				</table>
            </div>
              
            <div id = "rightbox">
                <p><b>Account /Payable to</b></p>
				<p>'.$dcustomerName.'</p>
				<p>'.$dAddress.'</p>
				<p>'.$dZip.'</p>
				<p>'.$dCity.'</p>
				<p>'.$dCountry.'</p>
				&nbsp;
				&nbsp;
				&nbsp;
				<p><b>Payable by</b></p>
				<p>'.$customerName.'</p>
				<p>'.$Address.'</p>
				<p>'.$Zip.'</p>
				<p>'.$City.'</p>
				<p>'.$Country.'</p>
            </div>
        </div>';
	
	$scissors='<style>
	#scissors {
        height: 35px; /* image height */
        width: 100%;
        margin: auto auto;
        background-image: url(C:\xampp\htdocs\Task\scissors.png);
        background-repeat: no-repeat;
        background-position: right;
        position: relative;
        overflow: hidden;
		border-top: 3px dashed black;
    }
	</style><div id="scissors"></div>';
	
	require_once __DIR__ . '/vendor/autoload.php';
	$mpdf = new mPDF();
		
		$mpdf->WriteHTML($creditorbody1);
        $mpdf->WriteHTML($body1);
		$mpdf->WriteHTML($datebody);
		$mpdf->WriteHTML($tempTable);
		$mpdf->WriteHTML($tempTable1);
		$mpdf->WriteHTML($tempTable2);
		$mpdf->WriteHTML($totalTag);
		$mpdf->WriteHTML($scissors);
		$mpdf->WriteHTML($footer);

	$mpdf->SetDisplayMode('fullpage');
	$mpdf->list_indent_first_level = 0; 

	//call watermark content and image
	//$mpdf->SetWatermarkText('LABDOCK');
	//$mpdf->showWatermarkText = true;
	$mpdf->watermarkTextAlpha = 0.1;

	//output in browser
	$mpdf->Output();	
    }

}
?> 