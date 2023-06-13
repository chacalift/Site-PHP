<?php
    //dados para a conexão
    $host="localhost";
    $usuario="alunos_daniel";
    $senha="cd6@centro";
    $nomedobanco="alunos_projeto_1993_daniel";
        
    //criando a conexão
    $conexao=mysqli_connect($host, $usuario, $senha, $nomedobanco);

    //validação
    if(!$conexao){
        print("Ocorreu uma falha de conexão com o banco de dados, favor contate o administrador.");
    }
?>