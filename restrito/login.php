<?php
    //recebendo os dados enviados pelo formulário
    $recuser=$_POST["fuser"];
    $recpass=$_POST["fpass"];

    //conexão com o banco de dados
    include_once("conecta.php");

    //conferir se existe um usuário e senha na tabela do banco que seja igual aos recebidos
    $login=mysqli_query($conexao, "SELECT * FROM usuarios WHERE user='$recuser' AND pass='$recpass' ");

    //validando o login
    if(mysqli_num_rows($login) > 0){
        $dados=mysqli_fetch_array($login);
        $recnome=$dados["nome"];
        $recnivel=$dados["nivel"];
        $recid=$dados["id"];
        session_start();
        $_SESSION["user"]=$recnome;
        $_SESSION["nivel"]=$recnivel;
        $_SESSION["id"]=$recid;
        header("location:admin.php");
    }else{
        //criptografando a msg de erro
        $erro=md5(1);
        header("location:index.php?e=$erro");
    }
?>