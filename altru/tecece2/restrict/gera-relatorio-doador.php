<?php 

    require_once("../model/Doador.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Nome</th>";
    $dadosXls .= " <th>Email</th>";
    $dadosXls .= " <th>CPF</th>";
    $dadosXls .= " <th>Dt.Nasc.</th>";
    $dadosXls .= " <th>CEP</th>";
    $dadosXls .= " <th>Estado</th>";
    $dadosXls .= " <th>Cidade</th>";
    $dadosXls .= " <th>Bairro</th>";
    $dadosXls .= " <th>Rua</th>";
    $dadosXls .= " <th>Complemento</th>";
    $dadosXls .= " <th>Lugradouro</th>";
    $dadosXls .= " </tr>";

    $doador = new Doador();
    $listaDoador = $doador->listar();

    foreach ($listaDoador as $listar) {
        $dadosXls .= " <tr>";
        $dadosXls .= " <td>" . $listar['iddoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['nomedoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['emaildoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['cpfdoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['datanascdoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['cepdoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['estadodoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['cidadedoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['bairrodoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['ruadoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['complementodoador'] . "</td>";
        $dadosXls .= " <td>" . $listar['lugradourodoador'] . "</td>";
        $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-doadores.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>