<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\Menu;

AppAsset::register($this);
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

<body class="post-template page-template page grey lighten-5">
<?php $this->beginBody() ?>

<div class="wrap">
    <?php


    ?>
  <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'My Company',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',

                ],
            ]);
            /*echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => [
                    ['label' => 'Home', 'url' => ['/site/index']],
                    ['label' => 'About', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'url' => ['/site/contact']],
                    ['label' => 'Registro', 'url' => ['/site/registro']],
                    Yii::$app->user->isGuest ?
                        ['label' => 'Login', 'url' => ['/site/login']] :
                        ['label' => 'Logout (' . Yii::$app->user->identity->email . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']],
                ],
        ],

    ]);


                         NavBar::end();*/
                    ?>
            <a class="button-collapse" href="#" data-activates="nav-mobile"><i class="mdi-navigation-menu"></i></a>
        </div>
    </nav>



    <main class="content" role="main">
        <section id="blog-intro" class="cyan section z-depth-1 article-intro" style="background-image:url('images/post.jpg');"></section>
    <section id="main-inner-container" class="container">
        <article class="post page card-panel z-depth-1 article-container">
            <header>

                <h1>Jornada Académica 2015</h1>
            </header>
            <section  class="post-content">





            </section>

            <section  id ="ind" class="post-content">
                <?php echo $content; ?>
            </section>
            <footer>
                <section id="social-share">
                    <p>
                        Share this post: <br>
                        <a href="#" class="btn-floating white cyan-text"><i class="mdi-social-share"></i></a>
                        <a href="#" class="btn-floating white cyan-text"><i class="fa fa-facebook cyan-text"></i></a>
                        <a href="#" class="btn-floating white cyan-text"><i class="fa fa-google-plus cyan-text"></i></a>
                    </p>
                </section>
            </footer>
        </article>
    </section>
</main>


<footer class="site-footer clearfix">
             <section class="copyright grey-text darken-2"><a href="/" class="grey-text darken-5"><?php echo Html::encode($this->title); ?></a> &copy; 2015</section>
             <section class="poweredby grey-text darken-2"> <a href="http://yiiframework.com" class="grey-text darken-5">Yii2</a></section>
        </footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
