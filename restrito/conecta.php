<?php
    //dados para a conexão
    $host="localhost";
    $usuario="root";
    $senha="";
    $nomedobanco="projeto_1993";
        
    //criando a conexão
    $conexao=mysqli_connect($host, $usuario, $senha, $nomedobanco);

    //validação
    if(!$conexao){
        print("Ocorreu uma falha de conexão com o banco de dados, favor contate o administrador.");
    }
?>