<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion</title>
    <link rel="stylesheet" href="../CSS/stiyle.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <a href="#"><img src="../img/logo-fotor-bg-remover-20240407131628.png" alt="logo de la compañia"></a>
            <h2 class="Nombre_Empresa">Legione</h2>
        </div>

        <nav class="navigation">


            <ul>
                <li id="busquedas">
                    <form action="">
                        <input type="text" name="Busqueda" class="buz" placeholder="Carrito De Compras">
                    </form>
                    <a href="#" class="nav-link"><img src="../img/search-alt-2-regular-24.png" alt="Busqueda"></a>
                </li>

                <li><a href="carrito.html" class="nav-link"><img src="img/shopping-bag-alt-solid-24.png" alt="Carrito"></a></li>
                <li><a href="#" class="nav-link"><img src="../img/male-regular-24.png" alt="iniciar sesion"></a>
                    <ul>
                        <li><a href="login.html">Iniciar sesion</a></li>
                        <li><a href="#">Mis pedidos</a></li>
                        <li><a href="admin.php">Subir imagen</a></li>a
                    </ul>

                </li>
                <li><a href="#" class="nav-link"><img src="../img/menu-regular-24.png" alt="Menu"></a>
                    <Ul>
                        <li><a href="#">Mujer</a></li>
                        <li><a href="hombre.html">Hombre</a></li>
                        <li><a href="#">Zapatillas</a></li>
                        <li><a href="#">Mochilas</a></li>
                        <li><a href="#">Deportes</a></li>
                        <li><a href="#">Novedades</a></li>
                    </Ul>
                </li>
            </ul>
        </nav>
    </header>


    <h1>Suba una imagen</h1>
    <form action="../PHP/admin_form.php" method="post" enctype="multipart/form-data">

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
    $conex = new mysqli('localhost', 'root', '', 'img');
    $consulta = "SELECT * FROM IMAGES where nombre = '$nombr'";
    $resultado = $conex->query($consulta);
    $row = mysqli_fetch_array($resultado);
    $im = $row['cosa'];
    echo '<img src="data:image/$im;base64,' . base64_encode($im) . ' "  width: 100% height: 100%;/>';

    ?>
</body>

</html>