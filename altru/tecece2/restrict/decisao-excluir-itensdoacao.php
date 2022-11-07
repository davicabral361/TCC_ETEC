<?php
    header("Location: itensdoacao-restrita.php");
    require_once('../model/ItensDoacao.php');

    $id = $_POST['iditem'];

    $itensDoacao = new ItensDoacao();

    $itensDoacao->deletar($id);


?>