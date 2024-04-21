<?php

$conex = new mysqli('localhost','root','mysqlezequiel1_','img');

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($imagen));
$consulta = "INSERT into images VALUES ('','$imagen')";
$enviar= $conex->query($consulta);
