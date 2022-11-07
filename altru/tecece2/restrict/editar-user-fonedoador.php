<?php

    header('Location: telefonedoador-restrita.php');
    
    require_once('../model/TelefoneDoador.php');

    $foneDoador = new TelefoneDoador();

    $telefone = $_POST['telefoneEditar'];
    $linha = $_POST['linha'];

    $foneDoador->alterar($linha, $telefone);

?>