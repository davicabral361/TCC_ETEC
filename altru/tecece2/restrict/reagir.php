<?php

    session_start();
    require_once("../model/Reacao.php");
    date_default_timezone_set('America/Sao_Paulo');

    $reacao = new Reacao();

    if(isset($_SESSION['jaReagiu'])) {
        unset($_SESSION['jaReagiu']);
        $reacao->deletar($idReacao);
    }
    else {
        $_SESSION['jaReagiu'] = true;
        $data = date('Y/m/d H:i:s');
        $tipo = "curtida";
        $idPost = $_POST['idPost'];
    
        $reacao->setDtReacao($data);
        $reacao->setTipoReacao($tipo);
        $reacao->setIdPost($idPost);
    
        if(isset($_SESSION['iddoador'])) {
            $reacao->setTipoPerfil("tbdoador");
            $reacao->setIdPerfil($_SESSION['iddoador']);
        }
        else if(isset($_SESSION['idong'])) {
            $reacao->setTipoPerfil("tbong");
            $reacao->setIdPerfil($_SESSION['idong']);
        }
    
        $reacao->reagir($reacao);
    }


?>