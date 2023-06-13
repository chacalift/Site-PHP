<?php
    //recebendo os dados enviados pelo formulário
    $recproduto=$_POST["fproduto"];
    $reccategoria=$_POST["fcategoria"];
    $rectamanho=$_POST["ftamanho"];
    $recvalor=$_POST["fvalor"];
    $recdescri=$_POST["fdescri"];
    $recfoto=$_FILES["ffoto"]["name"];

    //conexão com o banco de dados
    include_once("conecta.php");

    //renomeando a imagem para gravar
    $ext=pathinfo($recfoto, PATHINFO_EXTENSION);//comando para separar a extensão do arquivo
    $data=date("d/m/Y");//a variável data esta recebendo a data atual no seguinte formato dd/mm/aaaa
    $hora=time();//a variável hora esta recendo a hora atual no seguinte formato hh:mm:ss:mm
    $novonome="princess-model-".md5($data.$hora).".".$ext;

    //envio do arquivo para uma pasta específica dentro do servidor
    move_uploaded_file($_FILES["ffoto"]["tmp_name"], "../imagens/produtos/$novonome");

    //ajustar o valor para o padrão de moeda do banco de dados
    $recvalor=str_replace("R$ ", "", $recvalor);//substituindo o R$ por vazio
    $recvalor=str_replace(".", "", $recvalor);//substituindo o . por vazio
    $recvalor=str_replace(",", ".", $recvalor);//substituindo a , por .

    //tirando ' apostrofo e " aspas de textos
    $recdescri=str_replace(" ' ", " \' ", $recdescri);
    $recdescri=str_replace(' " ', ' \" ', $recdescri);

    //gravando no banco de dados
    mysqli_query($conexao, "INSERT INTO produtos (produto, categoria, tamanho, valor, descri, foto) VALUES ('$recproduto', '$reccategoria', '$rectamanho', '$recvalor', '$recdescri', '$novonome')");

    //redirecionamento
    header("location: admin.php");
?>









