<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

<body style="display: block; margin: 0;">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" >Registre-se</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <section class="edit-modal" style="border: none;">
        <div class="modal-body" >
          <a class="registre-doador" href="../../tecece2/restrict/form-user.php">Eu sou Doador</a>
        </div>
        <div class="modal-body">
          <a class="registre-doador" href="../../tecece2/restrict/form-user-ong.php">Eu sou Ong</a>
        </div>
      </section>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </div>
</div>


  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="margin: 0;">
    <div class="container d-flex align-items-center justify-content-between">

      <img class="img-logo" src="../../BizLand/assets/img/logo1.PNG"  alt="">
      <section style=" padding-right: 160px;">
        <h1   class="logo"><a href="index.html">Altruismus</a></h1>

      </section>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a style="text-decoration: none; color: white;" class="nav-link scrollto active" href="../../BizLand/index.php">Home</a></li>
          <li><a href="../../BizLand/index.php" class="nav-link scrollto"  href="#about">Sobre</a></li>
        </a></li>
        <li><a href="../../BizLand/index.php" class="nav-link scrollto " href="#portfolio">Portfol</a></li>
        <li><a href="../../BizLand/index.php" class="nav-link scrollto" href="#team">Team</a></li>
        <li><a href="../../BizLand/index.php" class="nav-link scrollto" href="#contact">Contact</a></li>
        
      
        
        
        <li><a  id="#cor-button" class="nav-link scrollto" href="#services"><button style="font-weight: 700;" type="button" class="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Registre-se
        </button>
        
        
        <li class="dropdown"><a  href="login-user.php"><span class="login" >Login</span> <i class="bi bi-chevron"></i></a>

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
              <p class="seJunte">Se junte a nós</p>
              <form method="post" action="../restrita/cadastra-ong.php" enctype="multipart/form-data">
                  <div class="input-group">
                      <label for="nome">Nome</label>
                      <input style="  border-radius: 20px ;"  type="text" id="txtNomeOng" name="txtNomeOng" placeholder="Nome da ONG" required>
                  </div>
  
                  <div class="input-group">
                      <label for="email">E-mail</label>
                      <input type="email" id="txtEmailOng" style="  border-radius: 20px ;"  name="txtEmailOng" placeholder="E-mail da ONG" required>
                  </div>

                  <div class="input-group">
                      <label for="email">Telefone</label>
                      <input type="text" id="txtTelOng" style="  border-radius: 20px ;"  name="txtTelOng" placeholder="Telefone da ONG" required>
                  </div>

                  <div class="input-group">
                      <label for="email">Foto</label>
                      <input type="file" id="fotoOng" style="  border-radius: 20px ;"  name="fotoOng" required>
                  </div>
  
                  <div class="input-group w50">
                      <label for="data">Data de Fundação</label>
                      <label for="lugradouro">Lugradouro</label>
                    </div>
                    
                    <div class="input-group w50" style="flex-flow: row;">
                     <input type="date" id="txtDataNascOng" name="DataNascOng" style="  border-radius: 20px ;"  placeholder="Fundação da ONG" required>
                      <input type="text" id="txtLugradouroOng" name="txtLugradouroOng" placeholder="Logradouro da ong" style="  border-radius: 20px ;"  required>
                  </div>
                  <div class="input-group w50"  style="align-items: center;">
                    <label for="cidade" style="flex: 0.63;">Cidade</label>
                    <label for="estado">Estado</label>
                </div>
                
                <div class="input-group w50" style="display: flex; flex-flow: row;">
                 
                        <input  type="text" id="txtCidadeOng" name="txtCidadeOng" placeholder="Digite sua cidade" required style="  border-radius: 20px ;" >
                
                        <select  style="  border-radius: 20px ;"  name="slEstado" id="slEstado" name="slEstado"> 
                            <option value="0">Acre</option> 
                            <option value="1">Alagoas</option> 
                            <option value="2">Amazonas</option> 
                            <option value="3">Amapá</option> 
                            <option value="4">Bahia</option> 
                            <option value="5">Ceará</option> 
                            <option value="6">Distrito Federal</option> 
                            <option value="7">Espírito Santo</option> 
                            <option value="8">Goiás</option> 
                            <option value="9">Maranhão</option> 
                            <option value="10">Mato Grosso</option> 
                            <option value="11">Mato Grosso do Sul</option> 
                            <option value="12">Minas Gerais</option> 
                            <option value="13">Pará</option> 
                            <option value="14">Paraíba</option> 
                            <option value="15">Paraná</option> 
                            <option value="16">Pernambuco</option> 
                            <option value="17">Piauí</option> 
                            <option value="18">Rio de Janeiro</option> 
                            <option value="19">Rio Grande do Norte</option> 
                            <option value="20">Rondônia</option> 
                            <option value="22">Rio Grande do Sul</option> 
                            <option value="23">Roraima</option> 
                            <option value="24">Santa Catarina</option> 
                            <option value="25">Sergipe</option> 
                            <option value="26">São Paulo</option> 
                            <option value="27">Tocantins</option> 
                        </select>

                </div>
  
                  <div class="input-group">
                      <label for="bairro">Bairro</label>
                      <input type="text" id="txtBairroOng" name="txtBairroOng" placeholder="Digite seu bairro" required style="  border-radius: 20px ;" >
                  </div>
  
                  <div class="input-group">
                    <label for="rua">Rua</label>
                    <label  style="border-radius: 20px;"  for="numero">Número</label>
                </div>
                
                <div class="input-group w50" style="display: flex; flex-flow: row;">
                    <input style="border-radius: 20px;"  type="text" id="txtRuaOng" name="txtRuaOng" placeholder="Digite sua rua" required style="  border-radius: 20px ;" >
                    <input style="border-radius: 20px;" type="number" id="txtComplementoOng" name="txtComplementoOng" placeholder="Digite seu número de casa" required style="  border-radius: 20px ;" >
                </div>
                  <div class="input-group w50">
                      <label for="cep">CEP</label>
                      <input type="text" id="txtCepOng" name="txtCepOng" placeholder="Digite seu CEP" required  style="  border-radius: 20px ;" >
                  </div>
  
                  <div class="input-group">
                      <label for="senha">Senha</label>
                      <input type="password" id="txtSenhaOng" name="txtSenhaOng" placeholder="Digite sua senha" required style="  border-radius: 20px ;" >
                  </div>
  
                  <div class="input-group">
                      <button type="submit">Cadastrar</button>
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