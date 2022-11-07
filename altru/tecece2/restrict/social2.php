<?php
session_start();
require_once("../model/Post.php");
include_once("valida-permanencia.php");

try {
    $post = new Post();

    unset($_SESSION['idOngListar']);
    $listapostagem = $post->listarDeSeguidores($_SESSION['iddoador']);
} catch (Exception $e) {
    echo $e->getMessage();
}


if (isset($_SESSION['iddoador'])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Altruismus</title>
        <link rel="stylesheet" href="../css/social2.css">
        <link id="size-stylesheet" rel="stylesheet" type="text/css" href="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <script src="../JS/social2.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    </head>

    <body>

        <style>
            img.img-responsive {
                max-width: 90%;
                width: 1100px;
            }


            img.img-pub {
                max-width: 100%;
                width: 800px;
            }


            img.logo {
                max-width: 100%;
                width: 40px;
            }

            img.img-agencia {
                max-width: 100%;
                width: 40px;
            }

            img .icones-side {
                max-width: 100%;
                width: 40px;
            }

            img .img-pub-v {
                max-width: 100%;
                width: 200px;
            }
        </style>


        <script>
            const aside = document.getElementsByClassName('aside-esquerdo')

            console.log(aside)
        </script>


        <header>
            <nav>
                <section class="postar">

                    <li><a id="cor-button" class="nav-link scrollto" href="#services"><button style="font-weight: 700;" type="button" class="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Qual é a boa?

                            </button>

                </section>
            </nav>


        </header>



        <aside class="aside-esquerdo" style="border: none;" id="asideEsquerdo">
            <section class="letras" style="border: none;">
                <section class="itens-p">
                    <div class="section-logo" id="logo">
                        <img class="logo" src="../img/Altruismos-removebg-preview 1.png" alt="">


                    </div>


                    <section class="letras-aside" style="border: none;">
                        <section class="banana" id="home1" id="home1">

                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/casa.png" alt="">
                            </a>
                            <a class="home" onclick="teste()" href="./social2.php">Home</a>

                        </section>
                        <section class="banana" id="home1">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/Vector.png" alt="">
                            </a>
                            <a class="home" href="./explorar.php">Explorar</a>
                        </section>
                        <!-- <section class="banana" id="home1">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/notification.png" alt="">
                            </a>
                            <a href="" class="home">Notificações
                                <p class="algumaCoisa" onclick="teste()" id="algumaCoisa">
                                    dsads
                                </p>
                            </a>


                        </section> -->
                        <!-- <section class="banana" id="home1">
                            <a href="">
                                <img style="border-radius: none;" class="icones-side" src="../img/sidedbar/sidebar/menu/mensage.png" alt="">

                            </a>
                            <a class="home" href="">Mensagens</a>
                        </section> -->
                        <section class="banana" id="home1" id="home12">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/pessoa.png" alt="">
                            </a>
                            <a class="home" href="./perfil.php">Perfil</a>
                        </section>

                        <section class="banana" id="home12">
                            <a href="">
                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/more.png" alt="">
                            </a>
                            <a class="home" href="./logout.php">Encerrar</a>
                        </section>

                        <!-- <section class="banana-button">
                            <button style="border: 2px solid red;" class="doar home" id="doar" type="button">Doar</button>
                        </section> -->



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

            <section style="border: 1px solid #E6ECF0;">


                <script>
                    const teste = () => {
                        const imagem = document.getElementById('coracao-img')

                        const coracao2 = document.getElementById('numero-reacao-coracao')

                        const coracao = document.getElementById('coracao')

                        coracao.style.border = 'none'
                        imagem.style.backgroundColor = '#5A56E9'

                        coracao2.innerHTML = '1'

                        const retirada = document.getElementById('retirada')

                        if (retirada.classList.contains('open')) {
                            retirada.classList.remove('open')
                        }


                    }
                </script>

                <?php foreach ($listapostagem as $postagem) { ?>

                    <section class="frase-do-img">

                        <form action="./social.php" method="post">
                            <button type="submit" name="idOng" value="<?php echo $postagem['idong'] ?>">
                                <img src="./foto-perfil-ong/<?php echo $postagem['fotoong'] ?>" alt="" style="border-radius: 50%; width: 50px; height: 50px;">
                            </button>
                        </form>

                        <p class="nome-ong"><?php echo $postagem['nomeong'] ?></p>
                        <!-- <p> @ADB</p> -->
                        <img class="img-pub-v" src="../img-social/tweet/Vector (1).png" alt="">
                        <p><?php echo $postagem['dtpost'] ?></p>
                    </section>

                    <section class="">
                        <section class="frase">
                            <section class="juncao">
                                <p class="desc">
                                    <?php echo $postagem['msgpost'] ?>
                                </p>
                            </section>

                            <section>
                                <img class="img-responsive" src="./social-img/<?php echo $postagem['imagempost'] ?>" alt="">
                            </section>

                        </section>
                    </section>

                    <?php if (isset($_SESSION['iddoador'])) { ?>

                        <form action="./tela-comentario.php" method="post">
                            <button type="submit" value="<?php echo $postagem['idpost'] ?>" name="btnComentar">COMENTAR</button>
                        </form>

                    <?php } ?>
                <?php } ?>

            </section>

        </main>



        <aside class="aside-direito">

            <section class="aside-class" style="background-color: white; border: none;">

                <section style="background-color: white;border: none; ">
                    <form action="./pesquisa-altruismus.php" method="post">

                        <input type="search" placeholder="Buscar por Altruismus" name="buscar">
                        <button type="submit">Buscar</button>

                    </form>
                </section>



            </section>

        </aside>





    </body>

    </html>

<?php } else if ($_SESSION['idong']) { ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Altruismus</title>
        <link rel="stylesheet" href="../css/social2.css">
        <link id="size-stylesheet" rel="stylesheet" type="text/css" href="" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <script src="../JS/social2.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
    </head>

    <body>

        <style>
            img.img-responsive {
                max-width: 90%;
                width: 1100px;
            }


            img.img-pub {
                max-width: 100%;
                width: 800px;
            }


            img.logo {
                max-width: 100%;
                width: 40px;
            }

            img.img-agencia {
                max-width: 100%;
                width: 40px;
            }

            img .icones-side {
                max-width: 100%;
                width: 40px;
            }

            img .img-pub-v {
                max-width: 100%;
                width: 200px;
            }
        </style>


        <script>
            const aside = document.getElementsByClassName('aside-esquerdo')

            console.log(aside)
        </script>


        <header>
            <nav>
                <section class="postar">

                    <li><a id="cor-button" class="nav-link scrollto" href="#services"><button style="font-weight: 700;" type="button" class="btn-login" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Qual é a boa?

                            </button>

                </section>
            </nav>


        </header>



        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <section class="edit-modal" style="border: none;">
                        <div class="modal-body">
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
                                            <?php foreach ($listaong as $listar) { ?>
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

                        </div>
                    </section>
                    <div class="modal-footer">
                        <button type="button" class="btn-fechar" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn-entrar">Entrar</button>
                    </div>
                </div>
            </div>
        </div>






        <aside class="aside-esquerdo" style="border: none;" id="asideEsquerdo">
            <section class="letras" style="border: none;">
                <section class="itens-p">
                    <div class="section-logo" id="logo">
                        <img class="logo" src="../img/Altruismos-removebg-preview 1.png" alt="">


                    </div>


                    <section class="letras-aside" style="border: none;">
                        <!-- <section class="banana" id="home1" id="home1">

                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/casa.png" alt="">
                            </a>
                            <a class="home" onclick="teste()" href="./social2.php">Home</a>

                        </section> -->
                        <section class="banana" id="home1">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/Vector.png" alt="">
                            </a>
                            <a class="home" href="./explorar.php">Explorar</a>
                        </section>
                        <!-- <section class="banana" id="home1">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/notification.png" alt="">
                            </a>
                            <a href="" class="home">Notificações
                                <p class="algumaCoisa" onclick="teste()" id="algumaCoisa">
                                    dsads
                                </p>
                            </a>


                        </section> -->
                        <!-- <section class="banana" id="home1">
                            <a href="">
                                <img style="border-radius: none;" class="icones-side" src="../img/sidedbar/sidebar/menu/mensage.png" alt="">

                            </a>
                            <a class="home" href="">Mensagens</a>
                        </section> -->
                        <section class="banana" id="home1" id="home12">
                            <a href="">

                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/pessoa.png" alt="">
                            </a>
                            <a class="home" href="./perfil.php">Perfil</a>
                        </section>

                        <section class="banana" id="home12">
                            <a href="">
                                <img class="icones-side" src="../img/sidedbar/sidebar/menu/more.png" alt="">
                            </a>
                            <a class="home" href="./logout.php">Encerrar</a>
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

            <section style="border: 1px solid #E6ECF0;">


                <script>
                    const teste = () => {
                        const imagem = document.getElementById('coracao-img')

                        const coracao2 = document.getElementById('numero-reacao-coracao')

                        const coracao = document.getElementById('coracao')

                        coracao.style.border = 'none'
                        imagem.style.backgroundColor = '#5A56E9'

                        coracao2.innerHTML = '1'

                        const retirada = document.getElementById('retirada')

                        if (retirada.classList.contains('open')) {
                            retirada.classList.remove('open')
                        }


                    }
                </script>

                <?php foreach ($listapostagem as $postagem) { ?>

                    <section class="frase-do-img">

                        <img src="../img/awscloud-pp.png" alt="">
                        <p class="nome-ong"><?php echo $postagem['nomeong'] ?></p>
                        <!-- <p> @ADB</p> -->
                        <img class="img-pub-v" src="../img-social/tweet/Vector (1).png" alt="">
                        <p><?php echo $postagem['dtpost'] ?></p>
                    </section>

                    <section class="">
                        <section class="frase">
                            <section class="juncao">
                                <p class="desc">
                                    <?php echo $postagem['msgpost'] ?>
                                </p>
                            </section>

                            <section>
                                <img class="img-responsive" src="./social-img/<?php echo $postagem['imagempost'] ?>" alt="">
                            </section>

                        </section>
                    </section>

                <?php } ?>

            </section>

        </main>



        <aside class="aside-direito">

            <section class="aside-class" style="background-color: white; border: none;">


                <section style="background-color: white;border: none; ">
                    <form action="./pesquisa-altruismus.php" method="post">

                        <input type="search" placeholder="Buscar por Altruismus" name="buscar">
                        <button type="submit">Buscar</button>

                    </form>
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





    </body>

    </html>


<?php } ?>