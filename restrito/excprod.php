<?php
    //conexão com o banco da dados
    include_once("conecta.php");

    //recebendo os dados enviados via get
    $recid=$_GET["id"];
    $recfoto=$_GET["foto"];
    $recpag=$_GET["pag"];
    $reclimite=$_GET["limite"];

    //excluindo os dados do banco
    mysqli_query($conexao, "DELETE FROM produtos WHERE id=$recid");

    //excluido a imagem da pasta de produtos
    if(file_exists("../imagens/produtos/$recfoto")){
        unlink("../imagens/produtos/$recfoto");
    }

    //ir no banco de dados para buscar todos os cadastros restantes e contar novamente para retornar a página específica
    $pegadados=mysqli_query($conexao, "SELECT * FROM produtos");
    $total=mysqli_num_rows($pegadados);

    //novo total de páginas
    $totalpg=ceil($total/$reclimite);

    if($recpag > $totalpg){
        $recpag=$recpag-1;
    }

    //redirecionamento
    header("location: admin.php?pag=$recpag");
?>