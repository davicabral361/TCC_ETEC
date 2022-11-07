<?php

    header('Location: ./perfil.php');
    require_once('../model/Ong.php');

    session_start();
    $ong = new Ong();
    $getOng = $ong->getOng($_SESSION['idong']);

    $nome = $_POST['nomeEditar'];
    $linha = $_SESSION['idong'];
    $email = $_POST['emailEditar'];
    $dtNasc = $_POST['dtNasc'];
    $cidade = $_POST['cidadeEditar']; 
    $estado = $_POST['estadoEditar'];
    $bairro = $_POST['bairroEditar'];
    $rua = $_POST['ruaEditar'];
    $cep = $_POST['cepEditar'];
    $comp = $_POST['complementoEditar'];
    $logradouro = $_POST['logradouroEditar'];

    if(isset($_POST['senhaOng']) && !empty($_POST['senhaOng'])) {
        $senha = $_POST['senhaOng'];
        $senha = md5($senha);
    }
    else {
        $senha =  $getOng['senhaong'];
    }


    $ong->alterar($linha, $nome, $email, $dtNasc, $cidade, 
                        $estado, $bairro, $rua, $cep, $comp, $logradouro,
                        $senha);

?>