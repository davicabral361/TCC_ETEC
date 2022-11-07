<?php

    require_once('../model/Doador.php');
    require_once('./valida-acesso.php');
    
    $doador = new Doador();

    $email = $_SESSION['email-session'];
    $senha = $_SESSION['senha-session'];

    if(isset($_SESSION['idong']) && ($doador->verificarUsuario($email,$senha) != $_SESSION['idong'])) {
        header('Location: ../../BizLand/index.php');
        unset($_SESSION['erro-session']);
    }
    else if(isset($_SESSION['iddoador']) && ($doador->verificarUsuario($email, $senha) != $_SESSION['iddoador'])) {
        header('Location: ../../BizLand/index.php');
        unset($_SESSION['erro-session']); 
    }
    else if(isset($_SESSION['idadmin']) && ($doador->verificarUsuario($email, $senha) != $_SESSION['idadmin'])) {
        header('Location: ../../BizLand/index.php');
        unset($_SESSION['erro-session']);
    }
    else if($doador->verificarUsuario($email,$senha) == false) {
        header('Location: ../../BizLand/index.php');
    }

?>