<?php
    require_once('../model/Doador.php');
    header("Location: doador-restrita.php");

    $linha = $_POST['iddoador'];

    $doador = new Doador();


    $doador->deletar($linha);


?>