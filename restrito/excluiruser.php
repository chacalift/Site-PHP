<?php
    //conexão
    include_once("conecta.php");

    //recebendo o id do usuário para excluir
    $recid=$_GET["userid"];

    //deletando o usuário
    mysqli_query($conexao, "DELETE FROM usuarios WHERE id=$recid");

    //redirecionando
    header("location:usuarios.php");
?>