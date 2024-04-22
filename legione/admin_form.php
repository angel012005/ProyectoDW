<?php

$conex = new mysqli('localhost','root','mysqlezequiel1_','img');

$nombre = $_POST['nombre'];

$image = $_FILES["imagen"]["tmp_name"];
$consulta = "INSERT into images VALUES ('1','$image')";
$enviar= $conex->query($consulta);
