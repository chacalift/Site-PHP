// JavaScript Document

// -------------------- Efeito banner rotativo --------------------
jQuery(function(){
    jQuery(".slide").slick({
        autoplay:true,
        pauseOnHover:false
    })
})

//---------------------------- Função para converter para reais
function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
function moeda(v){
    v=v.replace(/\D/g,"") // permite digitar apenas numero
    v=v.replace(/(\d{1})(\d{11})$/,"$1.$2") // 1.000.000.000,00
    v=v.replace(/(\d{1})(\d{8})$/,"$1.$2") // 1.000.000,00
    v=v.replace(/(\d{1})(\d{5})$/,"$1.$2") // 1.000,00
    v=v.replace(/(\d{1})(\d{1,2})$/,"$1,$2") // 1,00
    return "R$ " + v;
}

//---------------------------- Função para a exclusão de produtos
function verifica(recid, recfoto, recpag, reclimite){
    if(confirm("Tem certeza de que deseja excluir definitivamente esta cadastro?")){
        window.location="excprod.php?id=" + recid + "&foto=" + recfoto + "&pag=" + recpag + "&limite=" + reclimite
    }
}

//---------------------------- Função para a exclusão de banners
function verificabanner(recbanner){
    if(confirm("Tem certeza de que deseja excluir este banner permanentemente?")){
        window.location="excluirbanner.php?banner=" + recbanner
    }
}

//---------------------------- Função para a exclusão de usuarios
function validauser(recuser){
    if(confirm("Tem certeza de que deseja excluir este usuário permanentemente?")){
        window.location="excluiruser.php?userid=" + recuser
    }
}

//---------------------------- Função para o menu mobile
jQuery(function(){
    jQuery(".menumobile i").click(function(){
        jQuery(".submenu").animate({
        height:"toggle"
        }, 500)
    })
})






