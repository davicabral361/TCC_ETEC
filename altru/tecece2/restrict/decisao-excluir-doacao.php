<?php
    require_once('../model/Doacao.php');
    header("Location: doacao-restrita.php");

    $linha = $_POST['linha'];

    $doacao = new Doacao();

    $doacao->deletar($linha);


?>