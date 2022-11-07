<?php

    header('Location: itensdoacao-restrita.php');
    require_once('../model/ItensDoacao.php');

    $itensDoacao = new ItensDoacao();

    $linha = $_POST['linha'];
    $qtdItens = $_POST['quantEditar'];
    $doacao = $_POST['itemEditar'];
    $ong = $_POST['ongEditar'];
    $data = $_POST['dataEditar'];

    $itensDoacao->alterar($linha, $doacao, $qtdItens, $data, $ong);

?>