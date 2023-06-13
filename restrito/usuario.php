<?php
    session_start();
    if(isset($_SESSION["user"])){
        $_SESSION["user"]=$_GET["n"];
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
            <table width="50%" class="linhas" cellpadding="15">
            <tr>
                <td>Nome</td>
                <td>E-Mail</td>
                <td>Usuário</td>
                <td>Nível</td>
            </tr>
            <?php
                //conexão
                include_once("conecta.php");
                                 
                //buscar os usuários cadastrados no banco
                $dados=mysqli_query($conexao, "SELECT * FROM usuarios WHERE id=$_SESSION[id]");
                                 
                //criando o loop para listar todos os usuários
                $item=mysqli_fetch_array($dados) ?>
                    <tr>
                        <td><?=$item["nome"]?></td>
                        <td><?=$item["email"]?></td>
                        <td><?=$item["user"]?></td>
                        <td><?=$item["nivel"]?></td>
                    </tr>
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
