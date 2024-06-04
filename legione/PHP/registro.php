<?php

include "Conexion.php";

function validarreg($conex)
{
   $name = $_POST["name"];
   $consulta = "SELECT * FROM persone WHERE nombre='$name'";
   $ejecutar = $conex->query($consulta);
   $row = mysqli_fetch_array($ejecutar);
   if (!empty($row)) {
      return false;
   } else {
      return true;
   }
}

if (isset($_POST["enviar"])) {
   if (validarreg($conex)) {

      $name = $_POST["name"];
      $ape = $_POST["apellido"];
      $pas = $_POST["password"];
      $mail = $_POST["mail"];
      $consulta = "INSERT INTO persone values ('$name','$ape','$mail','$pas')";
      $ejecutar =  $conex->query($consulta);
      
      echo '
        <script>
        alert("usuario guardado exitosamente");
        window.location = "registro.html";
        </script>
        ';
   } else {
      echo '
      <script>
      alert("Este usuario ya existe");
      window.location = "registro.html";
      </script>
      ';
   }
} else {
   echo "no deberias ver esto";
}
