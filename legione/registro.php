<?php

include "Conexion.php";
$name = $_POST["name"];
$ape = $_POST["apellido"];
$pas = $_POST["password"];
$mail = $_POST["mail"];
$consulta = "INSERT INTO persone values ('$name','$ape','$mail','$pas')";
$ejecutar =  $conex -> query($consulta);
 

/*echo '
<script>
alert("usuario guardado exitosamente");
window.location = "registro.php";
</script>
   ';
*/
