<!--William Lemay, basic output form that takes user name, hours worked, and hourly rate then uses them to calculate various values for their 
paycheck. Completed 3/8/22-->
<html>
<head>
      <style>
         table, th, td, tr {
            border: 1px solid black;
         }
		 header {
			font-size: 40px; 
		 }
      </style>
   </head>
<body>
<?php
$hours = intval($_POST['hours']);
$rate = floatval($_POST['rate']);

$gross = $hours * $rate;
$federal = $gross * 0.1065;
$state = $gross * 0.04;
$ssTaxes = $gross * 0.038;
$medicare = $gross * 0.013;
$totalTax = $federal + $state + $ssTaxes + $medicare;
$net = $gross - $totalTax;

$format_gross = number_format($gross, 2);
$format_federal = number_format($federal, 2);
$format_state = number_format($state, 2);
$format_ssTaxes = number_format($ssTaxes, 2);
$format_medicare = number_format($medicare, 2);
$format_totalTax = number_format($totalTax, 2);
$format_net = number_format($net, 2);
?>
<header><strong>Paycheck Information</strong></header>
<br />
Hello <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?>. This week you worked <?php echo $hours; ?> hours and, based on the<br />
pay rate of $<?php echo $rate; ?> per hour, your paycheck information is:<br />
<br />
<table>
<tr>
<td><strong>Gross Pay</strong></td>
<td><p>$<?php echo $format_gross; ?></p></td>
</tr>
<tr>
<td><strong>Federal Taxes</strong></td>
<td><p>$<?php echo $format_federal; ?></p></td>
</tr>
<tr>
<td><strong>State Taxes</strong></td>
<td><p>$<?php echo $format_state; ?></p></td>
</tr>
<tr>
<td><strong>Social Security Taxes</strong></td>
<td><p>$<?php echo $format_ssTaxes; ?></p></td>
</tr>
<tr>
<td><strong>Medicare Taxes</strong></td>
<td><p>$<?php echo $format_medicare; ?></p></td>
</tr>
<tr>
<td><strong>Total Taxes</strong></td>
<td><p>$<?php echo $format_totalTax; ?></p></td>
</tr>
<tr>
<td><strong>Net Pay</strong></td>
<td><p>$<?php echo $format_net; ?></p></td>
</tr>
</table>
<br />
<a href="javascript:history.back()">Return to input form</a>
</body></html>