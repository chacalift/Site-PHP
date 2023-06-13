<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Princess Model - Área Administrativa</title>
<link href="../css/estilo.css" rel="stylesheet">
<link href="../imagens/logos/logoicon.png" rel="icon">
</head>

<body>
    <img src="../imagens/logos/logo.png" alt="" width="120">
    <center>
        <h2>Área Administrativa</h2>
        <br><br><br><br>
        <h3>Acesso Restrito</h3><hr>
        <br><br><br><br><br><br><br>
        <h4>Favor entrar com o seu usuário e senha</h4>
        <br>
        <form method="post" action="login.php" style="width: 20%;">
            <input type="text" name="fuser" placeholder="Usuário" class="campo" required>
            <input type="password" name="fpass" placeholder="Senha" class="campo" required>
            <input type="submit" value="Entrar" class="botao">
        </form>
        <?php
            if($_GET){
                $recerro=$_GET["e"];
                if($recerro == md5(1)){
                    $resposta="Usuário e/ou Senha Incorreto(s), favor tentar novamente.";
                }else if($recerro == md5(2)){
                    $resposta="A página que esta tentando acessar é restrita, favor entrar com usuário e senha.";
                }
                print("<h3 style='color:#FF0000; margin-top:5%'>".$resposta."</h3>");
            }
        ?>
    </center>
</body>
</html>