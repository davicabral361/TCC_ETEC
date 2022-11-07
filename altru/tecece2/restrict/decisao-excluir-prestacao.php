<?php
    require_once('../model/PrestacaoContasOng.php');
    header("Location: prestacao-restrita.php");

    $linha = $_POST['idprestacao'];

    $prestacao = new PrestacaoContasOng();

    $prestacao->deletar($linha);


?>