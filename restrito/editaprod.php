<?php
    session_start();
    if(isset($_SESSION["user"])){
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Princess Model - área Admministrativa</title>
<link href="../css/estilo.css" rel="stylesheet">
<link href="../imagens/logos/logoicon.png" rel="icon">
<link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script src="../js/script.js"></script>
</head>

<body>
    <?php
        include_once("nav.php");
        
        //conexão com o banco de dados
        include_once("conecta.php");
        
        //recebendo o id enviado via get
        $recid=$_GET["id"];
        $recpag=$_GET["pag"];
                                 
        //buscando o cadastro no banco referente ao id
        $dados=mysqli_query($conexao, "SELECT * FROM produtos WHERE id=$recid");
        
        //separando os dados com fetch array
        $item=mysqli_fetch_array($dados);
    ?>
    <center>
        <h3 style="margin-top: 7%; padding: 1%; background-color: #FFCC00;">Alteração de produtos</h3>
        <form method="post" action="atualizaprod.php?id=<?=$recid?>&nf=<?=$item["foto"]?>&pag=<?=$recpag?>" enctype="multipart/form-data" class="formulario" style="width: 50%; margin-top: 1%;">
            <input type="text" name="fproduto" required placeholder="Produto" class="campo" value="<?=$item["produto"]?>">
            <select name="fcategoria" required class="campo" style="width: 49%; float: left;">
                <option value="">Selecione uma categoria</option>
                <option value="Outlet" <?php if($item["categoria"] == "Outlet"){print("selected");} ?>>Outlet</option>
                <option value="Lançamento" <?php if($item["categoria"] == "Lançamento"){print("selected");} ?>>Lançamento</option>
                <option value="Normal" <?php if($item["categoria"] == "Normal"){print("selected");} ?>>Normal</option>
            </select>
            <select name="ftamanho" required class="campo" style="width: 49%; float: right;">
                <option value="">Selecione um tamanho</option>
                <option value="P" <?php if($item["tamanho"] == "P"){print("selected");} ?>>P</option>
                <option value="M" <?php if($item["tamanho"] == "M"){print("selected");} ?>>M</option>
                <option value="G" <?php if($item["tamanho"] == "G"){print("selected");} ?>>G</option>
                <option value="GG" <?php if($item["tamanho"] == "GG"){print("selected");} ?>>GG</option>
            </select>
            <input type="text" name="fvalor" required placeholder="Valor" class="campo" onKeyPress="mascara(this, moeda)" value="<?="R$ ".number_format($item["valor"],2, ",", "." )?>">
            <img src="../imagens/produtos/<?=$item["foto"]?>" width="100" align="middle">
            <input type="file" name="ffoto" class="campo" style="width: 84.4%;">
            <textarea name="fdescri" required placeholder="Descrição" class="campo" rows="10"><?=$item["descri"]?></textarea>
            <input type="submit" value="Salvar" class="botao">
        </form>
    </center>
</body>
</html>
<?php
    }else{
        $erro=md5(2);
        header("location:index.php?e=$erro");
    }
?>
