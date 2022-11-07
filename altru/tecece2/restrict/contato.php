<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

    <title>Altruismus</title>
    <link rel="stylesheet" href="../css/contato.css">
    <script src="home.js"></script>
</head>

<body>

    <div class="box">
        <div class="img-box">
          <img src="../image/donate.png" alt="">
        </div>
        <div class="form-box">
            <h2>Nos ajude a melhorar</h2>
            <form method="POST" action="./cadastro-user.php">
                <div class="input-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome_doador" name="nome_doador" placeholder="Digite seu nome" required>
                </div>

                <div class="input-group">
                    <label for="email">Numero de celular</label>
                    <input type="text" id="email_doador" name="email_doador" placeholder="Digite seu número" required>
                </div>

                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="data_nascimento_doador" name="data_nascimento_doador" required>
                </div>

                <div class="input-group">
                    <label for="">Como podemos ajudar ?</label>
                    <input class="text-ajuda" type="text">
                </div>

                <div class="input-melhor">
                    <label for="">Por favor, marque uma opção abaixo</label>
                    <section class="section-input">
                        <input class="radio" type="radio">
                        <label for="">Reclamação</label>
                        <input class="radio" type="radio">
                        <label for="">Dúvida</label>
                    </section>
                    <section class="section-input"> 
                        <input class="radio" type="radio">
                        <label for="">Sugestão</label>
                        <input class="radio" type="radio">
                        <label for="">Outro</label>                   
                    </section>
                    
                </div>
               
               

                <div class="input-group">
                    <button type="submit">Cadastrar</button>
                </div>
                <p class="temConta">Já tem uma conta? <a href="./restrict/login-user.php">LOGIN</a></p>
            </form>
        </div>
    </div>

    
   
    
 

    
</body>
</html>