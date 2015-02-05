
<!-- HEADER --> 
 <header>  
    <div class="container">
        <h1 class="logo"><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Golden Hair</a></h1>
        <div class="telefone">41 3013-1414</div>
    </div>
	</header>
<!-- / HEADER -->


<nav id="topnav" class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>   
    </div> 

    <div class="collapse navbar-collapse navbar-ex1-collapse">   
       <div class="menu-secoes">
       <ul id="menu-secoes" class="nav navbar-nav">
            <li class="active"><a href="#topo">Home</a></li>
            <li><a data-toggle="pill" href="#missao">O Salão</a></li>
            <li><a data-toggle="pill" href="#servicos">Serviços</a></li>
            <li><a data-toggle="pill" href="#novidades">Novidades</a></li> 
            <li><a data-toggle="pill" href="#produtos">Produtos</a></li>             
           <li><a href="<?php print $front_page; ?>trabalhe-conosco">Trabalhe Conosco</a></li>             
            <li><a data-toggle="pill" href="#contato">Contato</a></li> 
            <li class="facebook"><a href="https://www.facebook.com/pages/Golden-Hair/1440308909590166?fref=ts" target="_blank">Facebook</a></li> 
            <li class="instagram"><a href="#">Instagram</a></li> 
          </ul>  
      </div>
   </div><!-- /.navbar-collapse --> 

  </div>  
</nav>

 <div id="principal">

<section id="missao">
  <div class="container">   
    <p>O Golden Hair Cabeleireiros e Estética tem como missão transformar o sonho da mulher em realidade, deixando-a mais linda, satisfeita, contente e com sua auto-estima elevada.</p>
    <p>Nós amamos o que fazemos!</p>
</div>
</section>

<!--  SECTION-1 -->  
<section id="servicos">
	<div class="container"> 	

    <h2>Serviços</h2>

    <div class="servicos-geral">
        <div class="row">
          <div class="col-sm-6">
            <div class="icon-para-elas">
              <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_elas.png" alt="para elas" class="img-responsive" />
              <h3><strong>Para Elas</strong></h3>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="icon-para-eles">
            <a href="http://ecwd.net/goldenhair2/para-eles">
              <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_eles.png" alt="para eles" class="img-responsive" />
              <h3><strong>Para Eles</strong></h3>
            </a>
            </div>
          </div>
        </div>
    </div>
        
            <div id="servicos-feminino" class="animated servico-especifico">
                <div class="container">
                <div class="voltar"><a>X | Voltar</a></div>                    
                <div class="row">                     
                    <div class="col-sm-4">
                    <div class="icon">
                        <a href="<?php print $front_page; ?>cabelo">
                        <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_cabelo2.png" alt="cabelo" class="img-responsive" />
                        <h4>Cabelo</h4>                        
                        </a>    
                    </div>
                  </div>
                    <div class="col-sm-4">
                    <div class="icon">
                        <a href="<?php print $front_page; ?>est%C3%A9tica">
                            <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_estetica2.png" alt="estetica" class="img-responsive" />
                            <h4>Estética</h4>                        
                        </a>
                    </div>
                  </div>
                     <div class="col-sm-4">
                    <div class="icon">                        
                        <a href="<?php print $front_page; ?>maquiagem">
                            <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_maquiagem2.png" alt="maquiagem" class="img-responsive" />
                            <h4>Maquiagem</h4>                        
                        </a>
                    </div>
                  </div>                
                </div>
                
                <div class="row">          
                  <div class="col-sm-4">
                    <div class="icon">
                        <a href="<?php print $front_page; ?>podologia">
                            <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_podologia2.png" alt="podologia" class="img-responsive" />
                            <h4>Podologia</h4>                        
                        </a>
                    </div>
                  </div>
                    <div class="col-sm-4">
                    <div class="icon">
                        <a href="<?php print $front_page; ?>manicurepedicure">
                            <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_manicure2.png" alt="manicure" class="img-responsive" />
                            <h4>Manicure / Pedicure</h4>    
                        </a>
                    </div>
                  </div>
                    <div class="col-sm-4">
                    <div class="icon">
                        <a href="<?php print $front_page; ?>depila%C3%A7%C3%A3o">
                            <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_depilacao2.png" alt="depilacao" class="img-responsive" />
                            <h4>Depilação</h4>                        
                        </a>
                    </div>
                  </div>                    
                    
                </div>
                </div>    
            </div>
    
        
    
	</div><!-- / CONTAINER-->
</section>

<!-- / SECTION-1 -->

<!-- SECTION-2 -->
<section id="novidades">
	<div class="container">

    <h2>Novidades</h2>
    
         <div id="carousel-novidades" class="carousel slide" data-ride="carousel">                      
            <!-- Wrapper for slides -->            
            <?php print views_embed_view('noticias_home', 'block_1'); ?>                         
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-novidades" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-novidades" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
      </div><!-- carousel -->
   

	</div><!-- / CONTAINER-->
 </section> 
 <!-- / SECTION-2 -->
 
 <!-- SECTION-3 -->
<section id="produtos">
<div class="container">
   <h2>Produtos</h2>

    <div id="carousel-produtos" class="carousel slide" data-ride="carousel">                             

            <!-- Wrapper for slides --> 
            <div class="carousel-inner">
              <div class="item item-1 active">
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_blueken.jpg" alt="produto" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_revole.jpg" alt="produto" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_somejoy.jpg" alt="produto" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_soreal.jpg" alt="produto" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_wulla.jpg" alt="produto" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_wurlii.jpg" alt="produto" /></div>
              </div>
            </div> 

             <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>              
          </ol>   
                               
    </div>

	</div><!-- / CONTAINER-->
</section> 
 <!-- / SECTION-3 -->

 <section id="fachada">
<div class="container">
</div>
</section>

 
 <!-- SECTION-5 -->
<section id="contato">
  <div class="container">    

    <div class="row">
      <div class="col-sm-4">
        <h2>Endereço</h2>
        <p>Av. Sete de Setembro, 2775 loja 2040<br />
          Curitiba - PR<br />          
        </p>
      </div>
      <div class="col-sm-4">
        <h2>Contato</h2>
        <p>Telefone: 041 3013-1414<br />
          Email: contato@goldenhair.com.br<br />          
        </p>
      </div>
      <div class="col-sm-4">
        <h2>Horários de Atendimento</h2>
        <p>Segunda a Sexta: 11:00 às 22:00<br/>
          Sábados e Domingos: 11:00 às 22:00
        </p>
      </div>

    </div>
   
  </div><!-- / CONTAINER-->
 </section> 
 <!-- / SECTION-5 -->

 <!-- SECTION-6 -->
<section id="mapa">

   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3603.0184373458032!2d-49.26702745275344!3d-25.437647122593088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce468bd71a9c3%3A0xd42dc845c0cb1b6c!2sAv.+Sete+de+Setembro%2C+2775+-+Rebou%C3%A7as%2C+Matriz%2C+Curitiba+-+PR%2C+80230-010!5e0!3m2!1spt-BR!2sbr!4v1420767716553" width="100%" height="400" frameborder="0" style="border:0"></iframe>

 </section> 
 <!-- / SECTION-6 -->

 
 </div>
<!-- / FOOTER -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.nicescroll.min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.parallax-1.1.3.j" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>

  

<script src="<?php echo $directory; ?>/js/geral.js" type="text/javascript"></script>

<script>
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll({offset: {top:0}});

  jQuery('.seta').localScroll({offset: {top:0}});

	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	jQuery('#Section-1').parallax("90%", 1);
	jQuery('#Section-2').parallax("1%", 1);
	jQuery('#Section-3').parallax("90%", 1);
  jQuery('#Section-4').parallax("1%", 1);
  jQuery('#Section-5').parallax("200%", 1);
  jQuery('#Section-6').parallax("1%", 1);


})
</script>

 <!--[if !IE]><!-->
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/jquery.inview.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/custom_inview.js"></script>
<!--<![endif]--> 


<script type="text/javascript">
var janela = $(window).width();
    if(janela>767){          
          $(document).scroll(function () {
              var y = $(this).scrollTop();        
              if (y > 650) {
                $('#topnav').addClass('fixed-top');          
              } else {          
                $('.navbar').removeClass('fixed-top');          
              }
          }); 
    }
</script>
