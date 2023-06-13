<?php
    //conexão
    include_once("conecta.php");

    //receber o banner que foi passado pela função via get
    $recbanner=$_GET["banner"];

    //excluir a imagem da pasta
    unlink("../imagens/banners/$recbanner");

    //excluindo do banco
    mysqli_query($conexao, "DELETE FROM banners WHERE banner='$recbanner' ");

    //redirecionamento
    header("location:banners.php");
?>