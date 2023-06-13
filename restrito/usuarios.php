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
        <h3 style="margin-top: 7%; padding: 1%; background-color: #FFCC00;">Cadastro de novos usuários</h3>
        <form method="post" action="gravanewuser.php" class="formulario" style="width: 50%; margin-top: 1%;">
            <input type="text" name="fnome" required placeholder="Nome" class="campo">
            <input type="email" name="femail" required placeholder="E-Mail" class="campo">
            <input type="text" name="fuser" required placeholder="Usuário" class="campo">
            <input type="password" name="fpass" required placeholder="Senha" class="campo">
            <select required name="fnivel" class="campo">
                <option value="">Selecione o nível de acesso</option>
                <option value="admin">Administrador</option>
                <option value="editor">Editor</option>
            </select>
            <input type="submit" value="Salvar" class="botao">
        </form>
        <br><br><br>
        <hr>
        <br><br><br>
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
                $dados=mysqli_query($conexao, "SELECT * FROM usuarios ORDER BY id DESC");
                                 
                //criando o loop para listar todos os usuários
                while($item=mysqli_fetch_array($dados)){ ?>
                    <tr>
                        <td><?=$item["nome"]?></td>
                        <td><?=$item["email"]?></td>
                        <td><?=$item["user"]?></td>
                        <td><?=$item["nivel"]?></td>
                        <td class="iconedit"><a href="editauser.php?id=<?=$item["id"]?>"><i class="fa fa-edit"></i></a></td>
                        <td class="iconedit"><a href="#" onClick="validauser(<?=$item["id"]?>)"><i class="fa fa-trash"></i></a></td>
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
