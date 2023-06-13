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
        <h3 style="margin-top: 7%; padding: 1%; background-color: #FFCC00;">Cadastro de novos banners</h3>
        <form method="post" action="gravanewbanner.php" enctype="multipart/form-data" class="formulario" style="width: 50%; margin-top: 1%;">            
            <input type="file" name="ffoto" required class="campo">
            <input type="submit" value="Salvar" class="botao">
        </form>
        <hr style="margin: 50px;">
        <table>
            <?php
                //conexão
                include_once("conecta.php");
                                 
                //buscando todos os banners para listar
                $allbanners=mysqli_query($conexao, "SELECT * FROM banners ORDER BY id DESC");
                                 
                while($item=mysqli_fetch_array($allbanners)){ ?>
                    <tr>
                        <td><img src="../imagens/banners/<?=$item["banner"]?>" width="300"></td>
                        <td class="iconedit" style="width: 40px;" align="right"><a href="#" onClick="verificabanner('<?=$item["banner"]?>')"><i class="fa fa-trash"></i></a></td>
                    </tr>
            <?php } ?>
        </table>
    </center>
</body>
</html>
<?php
    }else{
        $erro=md5(2);
        header("location:index.php?e=$erro");
    }
?>
