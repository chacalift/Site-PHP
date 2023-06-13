<?php
    //conexão
    include_once("conecta.php");

    //recebendo os dados
    $recid=$_POST["fid"];
    $recnome=$_POST["fnome"];
    $recemail=$_POST["femail"];
    $recuser=$_POST["fuser"];
    $recpass=$_POST["fpass"];
    $recnivel=$_POST["fnivel"];

    //atualizando os dados
    mysqli_query($conexao, "UPDATE usuarios SET nome='$recnome', email='$recemail', user='$recuser', pass='$recpass', nivel='$recnivel' WHERE id=$recid");

    //redirecionamento
    if($recnivel == "editor"){
        header("location:usuario.php?n=$recnome");
    }else{
        header("location:usuarios.php");
    }
?>