<?php

    require_once 'dompdf/vendor/autoload.php';
    require_once("../model/Ong.php");

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $ong = new Ong();
   

    $dados = "";
    $dados .= " <table border='1' >";
    $dados .= " <tr>";
    $dados .= " <th>Id</th>";
    $dados .= " <th>Nome</th>";
    $dados .= " <th>Email</th>";
    $dados .= " <th>Dt.Nasc.</th>";
    $dados .= " <th>CEP</th>";
    $dados .= " <th>Estado</th>";
    $dados .= " <th>Cidade</th>";
    $dados .= " <th>Bairro</th>";
    $dados .= " <th>Rua</th>";
    $dados .= " <th>Complemento</th>";
    $dados .= " <th>Lugradouro</th>";
    $dados .= " </tr>";

    $listaOng = $ong->listar();

    foreach ($listaOng as $listar) {
        $dados .= " <tr>";
        $dados .= " <td>" . $listar['idong'] . "</td>";
        $dados .= " <td>" . $listar['nomeong'] . "</td>";
        $dados .= " <td>" . $listar['emailong'] . "</td>";
        $dados .= " <td>" . $listar['datanascong'] . "</td>";
        $dados .= " <td>" . $listar['cepong'] . "</td>";
        $dados .= " <td>" . $listar['estadoong'] . "</td>";
        $dados .= " <td>" . $listar['cidadeong'] . "</td>";
        $dados .= " <td>" . $listar['bairroong'] . "</td>";
        $dados .= " <td>" . $listar['ruaong'] . "</td>";
        $dados .= " <td>" . $listar['complementoong'] . "</td>";
        $dados .= " <td>" . $listar['lugradouroong'] . "</td>";
        $dados .= " </tr>";
    }

    $dados .= " </table>";


    $dompdf->loadHtml($dados);
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $pdf = $dompdf->output();
    $dompdf->stream();

    header('Content-type: application/pdf; charset=utf-8');
    echo $pdf;

?>