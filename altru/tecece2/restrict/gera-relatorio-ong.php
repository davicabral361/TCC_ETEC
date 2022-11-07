<?php 

    require_once("../model/Ong.php");

    $dadosXls = "";
    $dadosXls .= " <table border='1' >";
    $dadosXls .= " <tr>";
    $dadosXls .= " <th>Id</th>";
    $dadosXls .= " <th>Nome</th>";
    $dadosXls .= " <th>Email</th>";
    $dadosXls .= " <th>Dt.Nasc.</th>";
    $dadosXls .= " <th>CEP</th>";
    $dadosXls .= " <th>Estado</th>";
    $dadosXls .= " <th>Cidade</th>";
    $dadosXls .= " <th>Bairro</th>";
    $dadosXls .= " <th>Rua</th>";
    $dadosXls .= " <th>Complemento</th>";
    $dadosXls .= " <th>Lugradouro</th>";
    $dadosXls .= " </tr>";

    $ong = new Ong();
    $listaOng = $ong->listar();

    foreach ($listaOng as $listar) {
        $dadosXls .= " <tr>";
        $dadosXls .= " <td>" . $listar['idong'] . "</td>";
        $dadosXls .= " <td>" . $listar['nomeong'] . "</td>";
        $dadosXls .= " <td>" . $listar['emailong'] . "</td>";
        $dadosXls .= " <td>" . $listar['datanascong'] . "</td>";
        $dadosXls .= " <td>" . $listar['cepong'] . "</td>";
        $dadosXls .= " <td>" . $listar['estadoong'] . "</td>";
        $dadosXls .= " <td>" . $listar['cidadeong'] . "</td>";
        $dadosXls .= " <td>" . $listar['bairroong'] . "</td>";
        $dadosXls .= " <td>" . $listar['ruaong'] . "</td>";
        $dadosXls .= " <td>" . $listar['complementoong'] . "</td>";
        $dadosXls .= " <td>" . $listar['lugradouroong'] . "</td>";
        $dadosXls .= " </tr>";
    }
    $dadosXls .= " </table>";
    $arquivo = "Lista-de-ongs.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $arquivo . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');
    echo $dadosXls;
    exit;
?>