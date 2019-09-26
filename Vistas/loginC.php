<?php
include_once '../includes/user.php';
include_once '../includes/user_session.php';
$userSession = new UserSession();
$user = new User();

if(isset($_POST['username']) && isset($_POST['password'] ) && isset($_POST['tipo'])){
    
    $userForm = $_POST['username'];
    $passForm = $_POST['password'];
    $tipoForm = $_POST['tipo'];
    $user = new User();

   if($user->userExists($userForm, $passForm,$tipoForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        header('Location: home.php');     
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'loginC.php';
    }
}else{
    //echo "login";
    include_once 'loginC.php';
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- viewport meta para reiniciar la escala del Iphone -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="../css/main.css">
<title>Main</title>
</head>

<body>

<div id="pagewrap">

	<div id="header">
		<h1>DataBank</h1>
		<ul>
                    <li><a class="active" href="index.html">Principal</a></li>
                    <li><a href="loginU.php">Usuario</a></li>
                    <li><a href="loginC.php">Cajero</a></li>
                    <li><a href="loginA.php">Administrador</a></li>
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
        
        <h2>Iniciar sesión como Cajero</h2>
        <p>Nombre de usuario: <br>
        <input type="text" name="username"></p>
        <p>Password: <br>
            <input type="password" name="password"></p>
        
        <p class="center"><input type="submit" value="Iniciar Sesión" ></p>
        <input type="text" name="tipo" value="2" style="visibility:hidden">
    </form>
	</div>

	
	<div id="footer">
		<h4>Derechos reservados 2019</h4>
	</div>

</div>

</body>
</html>