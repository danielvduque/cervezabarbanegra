<?php

$emaildestino = $_POST['email'];

if(isset($emaildestino)){

	$to = "danielvduque@gmail.com";
	$subject = $emaildestino." solicita información";
	$txt = "Esta persona se ha suscrito por medio de la página y quiere informacion: ".$emaildestino;
	$headers = "From: info@cervezabarbanegra.com" . "\r\n";

	mail($to,$subject,$txt,$headers);
}

header("Location: http://cervezabarbanegra.com.ve/dos");
die();

?>