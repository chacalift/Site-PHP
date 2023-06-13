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
        
            //recebendo o id do produto
            $recid=$_GET["id"];
        
            //buscando todos os produtos do banco, mas vamos mostrar apenas 8 de forma aleatória
            $recprod=mysqli_query($conexao, "SELECT * FROM produtos WHERE id=$recid");
        
            //separando os dados recebidos
            $dados=mysqli_fetch_array($recprod);
        ?>
                <div class="foto">
                    <img src="imagens/produtos/<?=$dados["foto"]?>">
                </div>
                <div class="descri">
                    Produto:
                    <h2><?=$dados["produto"]?></h2>
                    <h4>Tamanho: <?=$dados["tamanho"]?></h4>
                    <br><br>
                    Valor:
                    <h2>R$ <?=number_format($dados["valor"], 2, ",", ".")?></h2>
                    <br><br>
                    Descrição:
                    <h4><?=$dados["descri"]?></h4>
                    
                    <!-- Declaração do formulário -->  
<form method="post" target="pagseguro"  
action="https://pagseguro.uol.com.br/v2/checkout/cart.html?action=add">  
          
        <!-- Campos obrigatórios -->  
        <input name="receiverEmail" type="hidden" value="rodrigosalles@outlook.com">  
        <input name="currency" type="hidden" value="BRL">  
  
        <!-- Itens do pagamento (ao menos um item é obrigatório) -->  
        <input name="itemId" type="hidden" value="<?=$dados["id"]?>">  
        <input name="itemDescription" type="hidden" value="<?=$dados["produto"]?>">  
        <input name="itemAmount" type="hidden" value="<?=$dados["valor"]?>">
        Quandidade:
        <input name="itemQuantity" type="number" value="1" class="qtde"> 
        <br><br>
        <!-- submit do form (obrigatório) -->  
        <input type="submit" value="ADICIONAR AO CARRINHO" class="botao">  
          
</form>  
                </div>
    </section>
    <?php include_once("footer.php")?>
</body>
</html>

