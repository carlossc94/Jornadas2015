<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;
use app\models\Taller;
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
                    <a class="navbar-brand" href="index.php"><span>Jornada Académica</span> ISC 2015</a>
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

<<<<<<< HEAD
                        <li><?= Html::a('<span class="glyphicon glyphicon-text-width"></span> Talleres Y Conferencias', ['site/index']); ?></li>

                        
=======
                        <li><?= Html::a('<span class="glyphicon glyphicon-text-width"></span> Talleres Y Conferencias', ['site/talleres']); ?></li>

>>>>>>> origin
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
                    <div class="box-bottom"> 
      							 <h4>Conferencias</h4>
      							</div>
    								<div class="icon">
    								<i class="fa fa-desktop fa-3x"></i>
    								</div>
    								<p>

    								<ul class="list-group">
                      <li>Drones Implicaciones y Usos:<span class="badge">Lic. Jesús Emanuel Novelo</span></li>
                      <li>Informática Forense. <span class="badge">Ing. Edgar Ivan Justo Dominguez</span></li>
                    </ul>

    								</p>

    							</div>
    							<!--<div class="box-bottom">
    								<a href="#">Local San Juan 10:00-11:00.</a>
    							</div>-->
    						</div>
    					</div>
    					<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
                    <div class="box-bottom">
      							 <h4>Talleres</h4>
      							</div>
    								<div class="icon">
    								<i class="fa fa-pagelines fa-3x"></i>
    								</div>
    								<p>
                      <ul class="list-group">
    								 <?php
                     $talleres = Taller::find()->All();
                     foreach ($talleres as $key => $row) {
                       echo '<li>'.$row->nombre.'<br><span class="badge">'.$row->instructor.'</span></li>';
                     }
                     ?>
                   </ul>
    								</p>

    							</div>
    							<!--<div class="box-bottom">
    								<a href="#">Learn more</a>
    							</div>-->
    						</div>
    					</div>
    					<div class="col-lg-4">
    						<div class="box">
    							<div class="box-gray aligncenter">
                    <div class="box-bottom">
      							 <h4>Concursos</h4>
      							</div>

    								<div class="icon">
    								<i class="fa fa-edit fa-3x"></i>
    								</div>
    								<p>
    								 RALLY con diversos concursos
    								</p>

    							</div>
    							<!--<div class="box-bottom">
    								<a href="#">Learn more</a>
    							</div>-->
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
            <div class='well well-sm'>
    			<div class="col-lg-12">
    				<div class="solidline">
    				</div>
    			</div>
                <img src="<?php  echo Url::base();?>/img/bannerjornada.png" align="line-center"/>
    		</div>
            </div>

    		<!-- end divider -->


    	</div>
    	</section>
    	<footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<div class="widget">
    					<h5 class="widgetheading">Academia de Ingeniería en Sistemas Computacionales</h5>
    					<address>
    					<strong>ITSVA</strong><br>
    					 <br>KM. 3.5 CARR. VALLADOLID-TIZIMIN
    					 TABLAJE NO.8850</address>
    					<p>
    						<i class="icon-phone"></i> (01) 985-856-6300 <br>
    						<!--<i class="icon-envelope-alt"></i> email@domainname.com-->

    					</p>

    				</div>
                    <div class="copyright">
                            <p>
                                <span>&copy; Desarrollado con Yii2 Framework    </span><target="_blank"></a>
                            </p>
                        </div>
    			</div>
    			<!--<div class="col-lg-6">
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
    			</div>-->
    		<!--	<div class="col-lg-4">
    				<div class="widget">
    					<h5 class="widgetheading">Latest posts</h5>
    					<ul class="link-list">
    						<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
    						<li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
    						<li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
    					</ul>
    				</div>
    			</div>-->

    		</div>
    	</div>
    	<!--<div id="sub-footer">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class="copyright">
    						<p>
    							<span>&copy; Yii Team Develop. By </span><a href="http://www.soluciti.com.mx" target="_blank">Developer</a>
    						</p>
    					</div>
    				</div>
    				<!--<div class="col-lg-6">
    					<ul class="social-network">
    						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
    						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
    						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
    						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
    						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
    					</ul>
    				</div>-->
    			<!--</div>
    		</div>
    	</div>-->
    	</footer>
    </div>
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>




</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
