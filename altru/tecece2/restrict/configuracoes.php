<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altruismus</title>
    <link rel="stylesheet" href="../css/social.css">
    <link id="size-stylesheet" rel="stylesheet" type="text/css" href="" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="../JS/social.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">

    <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- BootsStrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js">

  <!-- Favicons -->
  <link class="logo1" href="../../BizLand/../../BizLand/assets/img/logo1.png" rel="icon">
  <link href="../../BizLand/../../BizLand/assets/img/apple-touch-icon.png" rel="">

  <link rel="stylesheet" href="../css/social.css">

</head>

<body>

    <style>
        img.img-responsive {
            max-width: 90%;
            width: 1100px;
        }


        img.logo {
            max-width: 100%;
            width: 40px;
        }


        img .icones-side {
            max-width: 100%;
            width: 40px;
        }

        .img-violino{
          min-width: 90%;
            width: px;
        }

    </style>

    <script>
        const aside = document.getElementsByClassName('aside-esquerdo')

        console.log(aside)
    </script>

    <aside class="aside-esquerdo" style="border: none;" id="asideEsquerdo">
        <section class="letras" style="border: none;">
            <section class="itens-p" >
                <div class="section-logo" id="logo">
                    <img class="logo" src="../img/Altruismos-removebg-preview 1.png" alt="">
                </div>

                <section class="letras-aside" style="border: none;">
                    <section class="banana" id="home1" id="home1">

                        <a href="">

                            <img class="icones-side" src="../img/sidedbar/sidebar/menu/casa.png" alt="">
                        </a>
                        <a class="home" onclick="teste()" href="">Home</a>

                    </section>
                    <section class="banana" id="home1">
                        <a href="">

                            <img class="icones-side" src="../img/sidedbar/sidebar/menu/Vector.png" alt="">
                        </a>
                        <a class="home" href="">Explorar</a>
                    </section>
                    <section class="banana" id="home1">
                        <a href="">

                            <img class="icones-side" src="../img/sidedbar/sidebar/menu/notification.png" alt="">
                        </a>
                        <li class="nav-item dropdown">

<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
  <i class="bi bi-bell" style="font-style: normal;">Notificações</i>
  <span class="badge bg-primary badge-number"></span>
</a><!-- End Notification Icon -->



<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
  <li class="dropdown-header">
    You have 4 new notifications
    <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
  </li>
  <li>
    <hr class="dropdown-divider">
  </li>

  <li>
    <hr class="dropdown-divider">
  </li>


  <li>
    <hr class="dropdown-divider">
  </li>

  <li class="notification-item">
    <i class="bi bi-check-circle text-success"></i>
    <div>
      <h4>Sit rerum fuga</h4>
      <p>Quae dolorem earum veritatis oditseno</p>
      <p>2 hrs. ago</p>
    </div>
  </li>

  <li>
    <hr class="dropdown-divider">
  </li>



  <li>
    <hr class="dropdown-divider">
  </li>
  <li class="dropdown-footer">
    <a href="#">Show all notifications</a>
  </li>

</ul><!-- End Notification Dropdown Items -->

</li><!-- End Notification Nav -->

                    </section>
                    <section class="banana" id="home1">
                        <a href="">
                            <img style="border-radius: none;" class="icones-side" src="../img/sidedbar/sidebar/menu/mensage.png" alt="">

                        </a>
                        <a class="home" href="">Comentários</a>
                    </section>
                    <section class="banana" id="home1" id="home12">
                        <a href="">

                            <img class="icones-side" src="../img/sidedbar/sidebar/menu/pessoa.png" alt="">
                        </a>
                        <a class="home" href="">Perfil</a>
                    </section>

                    <section class="banana" id="home12">
                        <a href="">
                            <img class="icones-side" src="../img/sidedbar/sidebar/menu/more.png" alt="">
                        </a>
                        <a class="home" href="../../BizLand/index.php">Encerrar</a>
                    </section>

                    <section class="banana-button">
                        <button style="border: 2px solid red;" class="doar home" id="doar" type="button">Doar</button>
                    </section>



                    <script>
                        //const h1 = document.getElementById('asideEsquerdo')

                        //console.log(h1)

                        // aq ele remove o elemento h1.innerHTML = ''

                        // const main = document.getElementById('elemento-chave')

                        // main.style.padding = 0
                        // console.log(main)

                        // const nav = document.getElementById('nav-mobile')


                        // nav.style.display = 'flex'                         
                    </script>



                    <section>

                    </section>

                </section>


            </section>



        </section>
    </aside>













    <main id="elemento-chave" style="border: none;">

    <section style=" display: flex; justify-content: center;">
  
  
  <div class="box">
      <div class="img-box">
          <img src="../image/donate.png">
      </div>
      <div class="form-box">
          <h2>Login</h2>
          <p class="seJunte">Se junte a nós</p>
          <form method="POST" action="./valida-acesso.php">
              <div class="input-group">
                  <label for="email">E-mail</label>
                  <input style="  border-radius: 20px ;" type="text" id="txtEmail" name="txtEmail" placeholder="Digite seu e-mail" required>
              </div>

              <div class="input-group">
                  <label for="senha">Senha</label>
                  <input style="  border-radius: 20px ;" type="password" id="txtSenha" name="txtSenha" placeholder="Digite sua senha" required>
              </div>

              <div class="input-group">
                  <button type="submit">Login</button>
              </div>
              <div class="input-group">
                  <label for="email">E-mail</label>
                  <input style="  border-radius: 20px ;" type="text" id="txtEmail" name="txtEmail" placeholder="Digite seu e-mail" required>
              </div>

              <div class="input-group">
                  <label for="senha">Senha</label>
                  <input style="  border-radius: 20px ;" type="password" id="txtSenha" name="txtSenha" placeholder="Digite sua senha" required>
              </div>

              <div class="input-group">
                  <button type="submit">Login</button>
              </div>

            
              
          </form>
         

      </div>
  </div>

</section>  


    </main>



    <aside class="aside-direito">

        <section class="aside-class" style="background-color: white; border: none;">


            <section style="background-color: white;border: none; ">
                <input type="search" placeholder="Buscar por Altruismus">
            </section>

            <section class="hashtag" style="margin-top: 10px;">

                <section>
                    <p>#Roupas</p>
                </section>
                <section>
                    <p>#Alimentos</p>
                </section>
                <section>
                    <p>#Projetos</p>
                </section>
                <section>
                    <p>#Dinheiro</p>
                </section>

            </section>

        </section>

    </aside>

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