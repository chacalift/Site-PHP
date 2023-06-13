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
    <p class="menu" style="text-align: left; margin-top: -50px; width: 30%; margin-left: 10px;">
        <a href="cadnewprod.php"><i class="fa fa-shopping-cart"></i> Cadastro de Produtos</a>
    </p>
    <table width="100%" cellpadding="10" cellspacing="0" class="linhas">
        <tr align="center" height="40">
            <td><strong>Foto</strong></td>
            <td><strong>Produto</strong></td>
            <td><strong>Categoria</strong></td>
            <td><strong>Tamanho</strong></td>
            <td><strong>Valor</strong></td>
            <td><strong>Descrição</strong></td>
        </tr>
        <?php
            //conexão com o banco de dados
            include_once("conecta.php");
                                 
            if($_GET){
                $pagina=$_GET["pag"];
            }else{
                $pagina=1;
            }
                                 
            //definindo a quantidade de itens que aparece
            $limite=4;
                                 
            //determinar a posição do primeiro item de cada página
            $inicio=$pagina*$limite-$limite;
                                 
            //buscar os dados para serem listados
            $dados=mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id DESC LIMIT $inicio, $limite");
            
            //loop para escrever todos os dados
            while($item=mysqli_fetch_array($dados)){ ?>
                <tr>
                    <td align="center" width="5%">
                        <img src="../imagens/produtos/<?=$item["foto"]?>" width="50">
                    </td>
                    <td><?=$item["produto"]?></td>
                    <td align="center"><?=$item["categoria"]?></td>
                    <td align="center"><?=$item["tamanho"]?></td>
                    <td align="center">R$ <?=number_format($item["valor"], 2, ",", ".")?></td>
                    <td><?=substr($item["descri"], 0, 60)." ..."?></td>
                    
                    <td class="iconedit"><a href="editaprod.php?id=<?=$item["id"]?>&pag=<?=$pagina?>"><i class="fa fa-edit"></i></a></td>
                    
                    <td class="iconedit"><a href="#" onClick="verifica('<?=$item["id"]?>', '<?=$item["foto"]?>', '<?=$pagina?>', '<?=$limite?>')"><i class="fa fa-trash"></i></a></td>
                </tr>
            <?php } ?>
                <tr align="center">
                    <td colspan="8">
                        <hr>
                        <?php
                            //buscar todos os dados da tabela de produtos para uma contagem da quantidade de produtos cadastrados
                            $pegadados=mysqli_query($conexao, "SELECT * FROM produtos");
                                 
                            //contando quantos produtos tem
                            $total=mysqli_num_rows($pegadados);
                                 
                            //descobrir quantas páginas tem
                            $totalpg=ceil($total/$limite); //arredonda números quebrados para o primeiro inteiro acima
                                 
                            $anterior=$pagina-1;
                            $proximo=$pagina+1;
                                 
                            if($pagina > 1){
                                print("<a href='admin.php?pag=1' title='Início' class='iconpg'><i class='fa fa-backward'></i></a>");
                                print("<a href='admin.php?pag=$anterior' title='Voltar' class='iconpg'><i class='fa fa-step-backward'></i></a>");
                            }
                                 print("<strong><big>".$pagina." de ".$totalpg."</big></strong>");
                            if($pagina < $totalpg){
                                print("<a href='admin.php?pag=$proximo' title='Próximo' class='iconpg'><i class='fa fa-step-forward'></i></a>");
                                print("<a href='admin.php?pag=$totalpg' title='Último' class='iconpg'><i class='fa fa-forward'></i></a>");
                            }
                        ?>
                    </td>
                </tr>
    </table>
</body>
</html>
<?php
    }else{
        $erro=md5(2);
        header("location:index.php?e=$erro");
    }
?>
