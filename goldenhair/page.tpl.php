<header>
	<div class="container">

		<div class="wrapper">

			<div class="sidebar col-sm-4 col-lg-4">
				<div class="logo">
					<a class="brand" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
						<img class="img-responsive" src="<?php print base_path() . path_to_theme() .'/' ?>/img/famacor.png" alt="logo" />
					</a>
				</div><!-- logo -->
			</div>

			<div class="sidebar col-sm-8 col-lg-8">							
				<?php print render($page['header']); ?>				
				<!--div class="menu-social-media">
					<ul>
						<li class="facebook"><a href="https://www.facebook.com/detroit.brasil" target="_blank">Facebook</a></li>
						<li class="rss"><a href="http://www.detroitbr.org/feed/rss" target="_blank">RSS</a></li>
					</ul>
				</div-->				

				<!-- Static navbar -->
			      <div class="navbar navbar-default menu-principal" role="navigation">
			        
			          <div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			              <span class="sr-only">Toggle navigation</span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			              <span class="icon-bar"></span>
			            </button>            
			          </div>
			          <div class="navbar-collapse collapse">
			            <ul class="nav navbar-nav">
			               <li class="active"><a href="#topo">Home</a></li>
				            <li><a data-toggle="pill" href="#Section-1">Serviços</a></li>
				            <li><a data-toggle="pill" href="#Section-2">Novidades</a></li> 
				            <li><a data-toggle="pill" href="#Section-3">Produtos</a></li>             
				            <li><a data-toggle="pill" href="#Section-5">Contato</a></li> 
				            <li class="facebook"><a href="#">Facebook</a></li> 
				            <li class="instagram"><a href="#">Instagram</a></li> 
			            </ul>            
			          </div><!--/.nav-collapse -->        			          
			      </div> 

			</div><!-- conteudo header -->

		</div>
					
	</div>      

</header><!-- PAGE-HEADER-->

<?php if (($title)&&(!$is_front)): ?>
		<div class="titulo-pagina">
			<div class="container">
				<div id="conteudo" class="col-sm-12">
					<h1 class="title" id="page-title"><?php print $title; ?></h1>          
          		</div>
          	</div>
      	</div>
     <?php endif; ?>

<section id="principal">

	<div class="container">
		
		<div class="row">

			<div id="conteudo" class="col-sm-9">								
				 <?php if ($messages): ?>
		          <div id="messages">
		          	<div class="section clearfix">
		            <?php print $messages; ?>
		          </div></div> <!-- /.section, /#messages -->          
		          <?php endif; ?>
		          <?php if ($tabs): ?>
		            <div class="tabs">
		              <?php print render($tabs); ?>
		            </div>
		          <?php endif; ?>      		    
		          
		          <?php print render($page['content']); ?>		      	
	        </div> <!-- conteudo -->

			<div id="sidebar" class="col-sm-3">				
				<?php print render($page['sidebar']); ?>
			</div><!-- sidebar -->

		</div>	   
	</div><!-- container -->
</section><!-- principal -->
 
<!-- FOOTER-->
<div class="container">
<footer> 
        
        <?php print render($page['footer']); ?>
        
       
		<p class="legal">
			
		</p>
        
</footer>
</div>	 
 
</div> <!-- /container -->
<!--/ CONTENT -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/bootstrap.js" type="text/javascript"></script>
<script src="<?php print base_path() . path_to_theme() .'/' ?>/js/geral.js" type="text/javascript"></script>
