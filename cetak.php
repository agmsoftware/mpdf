<?php

// ganti ke lokasi dimana anda install mpdf dari composer
//require "/Users/dendybsulistyo/vendor/autoload.php";
require "vendor/autoload.php";

//$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['orientation' => 'L']);

// awal html
$html ="
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />

	<title>Editable Invoice</title>

	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media=print />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>


<body>

	<div id=page-wrap>

		<textarea id=header>INVOICE</textarea>

		<div id=identity>



<div id=logo>

  <div id=logohelp>
    <input id=imageloc type=text size=50 value= /><br />
    (max width: 540px, max height: 100px)
  </div>
  <h1>Codeigniter Indonesia</h1>
</div>

</div>


<div style='clear:both'></div>


<div id=customer>

        <textarea id=customer-title>Faktur</textarea>

        <table id=meta>
            <tr>
                <td class=meta-head>Nomer #</td>
                <td><textarea>000123</textarea></td>
            </tr>
            <tr>

                <td class=meta-head>Tanggal</td>
                <td><textarea id=date>December 15, 2009</textarea></td>
            </tr>
            <tr>
                <td class=meta-head>Total </td>
                <td><div class=due>Rp.875.00</div></td>
            </tr>

        </table>

</div>

<table id=items>

  <tr>
      <th>Item</th>
      <th>Description</th>
      <th>Unit Cost</th>
      <th>Quantity</th>
      <th>Price</th>
  </tr>

  <tr class=item-row>
      <td class=item-name><div class=delete-wpr>Web Updates<a class=delete href=javascript:; title='Remove row'>X</a></div></td>
      <td class=description>Monthly web updates for http://widgetcorp.com (Nov. 1 - Nov. 30, 2009)</td>
      <td>Rp.650.00</td>
      <td>1</td>
      <td><span class=price>Rp.650.00</span></td>
  </tr>

  <tr class=item-row>
      <td class=item-name><div class=delete-wpr>SSL Renewals<a class=delete href=javascript:; title='Remove row'>X</a></div></td>

      <td class=description>Yearly renewals of SSL certificates on main domain and several subdomains</td>
      <td>Rp.75.00</td>
      <td>3</td>
      <td><span class=price>Rp.225.00</span></td>
  </tr>

  <tr>
      <td colspan=2 class=blank> </td>
      <td colspan=2 class=total-line>Subtotal</td>
      <td class=total-value><div id=subtotal>Rp.875.00</div></td>
  </tr>
  <tr>

      <td colspan=2 class=blank> </td>
      <td colspan=2 class=total-line>Total</td>
      <td class=total-value><div id=total>Rp.875.00</div></td>
  </tr>
  <tr>
      <td colspan=2 class=blank> </td>
      <td colspan=2 class=total-line>Amount Paid</td>

      <td class=total-value><textarea id=paid>Rp.0.00</textarea></td>
  </tr>
  <tr>
      <td colspan=2 class=blank> </td>
      <td colspan=2 class='total-line balance'>Balance Due</td>
      <td class='total-value balance'><div class=due>Rp.875.00</div></td>
  </tr>
</table>

<div id=terms>
  <h5>http://agmsoftware.id</h5>
</div>

</div>
</body>
</html>
";
// akhir html

$mpdf->WriteHTML($html);

//kalau mau pake password, tinggal diaktifkan
//$mpdf->SetProtection(array(), 'UserPassword', 'ContohPassword');

$mpdf->Output();
