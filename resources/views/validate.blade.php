<?php
//*llamamos los includes para la validacion de los usuarios
include 'user.php';
include 'user_session.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['user'])){
    $user->setUser($userSession->getcurrentuser());
include "{{route('home.php')}}";
}else if(isset($_POST['username']) && isset($_POST['password'])){

    $userForm = $_POST('username');
    $passForm = $_POST('password');
    if($user->userExists($userForm, $passForm)){
        $userSession->SetCurrentUser($userForm);
        $user->setUser($userForm);
        
        include "{{route('home.php')}}";

    }else{
        $errorLogin ="nombre de usuario y contraseña incorrectos";
        include "{{route('login.php')}}";
    }
}else{
    include_once "{{route('login.php')}}";
}

?>