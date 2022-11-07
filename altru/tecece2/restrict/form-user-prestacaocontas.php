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
            <form method="post" action="../restrita/cadastra-prestacaocontasong.php" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="itens">Itens Recebidos</label>
                    <input type="number" id="txtQuantidadeItensRecebido" name="txtQuantidadeItensRecebido" placeholder="Digite a quantidade de itens recebidos" required>
                </div>

                <div class="input-group">
                    <label for="itens">Descrição dos Produtos Recebidos</label>
                    <input type="text" id="txtDescProdutosRecebidos" name="txtDescProdutosRecebidos" placeholder="Descrição dos produtos" required>
                </div>

                <div class="input-group">
                    <label for="data">Data do Recebimento</label>
                    <input type="date" id="txtDataRecebimento" name="txtDataRecebimento" placeholder="Data do recebimento" required>
                </div>

                <div class="input-group w50">
                    <label for="foto">Foto da ONG</label>
                    <input type="file" id="txtFotoOng" name="txtFotoOng">
                </div>

                <div class="input-group w50">
                    <label for="foto">Foto do Doador</label>
                    <input type="file" id="txtFotoDoador" name="txtFotoDoador">
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