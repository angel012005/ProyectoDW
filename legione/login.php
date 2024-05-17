<?php
include "Conexion.php";
$name = $_POST["name"];
$pass = $_POST["password"];
$consulta = "SELECT * FROM  persone where nombre = '$name'";
$resultado = $conex->query($consulta);
$row = mysqli_fetch_array($resultado);
     if ($pass == $row[3]){
        echo '
<script>
alert("Sesion iniciada");
window.location = "index.html";
</script>
   ';
}else{
    echo '
<script>
alert("incorrecto");
window.location = "login.html";
</script>
   ';
}
