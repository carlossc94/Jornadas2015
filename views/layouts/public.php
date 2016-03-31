<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAssetAdmin;
AppAssetAdmin::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body>
<?php $this->beginBody() ?>
   <div class="container">



	<div class="page-header">

   <h1>
    Sistema de administracion
      <small>Ingeniería en Sistemas Computacionales 2015</small>

   </h1>
</div>
	<div class="row">
		<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
  				<li class="active"><a href="#">Menú</a></li>
          <li><?php echo Html::a('<span class="fa fa-calendar"></span> Inscripcion',array('dashboard/inscripcion')); ?></li>

          <li><?php echo Html::a('<span class="fa fa-power-off"></span> Salir',array('dashboard/logout')); ?></li>
		</ul>
		</div>
		<div class="col-md-9">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Administración</h3>
          </div>

        <?php echo $content; ?>
      </div>

		</div>

	</div>
	<div class="row">
	<footer class="col-md-12">
		
Copyright &copy; <?php echo date('Y'); ?><br/>
	</footer>
	</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
