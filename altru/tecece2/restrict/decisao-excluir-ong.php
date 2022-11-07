<?php
    header("Location: ong-restrita.php");
    require_once('../model/Ong.php');

    $id = $_POST['idOng'];

    $ong = new Ong();

    $ong->deletar($id);


?>