

<?php
$conex = new mysqli('localhost','root','','img');
$nombre = $_POST['nombre'];
$image = $_FILES["imagen"]["tmp_name"];
$imgContent = addslashes(file_get_contents($image));
$consulta = "INSERT into images VALUES (NULL,'$imgContent','$nombre')";
$enviar= $conex->query($consulta);

echo '
<script>
alert("Imagen subida correctamente");
window.location = "Admin.php";
</script>
   ';
   


   