<?php

    header('Location: ong-restrita.php');
    require_once('../model/Ong.php');

    $ong = new Ong();

    $nome = $_POST['nomeEditar'];
    $linha = $_POST['linha'];
    $email = $_POST['emailEditar'];
    $dtNasc = $_POST['dtNasc'];
    $cidade = $_POST['cidadeEditar']; 
    $estado = $_POST['estadoEditar'];
    $bairro = $_POST['bairroEditar'];
    $rua = $_POST['ruaEditar'];
    $cep = $_POST['cepEditar'];
    $comp = $_POST['complementoEditar'];
    $logradouro = $_POST['logradouroEditar'];
    $senha = $_POST['senhaEditar'];

    $ong->alterar($linha, $nome, $email, $dtNasc, $cidade, 
                        $estado, $bairro, $rua, $cep, $comp, $logradouro,
                        $senha);

?>