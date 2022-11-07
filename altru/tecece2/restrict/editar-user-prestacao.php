<?php

    header('Location: prestacao-restrita.php');
    
    require_once('../model/PrestacaoContasOng.php');

    $prestacao = new PrestacaoContasOng();


    $qtdItens = $_POST['quantEditar'];
    $linha = $_POST['id'];
    $desc = $_POST['descEditar'];
    $data = $_POST['dataEditar'];
    //$fotoOng = $_POST['fotoOng'];
    //$fotoDoador = $_POST['fotoDoador'];
    $ong = $_POST['ongEditar'];

    $prestacao->alterar($linha, $qtdItens, $desc, $data, $ong);

?>