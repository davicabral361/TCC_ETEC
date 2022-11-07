<?php
    require_once('../model/TelefoneDoador.php');
    header("Location: telefonedoador-restrita.php");

    $foneDoador = new TelefoneDoador();

    $linha = $_POST['idtelefone'];

    $foneDoador->deletar($linha);


?>