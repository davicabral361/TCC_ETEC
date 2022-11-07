<?php
    header("Location: ../restrict/login-user.php");
    session_start();
    
    require_once("../model/Ong.php");
    require_once("../model/TelefoneOng.php");

    $ong = new Ong();
    $tel = new TelefoneOng();

    $email = $_SESSION['email-session'];
    
    $listagemEspec = $ong->listarEspecifico($email);

    foreach($listagemEspec as $listar) {
        $id = $listar['idong'];
    }

    $tel->setTelefoneOng($_SESSION['telefone']);

    $tel->setOng($id);
    $tel->cadastrar($tel);
?>