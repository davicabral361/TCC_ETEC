<?php
require_once("../model/Doador.php");

try{
    $doador = new Doador();

    $listadoador = $doador->listar();
} catch(Exception $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/doador-restrita.css">
    <title>Document</title>
</head>
<body>
<div id="container">
    <table>
      <caption>Lista de Doadores</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Doador</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>Cidade</th>
          <th>Estado</th>
          <th>Bairro</th>
          <th>Rua</th>
          <th>CEP</th>
          <th>Número</th>
          <th>Lugradouro</th>
          <th>Senha</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach ($listadoador as $listar) { ?>
          <tr>
            <td><?php echo $listar['iddoador'] ?></td>
            <td><?php echo $listar['nomedoador'] ?></td>
            <td><?php echo $listar['emaildoador'] ?></td>
            <td><?php echo $listar['datanascdoador'] ?></td>
            <td><?php echo $listar['cidadedoador'] ?></td>
            <td><?php echo $listar['estadodoador'] ?></td>
            <td><?php echo $listar['bairrodoador'] ?></td>
            <td><?php echo $listar['ruadoador'] ?></td>
            <td><?php echo $listar['cepdoador'] ?></td>
            <td><?php echo $listar['complementodoador'] ?></td>
            <td><?php echo $listar['lugradourodoador'] ?></td>
            <td><?php echo $listar['senhadoador'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
</body>
</html>