<?php 

    require_once("../model/RespostaUsuario.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Resposta</th>";
    $dadosXls .= " <th>Doador</th>";
    $dadosXls .= " <th>Item</th>";
    $dadosXls .= " </tr>";

    $resp = new RespostaUsuario();
    $listaResp = $resp->listar();

    foreach ($listaResp as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['idrespostausuario'] . "</td>";
    $dadosXls .= " <td>" . $listar['simounao'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomedoador'] . "</td>";
    $dadosXls .= " <td>" . $listar['descItem'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-respostas.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>