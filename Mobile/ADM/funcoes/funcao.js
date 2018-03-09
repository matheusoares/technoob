$(document).ready(function () {

    //configuração do slider
    $('#slider').bjqs({
        height: "500px",
        width: "85%",
        responsive: true
    });

    /*configuracao do menu slide*/
    $('.menuslide').on('click', function () {
        if ($(".drop").hasClass("fechado")) {
            $('.drop').animate({
                marginLeft: "0px"}, 500, function () {
		$('body').css('overflow', 'hidden');
                $('.drop').removeClass("fechado");
                $('#mask').removeClass("fechado");
                $('#mask').css('display', 'block');
                $('.menuslide').css('display', 'none');
            });
        }
    });
    $('.fechar ,  #mask').on('click', function () {
        $("#mask").css("display", "none");
	$('body').css('overflow', 'auto');
        $('.drop').animate({
            marginLeft: "-100%"
        }, 500, function () {
            $(".drop").addClass("fechado");
            $('.menuslide').css('display', 'block');
        });
    });
    $('#btnSiga').on('click', function(){
        $('#siga').slideToggle();
        $('#siga').css('display', 'block');
        
    });
    
    //Configuração Search box 
    $('#lupa').on('click', function () {
        $('#searchBox').slideDown(0).css('display', 'block');
        $(this).slideUp(0).css('display', 'none');
    });
    $('#searchExit').on('click', function () {
        $('#searchBox').slideUp(0).css('display', 'none');
        $('#lupa').slideDown(0).css('display', 'block');
    });

    //adm page
    $('#btnCriar').on('click', function () {
        $('#criarPost').slideDown().css('display', 'block');
        $('#editarPost').slideUp();
        $('#excluirPost').slideUp();
    });
    $('#btnEditar').on('click', function () {
        $('#editarPost').slideDown().css('display', 'block');
        $('#criarPost').slideUp();
        $('#excluirPost').slideUp();
    });
    $('#btnExcluir').on('click', function () {
        $('#excluirPost').slideDown().css('display', 'block');
        $('#editarPost').slideUp();
        $('#criarPost').slideUp();
    });
    //remove zoom dos input 
    $("#senha , #email, #searchInput, #TextAreaPost").mouseover(zoomDisable).mousedown(zoomDisable);
function zoomDisable(){
  $('head meta[name=viewport]').remove();
  $('head').prepend('<meta name="viewport" content="user-scalable=0" />');
}
function zoomEnable(){
  $('head meta[name=viewport]').remove();
  $('head').prepend('<meta name="viewport" content="user-scalable=1" />');
}




});

