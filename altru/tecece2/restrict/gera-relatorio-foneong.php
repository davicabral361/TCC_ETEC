<?php 

    require_once("../model/TelefoneOng.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Telefone</th>";
    $dadosXls .= " <th>Ong</th>";
    $dadosXls .= " </tr>";

    $tel = new TelefoneOng();
    $listaTel = $tel->listar();

    foreach ($listaTel as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['idtelefoneong'] . "</td>";
    $dadosXls .= " <td>" . $listar['telefoneong'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeong'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-telefones-ongs.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>