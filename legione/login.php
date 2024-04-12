<?php
include "conexion.php";


$name = $_POST["name"];
$pass = $_POST["password"];
$consulta = "SELECT  * FROM persone";
$resultado = $conex->query($consulta);
$row= mysqli_fetch_array($resultado);

if ($name = $row["nombre"] )  {
     if ($contra= $row["contraseña"]){
        echo"gg";
     }
}else{
    echo "noi";
}
