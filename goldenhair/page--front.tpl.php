
<!-- HEADER --> 
 <header>  
    <div class="container">
        <h1 class="logo"><a href="#">Golden Hair</a></h1>
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
            <li><a data-toggle="pill" href="#Section-1">Serviços</a></li>
            <li><a data-toggle="pill" href="#Section-2">Novidades</a></li> 
            <li><a data-toggle="pill" href="#Section-3">Produtos</a></li>             
            <li><a data-toggle="pill" href="#Section-5">Contato</a></li> 
            <li class="facebook"><a href="#">Facebook</a></li> 
            <li class="instagram"><a href="#">Instagram</a></li> 
          </ul>  
      </div>
   </div><!-- /.navbar-collapse --> 

  </div>  
</nav>

 <div id="principal">

<!--  SECTION-1 -->  
<section id="Section-1">
	<div class="container"> 	

    <h2>Serviços</h2>

    <div class="row">

      <div class="col-sm-6">
        <div class="para-elas">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_elas.png" class="img-responsive" />
          <a href="#"><strong>Para Elas</strong></a>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="para-eles">
          <img src="<?php print base_path() . path_to_theme() .'/' ?>/img/bg_eles.png" class="img-responsive" />
          <a href="#"><strong>Para Eles</strong></a>
        </div>
      </div>

    </div>
     
  
	
	
	</div><!-- / CONTAINER-->
</section>

<!-- / SECTION-1 -->

<!-- SECTION-2 -->
<section id="Section-2">
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
<section id="Section-3">
<div class="container">
   <h2>Produtos</h2>

    <div id="carousel-produtos" class="carousel slide" data-ride="carousel">                             

            <!-- Wrapper for slides --> 
            <div class="carousel-inner">
              <div class="item item-1 active">
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_blueken.jpg" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_revole.jpg" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_somejoy.jpg" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_soreal.jpg" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_wulla.jpg" /></div>
                <div class="produto"><img src="<?php print base_path() . path_to_theme() .'/' ?>/img/produto_wurlii.jpg" /></div>
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

 <!-- SECTION-4 -->
<section id="Section-4">
  <div class="container">    

    
       
  </div><!-- / CONTAINER-->
 </section> 
 <!-- / SECTION-4 -->


 <!-- SECTION-5 -->
<section id="Section-5">
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
<section id="Section-6">

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