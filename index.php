<!-- start php -->
	<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Monster Web Design</title>
        <meta name="description" content="Empresa de diseño web">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon.ico" type="image/x-icon">

		<link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
    	<div class="container">
		  <!-- Navbar -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>

			      <a class="navbar-brand" href="#">
			        <img alt="Brand" src="img/logo.png">
			      </a>
			    </div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li><a href="#">Sobre Nosotros</a></li>
					<li><a href="#">Contacto</a></li>
					<li>
			      <?php
			      $nombre = " Fabian";
			      $apellido = "Morinigo!";
			      echo "<a href='#'>Welcome, $nombre " . " $apellido </a>";
			      ?>
			      </li>
			      </ul>

			    </div><!-- /.navbar-collapse -->			    
			  </div>
			</nav>		  
		  <!-- -->		
		</div>		  
		<!-- Carrousel -->

		<div id="carousel-example-generic" class="carousel slide" style="margin-bottom: 25px" data-ride="carousel">

		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="img/banner1.jpg" alt="...">
		      <div class="carousel-caption">
		        Carrousel 1
		      </div>
		    </div>
		    <div class="item">
		      <img src="img/banner2.jpg" alt="...">
		      <div class="carousel-caption">
		        Carrousel 2
		      </div>
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<!-- Fin Carouser -->

		<div class="container">
			<div class="row">
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="img/design.png" alt="design">
			      <div class="caption">
			        <h3>DISEÑO GRAFICO</h3>
			        <p>Branding, Web responsive, Editorial, Multimedia</p>
			        <p><a href="#" class="btn btn-primary" role="button">Mas Info..</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="img/marketing.jpg" alt="...">
			      <div class="caption">
			        <h3>MARKETING DIGITAL</h3>
			        <p>SEO, SEM, Analítica, Email mkt, Social Media, publicidad on-line</p>
			        <p><a href="#" class="btn btn-primary" role="button">Mas Info..</a></p>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6 col-md-4">
			    <div class="thumbnail">
			      <img src="img/software.png" alt="software">
			      <div class="caption">
			        <h3>SOFTWARE FACTORY</h3>
			        <p>Sistemas, E-commerce, Landing, DBA, Movil, Soporte, Consultoria</p>
			        <p><a href="#" class="btn btn-primary" role="button">Mas Info..</a></p>
			      </div>
			    </div>
			  </div>			  			  
			</div>			
		</div>
		

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>