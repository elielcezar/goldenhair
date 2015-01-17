(function($) {

   $().ready(function() { 

   	/*-- novidades home -----------------------------------------------*/

   	$('.front #carousel-novidades .item').unwrap();
	$('.front #carousel-novidades .item-1').addClass('active');
			


	/*--- contato ----------------------------------------------------*/
    /* ajustes coluna e post it */
    $('body.contato #conteudo').removeClass('col-sm-9').addClass('col-sm-12');
    $('body.contato #sidebar').hide();

    });

})(jQuery);