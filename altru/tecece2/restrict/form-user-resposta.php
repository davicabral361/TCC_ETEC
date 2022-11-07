<?php
require_once("../model/Doacao.php");
require_once("../model/Doador.php");

try{
    $doacao = new Doacao();
    $doador = new Doador();

    $listadoacao = $doacao->listar();
    $listadoador = $doador->listar();
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
            <form method="post" action="../restrita/cadastra-respostausuario.php">
                <div class="input-group">
                    <label for="simounao">Resposta do Usuário</label>
                    <input type="text" id="txtSimOuNao" name="txtSimOuNao" placeholder="Digite uma resposta" required>
                </div>

                <label>Doação:</label>
            <select name="doacao">
                <option value="0">Selecione</option>
                <?php foreach ($listadoacao as $listar){ ?>
                    <option value="<?php echo $listar['iddoacao'] ?>">
                        <?php echo $listar['descdoacao'] ?>
                    </option>
                <?php } ?>
            </select>
            <label>Doador:</label>
            <select name="doador">
                <option value="0">Selecione</option>
                <?php foreach ($listadoador as $listar){ ?>
                    <option value="<?php echo $listar['iddoador'] ?>">
                        <?php echo $listar['nomedoador'] ?>
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