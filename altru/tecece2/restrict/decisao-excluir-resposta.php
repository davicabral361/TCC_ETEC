<?php
    header("Location: respostausuario.php");
    require_once('../model/RespostaUsuario.php');

    $linha = $_POST['idResposta'];

    $respostausuario = new RespostaUsuario();

    $respostausuario->deletar($linha);


?>