<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $this->pageTitle;?></title>
    <link href="<?php echo Yii:: app()->themes->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Yii:: app()->themes->baseUrl;?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo Yii:: app()->themes->baseUrl;?>/css/main.css" rel="stylesheet">
	<link href="<?php echo Yii:: app()->themes->baseUrl;?>/css/animate.css" rel="stylesheet">	
	<link href="<?php echo Yii:: app()->themes->baseUrl;?>/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                    <span class="sr-only">Toggle navigation</span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                    <span class="icon-bar"></span>
		                </button>
		                <a class="navbar-brand" href="index.html">
		                	<img class="img-responsive" src="images/logo.png" alt="logo">
		                </a>                    
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li class="scroll active"><a href="#home">Home</a></li>
		                    <li class="scroll"><a href="#explore">Explore</a></li>                         
		                    <li class="scroll"><a href="#event">Event</a></li>
		                    <li class="scroll"><a href="#about">About</a></li>                     
		                    <li class="no-scroll"><a href="#twitter">Twitter</a></li>
		                    <li><a class="no-scroll" href="#" target="_blank">PURCHASE TICKETS</a></li>
		                    <li class="scroll"><a href="#contact">Contact</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

    

	<?php echo $content;  ?>

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy;2014<a target="_blank" href="http://shapebootstrap.net/"> Evento </a>Theme. All Rights Reserved. <br> Designed by <a target="_blank" href="http://shapebootstrap.net/">ShapeBootstrap</a></p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/http://maps.google.com/maps/api/js?sensor=true"></script>
  	<script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/gmaps.js"></script>
	<script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/coundown-timer.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo Yii:: app()->themes->baseUrl;?>/js/main.js"></script>  
</body>
</html>