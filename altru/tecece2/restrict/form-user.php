<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de cadastro</title>
  <link rel="stylesheet" href="../css/form-user.css">

  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">

  <!-- Favicons -->
  <link class="logo1" href="../../BizLand/assets/img/logo1.png" rel="icon">
  <link href="../../BizLand/assets/img/apple-touch-icon.png" rel="">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../BizLand/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../../BizLand/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../BizLand/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../../BizLand/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../BizLand/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../../BizLand/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../../BizLand/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <script>
    function limpa_formulário_cep() {
      //Limpa valores do formulário de cep.
      document.getElementById('txtRuaDoador').value = ("");
      document.getElementById('txtBairroDoador').value = ("");
      document.getElementById('txtCidadeDoador').value = ("");
      document.getElementById('txtEstadoDoador').value = ("");
    }

    function meu_callback(conteudo) {
      if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('txtRuaDoador').value = (conteudo.logradouro);
        document.getElementById('txtBairroDoador').value = (conteudo.bairro);
        document.getElementById('txtCidadeDoador').value = (conteudo.localidade);
        document.getElementById('txtEstadoDoador').value = (conteudo.uf);
      } //end if.
      else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
      }
    }

    function pesquisacep(valor) {

      //Nova variável "cep" somente com dígitos.
      var cep = valor.replace("^[0-9]{5}-[0-9]{3}$", '');

      //Verifica se campo cep possui valor informado.
      if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

          //Preenche os campos com "..." enquanto consulta webservice.
          document.getElementById('txtRuaDoador').value = "...";
          document.getElementById('txtBairroDoador').value = "...";
          document.getElementById('txtCidadeDoador').value = "...";
          document.getElementById('txtEstadoDoador').value = "...";

          //Cria um elemento javascript.
          var script = document.createElement('script');

          //Sincroniza com o callback.
          script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

          //Insere script no documento e carrega o conteúdo.
          document.body.appendChild(script);

        } //end if.
        else {
          //cep é inválido.
          limpa_formulário_cep();
          alert("Formato de CEP inválido retire o hifén.");
        }
      } //end if.
      else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
      }
    };
  </script>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <section class="edit-modal" style="border: none;">
          <div class="modal-body">
            <a class="registre-doador" href="../tecece2/restrict/form-user.php">Eu sou Doador</a>
          </div>
          <div class="modal-body">
            <a class="registre-doador" href="../tecece2/restrict/form-user-ong.php">Eu sou Ong</a>
          </div>
        </section>
        <div class="modal-footer">
          <button type="button" class="btn-fechar" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn-entrar">Entrar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <img class="img-logo" src="../../bizland/assets/img/logo1.PNG" alt="">
      <section style=" padding-right: 280px;">
        <h1 class="logo"><a href="index.html">Altruismus</a></h1>

      </section>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a style="text-decoration: none; color: white;" class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
          </a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Projetos</a></li>
          <li><a class="nav-link scrollto" href="#team">Time</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
          <li><a id="#cor-button" class="nav-link scrollto" href="#services"><button style="font-weight: 700;" type="button" class="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Registre-se
              </button>


          <li class="dropdown"><a href="../tecece2/restrict/login-user.php"><span class="login">Login</span> <i class="bi bi-chevron"></i></a>

        </ul>
        </li>
        </ul>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main>

    <div class="box">
      <div class="img-box">
        <img src="../image/donate.png">
      </div>
      <div class="form-box">
        <h2>Criar Conta</h2>
        <p class="seJunte">Junte-se a nós</p>
        <form method="post" action="../restrita/cadastra-doador.php" enctype="multipart/form-data">
          <div class="input-group">
            <label for="nome">Nome</label>
            <input style="border-radius: 20px;" type="text" id="txtNomeDoador" name="txtNomeDoador" placeholder="Digite seu nome" required>
          </div>

          <div class="input-group">
            <label for="email">E-mail</label>
            <input style="border-radius: 20px;" type="email" id="txtEmailDoador" name="txtEmailDoador" placeholder="Digite seu e-mail" required>
          </div>

          <div class="input-group">
            <label for="email">Foto</label>
            <input style="border-radius: 20px;" type="file" id="imagem" name="imagem" required>
          </div>

          <div class="input-group">
            <label for="email">Telefone</label>
            <input style="border-radius: 20px;" type="text" id="txtTelDoador" name="txtTelDoador" placeholder="Digite seu telefone" required>
          </div>

          <div class="input-group" id="testando2" style="display: flex; flex-flow: column;">
            <div class="testando" style="display: flex;  " style="padding: 0;">
              <p for="cpf" style="padding: 0; flex: 0.88 !important;">CPF</p>
              <p for="data" style="padding: 0;">Data de Nascimento</p>
            </div>
            <div class="testando2" style="display: flex;">
              <input style="border-radius: 20px;" type="text" id="txtCpfDoador" name="txtCpfDoador" placeholder="Digite seu CPF" required>
              <input style="border-radius: 20px;" type="date" id="txtDataNascDoador" name="txtDataNascDoador" required>

            </div>

          </div>

          <div class="input-group w50">
            <label style="border-radius: 20px;" for="lugradouro">Lugradouro</label>
            <input style="border-radius: 20px;" type="text" id="txtLugradouroDoador" name="txtLugradouroDoador" placeholder="Digite seu Lugradouro" required>
          </div>

          <div class="input-group w50" style="align-items: center;">
            <label for="cidade" style="flex: 0.63;">Cidade</label>
            <label for="estado">Estado</label>
          </div>

          <div class="input-group w50" style="display: flex; flex-flow: row;">
            <input type="text" id="txtCidadeDoador" name="txtCidadeDoador" placeholder="Digite sua cidade" required>
            <select style="border-radius: 20px ;" id="txtEstadoDoador" name="txtEstadoDoador">
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="AM">Amazonas</option>
              <option value="BA">Bahia</option>
              <option value="CE">Ceará</option>
              <option value="DF">Distrito Federal</option>
              <option value="ES">Espírito Santo</option>
              <option value="GO">Goiás</option>
              <option value="MA">Maranhão</option>
              <option value="MT">Mato Grosso</option>
              <option value="MS">Mato Grosso do Sul</option>
              <option value="MG">Minas Gerais</option>
              <option value="PA">Pará</option>
              <option value="PB">Paraíba</option>
              <option value="PR">Paraná</option>
              <option value="PE">Pernambuco</option>
              <option value="PI">Piauí</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="RN">Rio Grande do Norte</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="RO">Rondônia</option>
              <option value="RR">Roraima</option>
              <option value="SC">Santa Catarina</option>
              <option value="SP">São Paulo</option>
              <option value="SE">Sergipe</option>
              <option value="TO">Tocantins</option>
            </select>
          </div>

          <div class="input-group">
            <label for="bairro">Bairro</label>
            <input style="border-radius: 20px;" type="text" id="txtBairroDoador" name="txtBairroDoador" placeholder="Digite seu bairro" required>
          </div>

          <div class="input-group" style="display: flex;">
            <label for="rua" style=" flex: 0.6;">Rua</label>
            <label style="border-radius: 20px;" for="numero">Número</label>
          </div>

          <div class="input-group w50" style="display: flex; flex-flow: row;">
            <input style="border-radius: 20px;" type="text" id="txtRuaDoador" name="txtRuaDoador" placeholder="Digite sua rua" required>
            <input style="border-radius: 20px;" type="number" id="txtComplementoDoador" name="txtComplementoDoador" placeholder="Digite seu número de casa" required>
          </div>

          <div class="input-group w50">
            <label for="cep">CEP</label>
            <input style="border-radius: 20px;" type="text" id="txtCepDoador" name="txtCepDoador" placeholder="Digite seu CEP" required onblur="pesquisacep(this.value);" required>
          </div>

          <div class="input-group">
            <label for="senha">Senha</label>
            <input style="border-radius: 20px;" type="password" id="txtSenhaDoador" name="txtSenhaDoador" placeholder="Digite sua senha" required>
          </div>

          <div class="input-group">
            <button style="border-radius: 20px;" type="submit">Cadastrar</button>
          </div>
          <p class="temConta">Já tem uma conta? <a href="login-user.php">LOGIN</a></p>
        </form>
      </div>
    </div>

  </main>

  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><span style="color:#5A56E9;">Altruismus</span></h3>
            <p>
              R. Feliciano de Mendonça, 290 <br>
              Guaianases, São Paulo - SP, 08460-365<br>
              Brasil <br><br>
              <strong>Telefone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> ascensio@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sobre</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Serviços</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Termos de serviço</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidade</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Redes sociais</h4>
            <p>Nos acompanhe para não fica de fora de eventos e atualizações</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- Vendor JS Files -->
  <script src="../../BizLand/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../../BizLand/assets/vendor/aos/aos.js"></script>
  <script src="../../BizLand/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../BizLand/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../../BizLand/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../BizLand/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../../BizLand/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../../BizLand/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../../BizLand/assets/js/main.js"></script>


</body>

</html>