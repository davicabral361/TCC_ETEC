<?php
    header("Location: ../restrict/respostausuario.php");
    
    require_once("../model/RespostaUsuario.php");
    require_once("../model/Doador.php");
    require_once("../model/Doacao.php");

    $respostausuario = new RespostaUsuario();
    $doador = new Doador();
    $doacao = new Doacao();

    $respostausuario->setSimOuNao($_POST['txtSimOuNao']);

    $doador->setIdDoador($_POST['doador']);
    $respostausuario->setDoador($doador);
    $doacao->setIdDoacao($_POST['doacao']);
    $respostausuario->setDoacao($doacao);



    $respostausuario->cadastrar($respostausuario);

    //echo("Paciente ". $paciente->getNomePaciente() ." cadastrado com sucesso");

?>