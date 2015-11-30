<?php

$to = "danielvduque@gmail.com";
$subject = "Prueba";
$txt = "Barba Negra";
$headers = "From: info@cervezabarbanegra.com" . "\r\n";

mail($to,$subject,$txt,$headers);

header("Location: http://cervezabarbanegra.com.ve/dos");
die();

?>