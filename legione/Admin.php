<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
</head>
<body>
    <h1>Suba una imagen</h1>
    <form action="admin_form.php" method="post" enctype="multipart/form-data">
          
        <input type="text" name="nombre" required>
        <input type="file" name="imagen" required>
        <input type="submit" value="Subir">
    </form>
    <h1>Ingrese el nombre de la imagen a consultar</h1>
    <form action="" method="post">
     <input type="text" name="name" id="">
     <input type="submit" value="enviar">
    </form>
    <?php
$nombr = $_POST["name"];
$conex = new mysqli('localhost','root','','img');
$consulta = "SELECT * FROM IMAGES where nombre = '$nombr'";
$resultado = $conex->query($consulta);
$row = mysqli_fetch_array($resultado);
$im = $row['cosa'];
echo '<img src="data:image/$im;base64,'.base64_encode($im) .' "  width: 100% height: 100%;/>';
   
        ?>
</body>
</html>
	                                                 