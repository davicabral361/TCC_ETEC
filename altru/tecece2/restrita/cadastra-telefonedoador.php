<?php
    header("Location: ../restrict/login-user.php");
    session_start();

    require_once("../model/Doador.php");
    require_once("../model/TelefoneDoador.php");

    $tel = new TelefoneDoador();
    $doador = new Doador();

    $listagemEspec = $doador->listarEspecifico($_SESSION['email-session']);
  
    foreach($listagemEspec as $listar) {
      $id = $listar['iddoador'];
    }
    
    $tel->setTelefoneDoador($_SESSION['telefone']);

    $tel->setDoador($id);
    $tel->cadastrar($tel);

?>