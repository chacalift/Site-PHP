<?php
    //recebendo os dados enviados pelo formulário
    $recnome=$_POST["fnome"];
    $recemail=$_POST["femail"];
    $recassunto=$_POST["fassunto"];
    $recmsg=$_POST["fmsg"];

    //montar a mensagem que será enviada, montar o visual e conteúdo
    $mensagem="
        <p align='center'>
            <img src='https://cd6.com.br/img/logo-white.png' width='200'>
        </p>
        <h2>Contato via formulário site</h2>
        <br><br>
        <strong>Assunto: </strong>$recassunto<br>
        <strong>Nome: </strong>$recnome<br>
        <strong>E-Mail: </strong>$recemail<br><br>
        <strong>Mensagem: </strong>$recmsg
    ";

    //definir o destinatário
    $destinatario="profrodrigo@cd6.com.br";//e-mail que vai receber, e-mail do cliente

    //configuração de envio
    $envia[]="MIME-Version:1.0";
    $envia[]="Content-type:text/html; charset=utf-8";
    $envia[]="To: Princess Model";
    $envia[]="From: rodrigosalles@outlook.com";//e-mail para ser o e-mail de envio
    $assunto="Contato via formulário site Princess Model";

    //comando de envio
    mail($destinatario, $assunto, $mensagem, implode("\r\n", $envia));

    header("location:index.php?x=1");
?>






