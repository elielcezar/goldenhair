(function($) {



   $().ready(function() {        

    

    /*-- servicos home --------------------------------------------------*/    

    $('.icon-para-elas').click(function(){        
        $('#servicos-feminino').removeClass('fadeOutLeft').addClass('fadeInLeft').css('display','block');   
    });
    $('.voltar').click(function(){
        $('#servicos-feminino').removeClass('fadeInLeft').addClass('fadeOutLeft');   
    });

    
    /* retorna para a home com os servicos Para Elas aberto */
    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null){
           return null;
        } else{
           return results[1] || 0;
        }
    }    
    var servicos = $.urlParam('servicos');
    if(servicos=="f"){
        $('#servicos-feminino').removeClass('fadeOutLeft').addClass('fadeInLeft').css('display','block');   
    }


   	

       

    /*-- novidades home -----------------------------------------------*/

   	$('.front #carousel-novidades .item').unwrap();

	$('.front #carousel-novidades .item-1').addClass('active');

			





	/*--- contato ----------------------------------------------------*/

    /* ajustes coluna e post it */

    $('body.contato #conteudo').removeClass('col-sm-9').addClass('col-sm-12');

    $('body.contato #sidebar').hide();



    });



})(jQuery);