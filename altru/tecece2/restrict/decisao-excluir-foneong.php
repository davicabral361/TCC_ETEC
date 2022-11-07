<?php
    header("Location: telefoneong-restrita.php");
    require_once('../model/TelefoneOng.php');

    $foneOng = new TelefoneOng();

    $linha = $_POST['idtelefone'];

    $foneOng->deletar($linha);


?>