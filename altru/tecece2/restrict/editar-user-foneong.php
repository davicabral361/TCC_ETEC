<?php

    header('Location: telefoneong-restrita.php');
    
    require_once('../model/TelefoneOng.php');

    $foneOng = new TelefoneOng();

    $telefone = $_POST['telefoneEditar'];
    $linha = $_POST['linha'];

    $foneOng->alterar($linha, $telefone);

?>