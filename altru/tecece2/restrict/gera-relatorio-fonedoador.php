<?php 

    require_once("../model/TelefoneDoador.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Telefone</th>";
    $dadosXls .= " <th>Doador</th>";
    $dadosXls .= " </tr>";

    $tel = new TelefoneDoador();
    $listaTel = $tel->listar();

    foreach ($listaTel as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['idtelefonedoador'] . "</td>";
    $dadosXls .= " <td>" . $listar['telefonedoador'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomedoador'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-telefones-doadores.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>