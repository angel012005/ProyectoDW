<?php
$Nombre_Host = 'DB-MateandoJuntos';
$Nombre_Usuario = 'dba';
$contra = 'urudevsdba';
$Basde_datos = 'Mateando_Juntos';

$conex = mysqli_connect($Nombre_Host, $Nombre_Usuario, $contra, $Basde_datos);


if (!$conex) {
    echo "Conexión fallida: " . mysqli_connect_error();
} else {
    echo "Conexión exitosa a la base de datos '$Basde_datos'";
}