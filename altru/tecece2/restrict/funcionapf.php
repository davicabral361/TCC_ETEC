<?php 

    require_once("../model/Seguindo.php");
    session_start();
    $seguindo = new Seguindo();

    $verificacao = $seguindo->verificarSeguir($_SESSION['iddoador'],$_POST['idOng']);

    var_dump($verificacao[0]);

?>