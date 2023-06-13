<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Princess Model - Especialista em moda feminina</title>
<link href="imagens/logos/logoicon.png" rel="icon">
<link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="css/estilo.css" rel="stylesheet">
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/script.js"></script>
<script src="js/slick/slick.min.js"></script>
<link href="js/slick/slick-theme.css" rel="stylesheet">
<link href="js/slick/slick.css" rel="stylesheet">
</head>

<body>
    <?php
        include_once("nav.php");
        include_once("header.php");
    ?>
    <section class="corpo">
        <?php
            //conexão com o banco
            include_once("restrito/conecta.php");
        
            //buscando todos os produtos do banco, mas vamos mostrar apenas 8 de forma aleatória
            $recprod=mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id DESC");
        
            //fazendo o loop para mostarr os produtos
            while($dados=mysqli_fetch_array($recprod)){ ?>
                <div class="produtos">
                    <img src="imagens/produtos/<?=$dados["foto"]?>" height="200">
                    <h4><?=$dados["produto"]?></h4>
                    <h3>R$ <?=number_format($dados["valor"], 2, ",", ".")?></h3>
                    <a href="descriprod.php?id=<?=$dados["id"]?>">
                        <input type="button" value="COMPRAR">
                    </a>
                </div>
        <?php } ?>
    </section>
    <?php include_once("footer.php")?>
</body>
</html>

