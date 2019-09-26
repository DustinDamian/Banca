<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
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
        $user->setUser($userForm);
        $user->setUser($userSession->getCurrentUser());
        include_once 'Vistas/home.php';
    }else{
        //echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'Vistas/registrousuario.php';
    }
}else{
    //echo "login";
    include_once 'Vistas/registrousuario.php';
}

?>