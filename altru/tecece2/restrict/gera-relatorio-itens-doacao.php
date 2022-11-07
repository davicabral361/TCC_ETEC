<?php 

    require_once("../model/ItensDoacao.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Ong</th>";
    $dadosXls .= " <th>Unidades</th>";
    $dadosXls .= " <th>Item</th>";
    $dadosXls .= " <th>Data</th>";
    $dadosXls .= " </tr>";

    $itens = new ItensDoacao();
    $listaItens = $itens->listar();

    foreach ($listaItens as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['iditensdoacao'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeong'] . "</td>";
    $dadosXls .= " <td>" . $listar['quantidadeitensdoacao'] . "</td>";
    $dadosXls .= " <td>" . $listar['descitem'] . "</td>";
    $dadosXls .= " <td>" . $listar['datadoacao'] . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-itens-doados.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>