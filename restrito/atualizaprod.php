<?php
    //recebendo os dados enviados pelo formulário
    $recproduto=$_POST["fproduto"];
    $reccategoria=$_POST["fcategoria"];
    $rectamanho=$_POST["ftamanho"];
    $recvalor=$_POST["fvalor"];
    $recdescri=$_POST["fdescri"];
    $recid=$_GET["id"];
    $recnf=$_GET["nf"];
    $recfoto=$_FILES["ffoto"]["name"];
    $recpag=$_GET["pag"];

    //conexão com o banco de dados
    include_once("conecta.php");

    //envio da imagem caso tenha alteração da mesma
    if($recfoto != ""){
        move_uploaded_file($_FILES["ffoto"]["tmp_name"], "../imagens/produtos/$recnf");
    }

    //ajustar o valor para o padrão de moeda do banco de dados
    $recvalor=str_replace("R$ ", "", $recvalor);//substituindo o R$ por vazio
    $recvalor=str_replace(".", "", $recvalor);//substituindo o . por vazio
    $recvalor=str_replace(",", ".", $recvalor);//substituindo a , por .

    //tirando ' apostrofo e " aspas de textos
    $recdescri=str_replace(" ' ", " \' ", $recdescri);
    $recdescri=str_replace(' " ', ' \" ', $recdescri);

    //atualizando os dados no banco
    mysqli_query($conexao, "UPDATE produtos SET produto='$recproduto', categoria='$reccategoria', tamanho='$rectamanho', valor='$recvalor', descri='$recdescri' WHERE id=$recid");

    //redirecionamento
    header("location: admin.php?pag=$recpag");
?>
