<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- viewport meta para reiniciar la escala del Iphone -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/main.css">
<title>Main</title>
</head>

<body>

<div id="pagewrap">

	<div id="header">
		<h1>DataBank</h1>
		<ul>
                    <li><a class="active" href="Index.php">Principal</a></li>
                    <li><a href="usuario.php">Usuario</a></li>
                    <li><a href="cajero.php">Cajero</a></li>
                    <li><a href="administrador.php">Administrador</a></li>
		  <li><a href="#about">Ingresar un usuario</a></li>
		</ul>
	</div>
    
	<div id="content">
            <form action="" method="POST">
        
                <?php
                    if(isset($errorLogin)){
                        echo $errorLogin;
                    }
                ?>

                <h2>Ingreso de un Nuevo Usuario</h2>
                <p>Nombre de usuario<br><input type="text" name="username"></p>
                <p>Correo electronico<br><input type="text" name="username"></p>
                <p>Identificacion<br><input type="text" name="username"></p>
                <p>Telefono<br><input type="text" name="username"></p>
                <p>Nombre de la cuenta<br><input type="text" name="username"></p>
                <p>Monto<br><input type="text" name="username"></p>
                <p>Password: <br><input type="password" name="password"></p>
                <p>Password: <br><input type="password" name="password"></p>
                <p class="center"><input type="submit" value="Registrar" ></p>
                <input type="text" name="tipo" value="3" style="visibility:hidden">
            </form>
	</div>

	
	<div id="footer">
		<h4>Derechos reservados 2019</h4>
	</div>

</div>

</body>
</html>