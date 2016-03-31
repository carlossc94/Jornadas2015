<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
//$directorio = Url::base()."/images/webglifos/";
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>

    <title>Jornadas Académicas 2015-Tecnologías Móviles</title>
    <?php $this->head() ?>
  </head>
  <body>
<?php $this->beginBody() ?>
<div id="wrapper">
  <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><span>Jornada Académica</span> ISC 2015</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active">
                          <?= Html::a('<span class="glyphicon glyphicon-home"></span> Inicio', ['site/index']); ?>
                          <!--<a href="index.html"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>-->
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Features <b class=" icon-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="typography.html">Talleres</a></li>
                                <li><a href="components.html">Registro</a></li>
								                <li><a href="pricingbox.html">Login</a></li>
                            </ul>
                        </li>-->
                        <li><?= Html::a('<span class="glyphicon glyphicon-text-width"></span> Talleres', ['site/talleres']); ?></li>
                        <li><?= Html::a('<span class="glyphicon glyphicon-list-alt"></span> Registro', ['site/registro']); ?></li>
                        <li><?= Html::a('<span class="glyphicon glyphicon-user"></span> Login', ['site/login']); ?></li>


                    </ul>
                </div>
            </div>
        </div>
	</header>



	<?php echo $content;?>
  <section class="callaction">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-12">
  				<div class="big-cta">
  					<div class="cta-text">
  						<h2><span>Actividades</span> de la Jornada Académica ISC 2015</h2>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	</section>

    <section id="content">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="row">
    					<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
    								<h4>Conferencias</h4>
    								<div class="icon">
    								<i class="fa fa-desktop fa-3x"></i>
    								</div>
    								<p>
    								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
    								</p>

    							</div>
    							<div class="box-bottom">
    								<a href="#">Learn more</a>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
    								<h4>Talleres</h4>
    								<div class="icon">
    								<i class="fa fa-pagelines fa-3x"></i>
    								</div>
    								<p>
    								 INSCRIBETE A LOS TALLERES DE LAS JORNADA!
    								</p>

    							</div>
    							<div class="box-bottom">
    								<a href="index.php">INSCRIBIRSE</a>
    							</div>
    						</div>
    					</div>
    					<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
    								<h4>Concursos</h4>
    								<div class="icon">
    								<i class="fa fa-edit fa-3x"></i>
    								</div>
    								<p>
    								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
    								</p>

    							</div>
    							<div class="box-bottom">
    								<a href="#">Learn more</a>
    							</div>
    						</div>
    					</div>
    					<!--<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
    								<h4>Valid HTML5</h4>
    								<div class="icon">
    								<i class="fa fa-code fa-3x"></i>
    								</div>
    								<p>
    								 Voluptatem accusantium doloremque laudantium sprea totam rem aperiam.
    								</p>

    							</div>
    							<div class="box-bottom">
    								<a href="#">Learn more</a>
    							</div>
    						</div>
    					</div>-->
    				</div>
    			</div>
    		</div>
    		<!-- divider -->
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="solidline">
    				</div>
    			</div>
    		</div>
    		<!-- end divider -->
    		<!-- Portfolio Projects -->
    		<div class="row">
    			<div class="col-lg-12">
    				<h4 class="heading">Recent Works</h4>
    				<div class="row">
    					<section id="projects">
    					<ul id="thumbs" class="portfolio">
    						<!-- Item Project and Filter Name -->
    						<li class="col-lg-3 design" data-id="id-0" data-type="web">
    						<div class="item-thumbs">
    						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
    						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1" href="img/works/1.jpg">
    						<span class="overlay-img"></span>
    						<span class="overlay-img-thumb font-icon-plus"></span>
    						</a>
    						<!-- Thumb Image and Description -->
    						<img src="img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
    						</div>
    						</li>
    						<!-- End Item Project -->
    						<!-- Item Project and Filter Name -->
    						<li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
    						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
    						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 2" href="img/works/2.jpg">
    						<span class="overlay-img"></span>
    						<span class="overlay-img-thumb font-icon-plus"></span>
    						</a>
    						<!-- Thumb Image and Description -->
    						<img src="img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
    						</li>
    						<!-- End Item Project -->
    						<!-- Item Project and Filter Name -->
    						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
    						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
    						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="img/works/3.jpg">
    						<span class="overlay-img"></span>
    						<span class="overlay-img-thumb font-icon-plus"></span>
    						</a>
    						<!-- Thumb Image and Description -->
    						<img src="img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
    						</li>
    						<!-- End Item Project -->
    						<!-- Item Project and Filter Name -->
    						<li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
    						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
    						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="img/works/4.jpg">
    						<span class="overlay-img"></span>
    						<span class="overlay-img-thumb font-icon-plus"></span>
    						</a>
    						<!-- Thumb Image and Description -->
    						<img src="img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
    						</li>
    						<!-- End Item Project -->
    					</ul>
    					</section>
    				</div>
    			</div>
    		</div>

    	</div>
    	</section>
    	<footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-3">
    				<div class="widget">
    					<h5 class="widgetheading">Get in touch with us</h5>
    					<address>
    					<strong>Moderna company Inc</strong><br>
    					 Modernbuilding suite V124, AB 01<br>
    					 Someplace 16425 Earth </address>
    					<p>
    						<i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
    						<i class="icon-envelope-alt"></i> email@domainname.com
    					</p>
    				</div>
    			</div>
    			<div class="col-lg-3">
    				<div class="widget">
    					<h5 class="widgetheading">Pages</h5>
    					<ul class="link-list">
    						<li><a href="#">Press release</a></li>
    						<li><a href="#">Terms and conditions</a></li>
    						<li><a href="#">Privacy policy</a></li>
    						<li><a href="#">Career center</a></li>
    						<li><a href="#">Contact us</a></li>
    					</ul>
    				</div>
    			</div>
    			<div class="col-lg-3">
    				<div class="widget">
    					<h5 class="widgetheading">Latest posts</h5>
    					<ul class="link-list">
    						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
    						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
    						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
    					</ul>
    				</div>
    			</div>
    			<div class="col-lg-3">
    				<div class="widget">
    					<h5 class="widgetheading">Flickr photostream</h5>
    					<div class="flickr_badge">
    						<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
    					</div>
    					<div class="clear">
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div id="sub-footer">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-6">
    					<div class="copyright">
    						<p>
    							<span>&copy; Yii Team Develop. By </span><a href="http://www.soluciti.com.mx" target="_blank">Developer</a>
    						</p>
    					</div>
    				</div>
    				<div class="col-lg-6">
    					<ul class="social-network">
    						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
    						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
    						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
    					</ul>
    				</div>
    			</div>
    		</div>
    	</div>
    	</footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>