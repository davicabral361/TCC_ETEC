<?php

    require_once('../../model/Doador.php');
    require_once('.././valida-acesso.php');
    
    $doador = new Doador();

    $email = $_SESSION['email-session'];
    $senha = $_SESSION['senha-session'];

    // if( ($_SESSION['email-session'] != $email) || ($_SESSION['senha-session'] != $senha) ){
    //     header('Location: ../index.php');
    // }

    if($doador->verificarUsuario($email,$senha) == false) {
        header('Location: ../../../BizLand/index.php');
    }

?>