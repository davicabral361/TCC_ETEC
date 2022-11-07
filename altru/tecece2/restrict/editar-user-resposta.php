<?php

    header('Location: respostausuario.php');
    require_once('../model/RespostaUsuario.php');

    $respostausuario = new RespostaUsuario();


    $simounao = $_POST['respostaEditar'];
    $linha = $_POST['linha'];
    $doador = $_POST['doadorEditar'];
    $doacao = $_POST['descEditar'];

    $respostausuario->alterar($linha, $simounao, $doador, $doacao);

?>