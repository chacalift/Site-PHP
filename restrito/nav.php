<img src="../imagens/logos/logo.png" alt="" width="150" align="left">
<p style="text-align: right; padding: 2%; font-weight: bold;">Olá <?=$_SESSION["user"]?></p>
<h2 align="center">Seja bem vindo a área administrativa da Princess Model</h2>
<hr>
<nav class="menu" style="float: right; text-align: right;">
    <a href="admin.php"><i class="fa fa-archive"></i> Produtos</a>
    <a href="banners.php"><i class="fa fa-map-o"></i> Banners</a>
    <?php if($_SESSION["nivel"] == "admin"){ ?>
        <a href="usuarios.php"><i class="fa fa-users"></i> Usuários</a>
    <?php } ?>
    <?php if($_SESSION["nivel"] == "editor"){ ?>
        <a href="editauser.php?id=<?=$_SESSION["id"]?>"><i class="fa fa-user"></i> Minha conta</a>
    <?php } ?>
    <a href="logoff.php"><i class="fa fa-sign-out gn"></i> Sair</a>
</nav>