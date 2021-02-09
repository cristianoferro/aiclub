
//logo refresh
$('#logo').click(function(){
window.location.reload();
});

//menu lateral
$('.menu_trigger').mouseover(function(){
    $('.menu_trigger').attr('src','imagens/brain_hover.png');
});

$('.menu_trigger').mouseout(function(){
    $('.menu_trigger').attr('src','imagens/brain.png');
});

$('.menu_trigger').click(function(){
    $('#menu_pop a').slideToggle();
});

//cerebro da animação
$('#brain_main').mouseover(function(){
    $('#brain_main').attr('src','imagens/brain_hover.png');
});

$('#brain_main').mouseout(function(){
    $('#brain_main').attr('src','imagens/brain.png');
});

//slides de imagens no cerebro - codigo mais funcional

$('.apresent').click(function(){
  $(this).fadeOut(500);
  $(this).next().fadeIn().css('display','block');
});

$('.apresent:last-child').click(function(){
  $(this).fadeOut(500);
  $('#brain_main').fadeIn().css('display','block');
});

$('#brain_main').click(function(){
  $('.apresent:first').fadeIn().css('display','block');
  $('#brain_main').fadeOut(500);
});

//Ver o conteúdo dos artigos - codigo mais funcional
$('.vermais').click(function(){
    //Fade out da do botao
    $(this).fadeOut(500, function(){
    //guardar o valor do proximo elemento irmao (o texto)
    var vermais = $(this).next();
    //fazer aparecer o texto
    $(vermais).css('display','block');
    //fazer aparecer o botao de fechar
    $('.fechar').css('display','block');
});
});

//fechar o conteudo - codigo mais funcional
$('.fechar').click(function(){
    //Fade out do botao
    $(this).fadeOut(200, function(){
    //fazer desaparecer o texto       parent prev
    $(this).parent().css('display','none');
    $(this).parent().prev().css('display','block');
});
});


//scroll

$(window).scroll(function(){
var current_scroll = $(window).scrollTop();
if( current_scroll > 20){
    $('#top').fadeOut();
    $('#menu_pop').fadeIn();
}else{
    $('#top').fadeIn();
    $('#menu_pop').fadeOut();

}

});

//Eventos de click nos menus
$('#menu a').click(function(e){
    //Impedir o comportamento normal do a
    e.preventDefault();
    var target = $(this).attr('href');
    var distance_top = $(target).offset().top;
    //Animar o scroll da página para a secção desejada
    $('html').animate({scrollTop:distance_top-90},1000);
});

$('#menu_pop a').click(function(e){
    //Impedir o comportamento normal do a
    e.preventDefault();
    var target = $(this).attr('href');
    var distance_top = $(target).offset().top;
    //scroll
    $('html').animate({scrollTop:distance_top-90},1000);
    $('#menu_pop a').fadeOut();
});


// APPS

var indice_atual = 0;
var total_apps = $('.apps_menu').length;
var total_conteudos = $('.app').length;


//navegar com a 1a seta
$('#next1').click(function(param){

    var distance = $('#tempos1').offset().top;
    $('html').animate({scrollTop:distance-50},400);
});


//navegar com as setas - codigo do professor
$('.next_class').click(function(){
  
  var top = $(this).parent().next().offset().top;
  $('html,body').animate({scrollTop:top-50},400);
});


//seta direita

$('#seta_direita').click(function(){
  if(indice_atual < total_apps - 1){
    var proximo_indice = indice_atual + 1;
  }
  else{
    var proximo_indice = 0;
  }
  //mover para os titulos das apps para o lado e colocar outro visivel
  $('.apps_menu').eq(indice_atual).stop().animate({'left':'-100%'});
  $('.apps_menu').eq(proximo_indice).stop().css('left','100%');
  $('.apps_menu').eq(proximo_indice).stop().animate({'left':'40%'});
  //mover o conteudo para o lado e colocar outro visivel
  $('.app').eq(indice_atual).stop().animate({'left':'-100%'});
  $('.app').eq(proximo_indice).stop().css('left','100%');
  $('.app').eq(proximo_indice).stop().animate({'left':'0%'});

  indice_atual = proximo_indice;
});

//seta esquerda

$('#seta_esquerda').click(function(){
  if(indice_atual > 0){
    var proximo_indice = indice_atual - 1;
  }
  else{
    var proximo_indice = total_apps - 1;
  }
  //mover para os titulos das apps para o lado e colocar outro visivel
  $('.apps_menu').eq(indice_atual).stop().animate({'left':'100%'});
  $('.apps_menu').eq(proximo_indice).stop().css('left','-100%');
  $('.apps_menu').eq(proximo_indice).animate({'left':'40%'});
  //mover o conteudo para o lado e colocar outro visivel
  $('.app').eq(indice_atual).stop().animate({'left':'100%'});
  $('.app').eq(proximo_indice).stop().css('left','-100%');
  $('.app').eq(proximo_indice).animate({'left':'0%'});

  indice_atual = proximo_indice;
});

//SOBRE
    //fazer janela aparecer
    $('#sobre_botao').click(function(){
        $('#sobre').css('display','block');
    });
    //fazer janela desaparecer
    $('#x5').click(function(){
        $('#sobre').css('display','none');
    });
