<?php
    //conexão
    include_once("conecta.php");

    //recebendo os dados enviados
    $recfoto=$_FILES["ffoto"]["name"];

    //separando a extensão e gerando o novo nome
    $ext=pathinfo($recfoto, PATHINFO_EXTENSION);
    $data=date("d/m/Y");
    $hora=time();
    $novonome="banner-princess-model".md5($data.$hora).".".$ext;

    //movendo o arquivo para a pasta específica
    move_uploaded_file($_FILES["ffoto"]["tmp_name"], "../imagens/banners/$novonome");

    //gravando no banco de dados
    mysqli_query($conexao, "INSERT INTO banners (banner) VALUES ('$novonome')");

    //redirecionamento
    header("location:banners.php");
?>