<?php
    //conexão
    include_once("conecta.php");

    //recebendo os dados
    $recnome=$_POST["fnome"];
    $recemail=$_POST["femail"];
    $recuser=$_POST["fuser"];
    $recpass=$_POST["fpass"];
    $recnivel=$_POST["fnivel"];

    //gravando no banco
    mysqli_query($conexao, "INSERT INTO usuarios (nome, email, user, pass, nivel) VALUES ('$recnome', '$recemail', '$recuser', '$recpass', '$recnivel')");

    //redirecionamento
    header("location:usuarios.php");
?>