<?php

    header('Location: doacao-restrita.php');
    

    require_once('../model/Doacao.php');
    require_once('decisao-editar-doacao.php');

    $doacao = new Doacao();

    $data = $_POST['dataEditar'];
    $linha = $_POST['linha'];
    $desc = $_POST['descEditar'];
    $ong = $_POST['ongEditar'];

    $doacao->alterar($linha, $data, $desc, $ong);

?>