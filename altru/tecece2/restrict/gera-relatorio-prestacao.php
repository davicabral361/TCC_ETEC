<?php 

    require_once("../model/PrestacaoContasOng.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>ID</th>";
    $dadosXls .= " <th>Quantida de Itens</th>";
    $dadosXls .= " <th>Descricao</th>";
    $dadosXls .= " <th>Data</th>";
    $dadosXls .= " <th>ONG</th>";
    $dadosXls .= " <th>Doador</th>";
    $dadosXls .= " </tr>";

    $prest = new PrestacaoContasOng();
    $listaPrest = $prest->listar();

    foreach ($listaPrest as $listar) {
    $dadosXls .= " <tr>";
    $dadosXls .= " <td>" . $listar['idprestacaocontasong'] . "</td>";
    $dadosXls .= " <td>" . $listar['quantidadeitensrecebido'] . "</td>";
    $dadosXls .= " <td>" . $listar['descprodutosrecebidos'] . "</td>";
    $dadosXls .= " <td>" . $listar['datarecebimento'] . "</td>";
    $dadosXls .= " <td>" . $listar['nomeong'] . "</td>";
    $dadosXls .= " <td>" . "nome do doador <br> acrescentar" . "</td>";
    $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-prestacao-de-contas.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>