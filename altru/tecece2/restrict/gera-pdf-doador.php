<?php

    require_once 'dompdf/vendor/autoload.php';
    require_once("../model/Doador.php");

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $doador = new Doador();

    $dados = "";
    $dados .= " <table border='1' >";
    $dados .= " <tr>";
    $dados .= " <th>Id</th>";
    $dados .= " <th>Nome</th>";
    $dados .= " <th>Email</th>";
    $dados .= " <th>CPF</th>";
    $dados .= " <th>Dt.Nasc.</th>";
    $dados .= " <th>CEP</th>";
    $dados .= " <th>Estado</th>";
    $dados .= " <th>Cidade</th>";
    $dados .= " <th>Bairro</th>";
    $dados .= " <th>Rua</th>";
    $dados .= " <th>Complemento</th>";
    $dados .= " <th>Lugradouro</th>";
    $dados .= " </tr>";

    $listaDoador = $doador->listar();

    foreach ($listaDoador as $listar) {
        $dados .= " <tr>";
        $dados .= " <td>" . $listar['iddoador'] . "</td>";
        $dados .= " <td>" . $listar['nomedoador'] . "</td>";
        $dados .= " <td>" . $listar['emaildoador'] . "</td>";
        $dados .= " <td>" . $listar['cpfdoador'] . "</td>";
        $dados .= " <td>" . $listar['datanascdoador'] . "</td>";
        $dados .= " <td>" . $listar['cepdoador'] . "</td>";
        $dados .= " <td>" . $listar['estadodoador'] . "</td>";
        $dados .= " <td>" . $listar['cidadedoador'] . "</td>";
        $dados .= " <td>" . $listar['bairrodoador'] . "</td>";
        $dados .= " <td>" . $listar['ruadoador'] . "</td>";
        $dados .= " <td>" . $listar['complementodoador'] . "</td>";
        $dados .= " <td>" . $listar['lugradourodoador'] . "</td>";
        $dados .= " </tr>";
    }

    $dados .= " </table>";

    // $html = file_get_contents($dados);

    $dompdf->loadHtml($dados);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $pdf = $dompdf->output();
    $dompdf->stream();

    header('Content-type: application/pdf; charset=utf-8');
    echo $pdf;

?>