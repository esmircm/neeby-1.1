<?php

// var_dump(Yii::$app->basePath.'/img/01.jpg');die;
use yii\easyii\modules\article\api\Article;
use yii\easyii\modules\carousel\api\Carousel;
use yii\easyii\modules\gallery\api\Gallery;
use yii\easyii\modules\guestbook\api\Guestbook;
use yii\easyii\modules\news\api\News;
use yii\easyii\modules\page\api\Page;
use yii\easyii\modules\text\api\Text;
use yii\helpers\Html;

$page = Page::get('page-index');

$this->title = $page->seo('title', $page->model->title);
//var_dump(Yii::$app->basePath);die
$primeraImagen = Gallery::imagen(42);
foreach ($primeraImagen as $imagen1) {
// var_dump($imagen1["image"]);die;
// var_dump($imagen1["item_id"]);die;
// var_dump($imagen1["photo_id"]);die;
}
// var_dump(dirname(Yii::$app->basePath));die;
?>

<!-- Home Page
   ==========================================-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/fonts/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/js/skrollr-master/examples/fixed-positioning.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/js/skrollr-master/examples/main.css" />

<!--<div class="ss" id="dd">-->
<!--<div class="ss" id="ddd">-->
<?php // Carousel::widget(1600, 800)    ?>
<!--</div>-->
<!--</div>-->
<!--<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>-->

<!--<div id="intro" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
                <h1><a href="https://github.com/Prinzhorn/skrollr">skrollr</a></h1>
                <h2>parallax scrolling for the masses</h2>
                <p>let's get scrollin' ;-)</p>
                <p class="arrows">▼&nbsp;▼&nbsp;▼</p>
        </div>-->

<!--<div class="reme"></div>-->

<div id="tf-home" class="text-center" >

    <div class="overlay">
        <div class='animatedParent' data-sequence='500' >
        <div class="content" >
            <div class='animatedParent' data-sequence='500' >
               <div class="animated fadeIn slower" data-id='1'> 
            <!--<h1><?php // Text::get('index-welcome-title')   ?><strong><span class="color"> <?php // Text::get('neeby')   ?></span></strong></h1>-->
            <?= Text::get('neeby') ?>
        </div>
                <div class="animated bounceInRight slower" data-id='2'>
            <p class="lead"><?= Text::get('mensaje-index') ?></p>

        </div>
        </div>
            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
        </div>
    </div>
</div>

<!-- Sobre Nosotros
  ==========================================-->
<div id="tf-about">
<div class='animatedParent'>
    <div class="container">
        <div class="row">
            <div class="animated fadeInLeftShort">    
            <div class="easyiicms-edit responsive col-md-6 " data-edit="/neeby-1.1/admin/gallery/a/photos/<?php echo $imagen1["item_id"] ?>#photo-<?php echo $imagen1["photo_id"] ?>">

                <a class="easyii-box responsive" rel="album-last" title="" href="<?php echo $imagen1["image"] ?>">
                    <!--<a class="easyii-box" rel="album-last" title="" href="<?php // Gallery::hola(29)                     ?>">-->
                    <img alt="" src="<?php echo $imagen1["image"] ?>" class="img-responsive">
                </a>

            </div>
            </div>
            
            <div class="animated fadeInRightShort">    
            <div class="col-md-6">
                <div class="about-text">
                    
                    <!--<div class='animated bounceIn' >-->
                    
                        <h2><?= Text::get('sobre-nosotros') ?></h2>
                        <!--<h4>Sobre Nosotros</h4>-->
                        <hr>
                        <div class="clearfix"></div>
                    <!--</div>-->
                    
                    </div>
                    <div class="intro text-justify">
                        <?= Text::get('sobre-nosotros2') ?>

                    </div>
<!--                    <p class="intro text-justify" >Somos equipo comprometido amantes de nuestro trabajo y plasmamos esa pasión en cada desarrollo. Ofrecemos servicios completos de Diseño de <strong>sitios Web</strong>, especializándonos en la creación de aplicaciones web y sitios web <strong>auto-administrables</strong> con un poderoso sistema de gestión verdaderamente fácil de utilizar. Contamos con un amplio Equipo de Diseñadores y Desarrolladores al servicio de su proyecto, especializados en diferentes áreas del desarrollo de sitios web.</p>
                    <p class="intro text-justify">Algunos emprendedores nos preguntan <strong>¿Porque motivo necesitamos un pagina web para nuestro negocio?</strong></p>
                    <p class="intro text-justify">Tener una pagina web es la manera mas económica de darse a conocer de manera continua por un inmenso número de empresas o personas (futuros clientes), no sólo nacionales, sino que de cualquier parte del mundo, ya que la internet es un servicio que esta disponible las <strong>24 horas del día, los 360 días del año</strong> brindando la oportunidad de que su sitio web este disponible en cualquier momento para sus clientes aumentando la calidad de comunicación con estos mismos, significando un <strong>incremento de las ventas y mayor beneficio para su negocio</strong>.</p>-->
                    <ul class="about-list">
                        <li>
                            <?= Text::get('mision') ?>
                            <!--<span class="fa fa-dot-circle-o"></span>-->
                            <!--<strong>Misión</strong> - <em>Brindar a nuestros clientes un servicio de facil manejo con entregables de calidad</em>-->
                        </li>
                        <li>
                            <?= Text::get('habilidades') ?>
                            <!--<span class="fa fa-dot-circle-o"></span>-->
                            <!--<strong>Habilidades</strong> - <em>Lograr resultados rápidos y excelentes</em>-->
                        </li>
                        <li>
                            <?= Text::get('clientes') ?>
                            <!--<span class="fa fa-dot-circle-o"></span>-->
                            <!--<strong>Clientes</strong> - <em>Clientes satisfechos gracias a nuestra experiencia</em>-->
                        </li>
                    </ul>
                </div>
                
            </div>
            </div>
            </div>
        </div>
    </div>
</div>


<div id="tf-hom" >

    <div class="overlay">
        <!--<div class="container" >-->

        <!--<div class="section-title center" data-1000="left:100%" data-1500="left:50%;" data-3200="top:11%;" data-4000="top:-100%;">-->
        <div class="section-title center">
            <center><?= Text::get('neebycms') ?></center>
            <div class="line">
                <hr>
            </div>
        </div>
        <div class="row">

<!--                <div class="easyiicms-edit  col-md-6 " data-edit="/testing_neeby/admin/gallery/a/photos/<?php // echo $imagen1["item_id"]       ?>#photo-<?php // echo $imagen1["photo_id"]       ?>"  data-1000="left:100%" data-1500="left:50%;" data-9000="top:30%;" data-11000="top:-100%;">

                    <a class="easyii-box " rel="album-last" title="" href="<?php // echo $imagen1["image"]       ?>" >
                        <img alt="" src="<?php // echo $imagen1["image"]       ?>" class="img-responsive">
                    </a>

                </div>-->
            <div class="col-md-6" data-1000="left:100%" data-1500="left:50%;" data-3200="top:30%;" data-4000="top:-100%;">
                <!--<section class="section-full section-inverse">-->
                <div class="page-width section-full section-inverse">
                    <div class="laptop-slides-wrap ">
                        <ul class="laptop-slides" >

                            <li class="hoola active" data-1700="opacity: 1" data-1900="opacity: 1" data-2100="opacity: 0" data-2200="opacity: 0" style="opacity: 1;"></li>
                            <li class="hoola2 active" data-2000="opacity: 1" data-2200="opacity: 1" data-1900="opacity: 0" data-2300="opacity: 0"></li>
                            <li class="hoola3 active" data-2500="opacity: 1" data-2700="opacity: 1" data-1700="opacity: 0" data-2400="opacity: 0"></li>
                            <!--<li class="hoola4 active" data-2400="opacity: 1" data-4050="opacity: 1" data-1700="opacity: 0" data-2500="opacity: 0"></li>
                            <!--<li class="hoola2 active" data--300-center="opacity: 0" data--150-center="opacity: 1" data-150-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>-->
                            <!--                            <li class="hoola active" data--150-center="opacity: 0" data--150-center="opacity: 1" data-150-center="opacity: 1" style="opacity: 1;" ></li>
                                                        <li class="hoola2 active" data--300-center="opacity: 0" data--150-center="opacity: 1" data-150-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>-->

                            <!--<li class="slide-01 " data-anchor-target=".step-01" data--300-center="opacity: 0" data--260-center="opacity: 1" data-260-center="opacity: 1" style="opacity: 1;"></li>-->
                            <!--<li class="slide-02 " data-anchor-target=" .step-02" data--300-center="opacity: 0" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 1;"></li>-->
                            <!--<li class="hoola3 active" data--100-center="opacity: 1" data-100-center="opacity: 1" data-400-center="opacity: 0" style="opacity: 0;"></li>-->
                            <!--<li class="hoola4 active" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>-->
                            <!--<li class="hoola5 active" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>-->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding: 50px">

                <!--<div class="step step-01 section-full" data-1000="right:100%" data-1500="right:50%;" data-1700="top:30%;" data-3000="top:-100%;" >-->

                <div class="text-center">

                    <?= Text::get('neebycms2') ?>
<!--<h2><strong>Que es NEEBY CMS?</strong></h2>-->
                </div>
                <div class="lead text-justify"> <?= Text::get('neebycms3') ?></div>
                <center><div class="foto1" style="height: 200px; width: 300px;margin-top: 125px;"></div></center>
                <!--</div>-->
            </div>
        </div>
        <!--</div>-->
    </div>
</div>
<!--<div id="tf-home" >
    <div class="overlay"></div>
</div>-->
<div id="tf-home">
    <div class="overlay">
        <div class="row">
            <div class="col-md-6" style="padding: 50px">
                <div class="text-center">

                    <?= Text::get('neebycms4') ?>
<!--<h2><strong>Que es NEEBY CMS?</strong></h2>-->
                </div>
                <div class="lead text-justify"> <?= Text::get('neebycms5') ?></div>
                <center><div class="foto2" style="height: 200px; width: 300px;margin-top: 125px;"></div></center>
            </div>
        </div>
    </div>
</div>

<div id="tf-home" >
    <div class="overlay">
        <div class="row">
            <div class="col-md-6" style="padding: 50px">
                <div class="text-center">

                    <?= Text::get('neebycms6') ?>
<!--<h2><strong>Que es NEEBY CMS?</strong></h2>-->
                </div>
                <div class="lead text-justify"> <?= Text::get('neebycms7') ?></div>
                <center><div class="foto3" style="height: 200px; width: 300px;margin-top: 125px;"></div></center>
            </div>
        </div>
    </div>
</div>




<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class='animatedParent' data-sequence='500' >
    <div class="container">
        <div class="section-title center">
            <h2><strong>Nuestros servicios</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <!--<small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>-->
        </div>
        <div class="space"></div>
        <div class="row">
    <div class='animated fadeInUp' data-id='1' >
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-desktop"></i>
                <h4><strong>Paginas Web</strong></h4>
                <!--<p>Paginas atractivas para su negocio</p>-->
            </div>
            </div>
<div class='animated fadeInUp' data-id='2' >
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-bar-chart"></i>
                <h4><strong>Sistemas Web</strong></h4>
                <!--<p>Procesos que se manejan manualmente automatizados</p>-->
            </div>
            </div>
<div class='animated fadeInUp' data-id='3' >
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-mobile"></i>
                <h4><strong>Aplicaciones Móviles</strong></h4>
                <!--<p>Brindar a sus clientes</p>-->
            </div>
            </div>
<div class='animated fadeInUp' data-id='4' >
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-cogs"></i>
                <h4><strong>Soporte Técnico</strong></h4>
                <!--<p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>-->
            </div>
        </div>
        </div>
    </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<!--<div id="tf-clients" class="text-center">
    <div class="overlay">
        <div class="container">

            <div class="section-title center">
                <h2>Some of <strong>our Clients</strong></h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div id="clients" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="img/client/01.png">
                </div>
                <div class="item">
                    <img src="img/client/02.png">
                </div>
                <div class="item">
                    <img src="img/client/03.png">
                </div>
                <div class="item">
                    <img src="img/client/04.png">
                </div>
                <div class="item">
                    <img src="img/client/05.png">
                </div>
                <div class="item">
                    <img src="img/client/06.png">
                </div>
                <div class="item">
                    <img src="img/client/07.png">
                </div>
            </div>

        </div>
    </div>
</div>-->

<!-- Portfolio Section
==========================================-->
<!--<div id="tf-works">
    <div class="container">  Container 
        <div class="section-title text-center center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>

        <div class="categories">

            <ul class="cat">
                <li class="pull-left"><h4>Filter by Type:</h4></li>
                <li class="pull-right">
                    <ol class="type">
                        <li><a href="#" data-filter="*" class="active">All</a></li>
                        <li><a href="#" data-filter=".web">Web Design</a></li>
                        <li><a href="#" data-filter=".photography">Photography</a></li>
                        <li><a href="#" data-filter=".app" >Mobile App</a></li>
                        <li><a href="#" data-filter=".branding" >Branding</a></li>
                    </ol>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div id="lightbox" class="row">

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/01.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 photography app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/02.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/03.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 branding">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/04.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/05.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 app">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/06.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 photography web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/07.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3 web">
                <div class="portfolio-item">
                    <div class="hover-bg">
                        <a href="#">
                            <div class="hover-text">
                                <h4>Logo Design</h4>
                                <small>Branding</small>
                                <div class="clearfix"></div>
                                <i class="fa fa-plus"></i>
                            </div>
                            <img src="img/portfolio/08.jpg" class="img-responsive" alt="...">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>-->

<!-- Testimonials Section
==========================================-->
<!--<div id="tf-testimonials" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2><strong>Our clients’</strong> testimonials</h2>
                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>

                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>

                        <div class="item">
                            <h5>This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</h5>
                            <p><strong>Dean Martin</strong>, CEO Acme Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!-- Contact Section
==========================================-->
<div id="tf-con" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2><strong>CONTACTO</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <!--<small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>-->            
                </div>

                <?php
                $page = Page::get('page-guestbook');

                $this->title = $page->seo('title', $page->model->title);
                $this->params['breadcrumbs'][] = $page->model->title;
                ?>

                <script>
                    var http = location.protocol;
                    var slashes = http.concat("//");
                    var baseUrl = slashes.concat(window.location.hostname);
                    var pathArray = window.location.pathname.split('/');
                    var ruta = '/' + pathArray[1];
                </script>


                
                <?php if (Yii::$app->request->get(Guestbook::SENT_VAR) == '0') { ?>
                    <script>
                        alert('Error! Formato de correo inválido');
                        window.location.replace(baseUrl + ruta + "/#tf-con");
                    </script>
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Formato de correo inválido.
                    </div>
                <?php } else if (Yii::$app->request->get(Guestbook::SENT_VAR) == '1') { ?>
                    <script>
                        alert('Mensaje enviado');
                        window.location.replace(baseUrl + ruta + "/#tf-con");
                    </script>
                    <center><h4 class="text-success"><i class="glyphicon glyphicon-ok"></i> Mensaje Enviado</h4></center>

                <?php } ?>

                <form id="w0" method="post" action="/neeby-1.1/admin/guestbook/send">
                    <input type="hidden" value="/neeby-1.1/site/index?guestbook_sent=0" name="errorUrl">
                    <input type="hidden" value="/neeby-1.1/site/index?guestbook_sent=1" name="successUrl">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="guestbook-name">Nombre</label>
                                <input id="guestbook-name" class="form-control" type="text" name="Guestbook[name]">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="guestbook-email">E-mail</label>
                                <input id="guestbook-email" class="form-control" type="text" name="Guestbook[email]">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="guestbook-text">Texto</label>
                        <textarea id="guestbook-text" class="form-control" name="Guestbook[text]"></textarea>
                    </div>

                    <button type="submit" class="btn tf-btn btn-default">Enviar</button>
                </form>

            </div>
        </div>

    </div>
    <br>
</div>




<?= Guestbook::pages() ?>


