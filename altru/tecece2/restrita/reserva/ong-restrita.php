<?php
require_once("../model/Ong.php");

try{
    $ong = new Ong();

    $listaong = $ong->listar();
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
      <caption>Lista de Ongs</caption>
      <thead>
        <tr>
          <th>ID</th>
          <th>Ong</th>
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

        <?php foreach ($listaong as $listar) { ?>
          <tr>
            <td><?php echo $listar['idong'] ?></td>
            <td><?php echo $listar['nomeong'] ?></td>
            <td><?php echo $listar['emailong'] ?></td>
            <td><?php echo $listar['datanascong'] ?></td>
            <td><?php echo $listar['cidadeong'] ?></td>
            <td><?php echo $listar['estadoong'] ?></td>
            <td><?php echo $listar['bairroong'] ?></td>
            <td><?php echo $listar['ruaong'] ?></td>
            <td><?php echo $listar['cepong'] ?></td>
            <td><?php echo $listar['complementoong'] ?></td>
            <td><?php echo $listar['lugradouroong'] ?></td>
            <td><?php echo $listar['senhaong'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
</div>
</body>
</html>