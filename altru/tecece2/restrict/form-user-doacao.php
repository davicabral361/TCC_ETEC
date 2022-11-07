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
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de cadastro</title>
    <link rel="stylesheet" href="../css/form-user.css">
</head>

<body>

    <div class="box">
        <div class="img-box">
            <img src="../image/donate.png">
        </div>
        <div class="form-box">
            <form method="post" action="../restrita/cadastra-doacao.php">
                <div class="input-group">
                    <label for="data">Data da Doação</label>
                    <input type="date" id="txtDataDoacao" name="txtDataDoacao" placeholder="Digite a data da doação" required>
                </div>

                <div class="input-group">
                    <label for="descricao">Descrição</label>
                    <input type="text" id="txtDescDoacao" name="txtDescDoacao" placeholder="Digite a descrição" required>
                </div>

                <label>Ong:</label>
            <select name="ong">
                <option value="0">Selecione</option>
                <?php foreach ($listaong as $listar){ ?>
                    <option value="<?php echo $listar['idong'] ?>">
                        <?php echo $listar['nomeong'] ?>
                    </option>
                <?php } ?>
            </select>

                <div class="input-group">
                    <button type="submit">Doe</a></button>
                </div>
                <p class="temConta">Já tem uma conta? <a href="login-user.php">LOGIN</a></p>
            </form>
        </div>
    </div>

</body>

</html>