<footer>
    <article>
        <?php
            if(isset($_GET["x"])){
                $recconfirma=$_GET["x"];
                if($recconfirma == 1){ ?>
                    <h3 style="color: #095C08; text-align: center; margin-top: 20%;">E-mail enviado com sucesso!</h3>
                <?php }}else{ ?>
        <form class="formulario" method="post" action="envia.php">
            <input type="text" name="fnome" required placeholder="Seu nome" class="campo">
            <input type="email" name="femail" required placeholder="Seu melhor e-mail" class="campo">
            <input type="text" name="fassunto" required placeholder="Assunto" class="campo">
            <textarea name="fmsg" rows="7" class="campo" required placeholder="Sua mensagem"></textarea>
            <input type="submit" value="Enviar" class="botao">
        </form>
        <?php } ?>
    </article>
    <article>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.1059949083615!2d-49.27806658549159!3d-25.434719639306802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce472f8f33c21%3A0x4a111b53656feff2!2sCD6%20Desenvolvimento%20de%20Pessoas%20e%20Neg%C3%B3cios!5e0!3m2!1spt-BR!2sbr!4v1656978844986!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </article>
    <p class="rodape">
        Todos os direitos reservados a Princess Model | Copy Right &copy; 2022 | <small><i>Desenvolvido com ♥ por Rodrigo Salles</i></small>
    </p>
</footer>