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
        
        //conexão
        include_once("conecta.php");
                                 
        //recebendo o id a ser alterado
        $recid=$_GET["id"];
                                 
        //selecionando o usuário no banco com o mesmo id
        $dados=mysqli_query($conexao, "SELECT * FROM usuarios WHERE id=$recid");
                                 
        //separando os dados com array
        $item=mysqli_fetch_array($dados);
    ?>
    <center>
        <h3 style="margin-top: 7%; padding: 1%; background-color: #FFCC00;">Alteração de usuários</h3>
        <form method="post" action="atualizauser.php" class="formulario" style="width: 50%; margin-top: 1%;">
            <input type="hidden" name="fid" value="<?=$item["id"]?>">
            <input type="text" name="fnome" required placeholder="Nome" class="campo" value="<?=$item["nome"]?>">
            <input type="email" name="femail" required placeholder="E-Mail" class="campo" value="<?=$item["email"]?>">
            <input type="text" name="fuser" required placeholder="Usuário" class="campo" value="<?=$item["user"]?>">
            <input type="password" name="fpass" required placeholder="Senha" class="campo" value="<?=$item["pass"]?>">
            <?php if($_SESSION["nivel"] == "editor"){ ?>
                <input type="hidden" name="fnivel"  value="<?=$item["nivel"]?>">
            <?php } ?>
            <?php if($_SESSION["nivel"] == "admin"){ ?>
                <select required name="fnivel" class="campo">
                    <option value="">Selecione o nível de acesso</option>
                    <option value="admin" <?php if($item["nivel"] == "admin"){print("selected");} ?>>Administrador</option>
                    <option value="editor" <?php if($item["nivel"] == "editor"){print("selected");} ?>>Editor</option>
                </select>
            <?php } ?>
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
