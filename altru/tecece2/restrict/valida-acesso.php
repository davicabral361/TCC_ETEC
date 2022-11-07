<?php

    if(isset($_POST['txtEmail']) && !empty($_POST['txtEmail']) 
        && isset($_POST['txtSenha']) && !empty($_POST['txtSenha'])) 
    {
        require("../model/Doador.php");

        $user = new Doador();

        $email = $_POST['txtEmail'];
        $senha = $_POST['txtSenha'];
        
        session_start();

        if($user->verificarUsuario($email, $senha) == $_SESSION['idong']) {
            header("Location: ./explorar.php");
            unset($_SESSION['erro-session']);
            unset($_SESSION['iddoador']);
            unset($_SESSION['idadmin']);
            $_SESSION['email-session'] = $email;
            $_SESSION['senha-session'] = $senha;
            if($user->verificarUsuario($email, $senha) == null){
                header('Location: login-user.php');
                $_SESSION['erro-session'] = 1;
            }
        }
        else if($user->verificarUsuario($email, $senha) == $_SESSION['iddoador']) {
            header("Location: ./social2.php");
            unset($_SESSION['erro-session']);
            unset($_SESSION['idong']);
            unset($_SESSION['idadmin']);
            $_SESSION['email-session'] = $email;
            $_SESSION['senha-session'] = $senha;
            if($user->verificarUsuario($email, $senha) == null){
                header('Location: login-user.php');
                $_SESSION['erro-session'] = 1;
            }
        }
        else if($user->verificarUsuario($email, $senha) == $_SESSION['idadmin']) {
            header("Location: ./Dashboard/index.php");
            unset($_SESSION['erro-session']);
            unset($_SESSION['idong']);
            unset($_SESSION['iddoador']);
            $_SESSION['email-session'] = $email;
            $_SESSION['senha-session'] = $senha;
            if($user->verificarUsuario($email, $senha) == null){
                header('Location: login-user.php');
                $_SESSION['erro-session'] = 1;
            }
        }

    }

?>