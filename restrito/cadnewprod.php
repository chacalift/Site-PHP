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
    <?php include_once("nav.php"); ?>
    <center>
        <h3 style="margin-top: 7%; padding: 1%; background-color: #FFCC00;">Cadastro de novos produtos</h3>
        <form method="post" action="gravanewprod.php" enctype="multipart/form-data" class="formulario" style="width: 50%; margin-top: 1%;">
            <input type="text" name="fproduto" required placeholder="Produto" class="campo">
            <select name="fcategoria" required class="campo" style="width: 49%; float: left;">
                <option value="">Selecione uma categoria</option>
                <option value="Outlet">Outlet</option>
                <option value="Lançamento">Lançamento</option>
                <option value="Normal">Normal</option>
            </select>
            <select name="ftamanho" required class="campo" style="width: 49%; float: right;">
                <option value="">Selecione um tamanho</option>
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="GG">GG</option>
            </select>
            <input type="text" name="fvalor" required placeholder="Valor" class="campo" onKeyPress="mascara(this, moeda)">
            <input type="file" name="ffoto" required class="campo">
            <textarea name="fdescri" required placeholder="Descrição" class="campo" rows="10"></textarea>
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
