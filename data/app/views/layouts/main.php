<?php

use yii\easyii\modules\shopcart\api\Shopcart;
use yii\easyii\modules\subscribe\api\Subscribe;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use yii\widgets\Menu;

$goodsCount = count(Shopcart::goods());
?>
<?php $this->beginContent('@app/views/layouts/base.php'); ?>

<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

<header>
    <?php if (IS_ROOT || !Yii::$app->user->isGuest && Yii::$app->getModule('admin')) { ?>
        <nav id="tf-menu" class="">
        <?php } else { ?>
            <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
            <?php } ?>
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Neeby IT</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home" class="page-scroll">Inicio</a></li>
                        <li><a href="#tf-about" class="page-scroll">Quienes Somos</a></li>
                        <li><a href="#tf-team" class="page-scroll">Equipo</a></li>
                        <li><a href="#tf-services" class="page-scroll">Servicios</a></li>
                        <li><a href="#tf-works" class="page-scroll">Portfolio</a></li>
                        <li><a href="#tf-testimonials" class="page-scroll">Testimonios</a></li>
                        <li><a href="#tf-contact" class="page-scroll">Contactos</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

</header>


<main>
    <?php if ($this->context->id != 'site') : ?>
        <br/>
        <?=
        Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
    <?php endif; ?>
    <?= $content ?>
    <div class="push"></div>
</main>

<footer>
    <div class="container footer-content">
        <div class="row">
            <div class="col-md-2">
                Suscribirse a Boletines de Noticias
            </div>
            <div class="col-md-6">
                <?php if (Yii::$app->request->get(Subscribe::SENT_VAR)) : ?>
                    Se ha suscrito
                <?php else : ?>
                    <?= Subscribe::form() ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 text-right">
                ©2016 Neeby
            </div>
        </div>
    </div>
</footer>
<?php $this->endContent(); ?>
