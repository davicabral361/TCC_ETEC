<?php

    header("Location: perfil.php");
    session_start();
    require_once("../model/Post.php");

    $post = new Post();
    
    $msg = $_POST['msg'];
    $data = date('Y-m-d H:i:s');
    $idOng = $_SESSION['idong'];
    $quantidade = $_POST['txtQuantidade'];
    $desc = $_POST['txtDescItem'];


    if(isset($_FILES['imagem'])){

        $extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "social-img/"; //define o diretorio para onde enviaremos o arquivo
    
        move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
        $post->setImg($novo_nome);
        
    
    }

    $post->setMsg($msg);
    $post->setDtPost($data);
    $post->setIdOng($idOng);
    $post->setQuantidadeItensDoacao($quantidade);
    $post->setDescItem($desc);
    

    $post->postagem($post);

?>
