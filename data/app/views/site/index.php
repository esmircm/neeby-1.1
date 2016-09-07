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
$primeraImagen = Gallery::imagen(39);
foreach ($primeraImagen as $imagen1) {
// var_dump($imagen1["image"]);die;
// var_dump($imagen1["item_id"]);die;
// var_dump($imagen1["photo_id"]);die;
}
// var_dump(Gallery::hola(39));die;
?>

<!-- Home Page
   ==========================================-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/fonts/font-awesome/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/js/skrollr-master/examples/fixed-positioning.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::$app->basePath; ?>/media/js/skrollr-master/examples/main.css" />

<!--<div class="ss" id="dd">-->
<!--<div class="ss" id="ddd">-->
<?php // Carousel::widget(1600, 800)   ?>
<!--</div>-->
<!--</div>-->
<div id="progress" data-0="width:0%;background:hsl(200, 100%, 50%);" data-end="width:100%;background:hsl(920, 100%, 50%);"></div>

<!--<div id="intro" data-0="opacity:1;top:3%;transform:rotate(0deg);transform-origin:0 0;" data-500="opacity:0;top:-10%;transform:rotate(-90deg);">
                <h1><a href="https://github.com/Prinzhorn/skrollr">skrollr</a></h1>
                <h2>parallax scrolling for the masses</h2>
                <p>let's get scrollin' ;-)</p>
                <p class="arrows">▼&nbsp;▼&nbsp;▼</p>
        </div>-->


<div id="tf-home" class="text-center" >

    <div class="overlay">
        <div class="content" >

            <h1></h1>

            <h1><?= Text::get('index-welcome-title') ?><strong><span class="color"> <?= Text::get('neeby') ?></span></strong></h1>
            <!--<h1>Bienvenido a <strong><span class="color">Neeby</span></strong></h1>-->
            <p class="lead"><?= Text::get('mensaje-index') ?></p>
            <!--<p class="lead">Desarrolladores web con <strong> años de experiencia</strong> y con <strong>gente extraordinaria</strong></p>-->

            <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
        </div>
    </div>
</div>

<!-- Sobre Nosotros
  ==========================================-->
<div id="tf-about">
    <div class="container">
        <div class="row">
            <div class="easyiicms-edit responsive col-md-6 " data-edit="/testing_neeby/admin/gallery/a/photos/<?php echo $imagen1["item_id"] ?>#photo-<?php echo $imagen1["photo_id"] ?>">

                <a class="easyii-box responsive" rel="album-last" title="" href="<?php echo $imagen1["image"] ?>">
                    <!--<a class="easyii-box" rel="album-last" title="" href="<?php // Gallery::hola(29)                   ?>">-->
                    <img alt="" src="<?php echo $imagen1["image"] ?>" class="img-responsive">
                </a>

            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <!--<h4>Sobre Nosotros</h4>-->
                        <h2><strong>sobre nosotros</strong></h2>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                    <p class="intro text-justify" >Somos equipo comprometido amantes de nuestro trabajo y plasmamos esa pasión en cada desarrollo. Ofrecemos servicios completos de Diseño de <strong>sitios Web</strong>, especializándonos en la creación de aplicaciones web y sitios web <strong>auto-administrables</strong> con un poderoso sistema de gestión verdaderamente fácil de utilizar. Contamos con un amplio Equipo de Diseñadores y Desarrolladores al servicio de su proyecto, especializados en diferentes áreas del desarrollo de sitios web.</p>
                    <p class="intro text-justify">Algunos emprendedores nos preguntan <strong>¿Porque motivo necesitamos un pagina web para nuestro negocio?</strong></p>
                    <p class="intro text-justify">Tener una pagina web es la manera mas económica de darse a conocer de manera continua por un inmenso número de empresas o personas (futuros clientes), no sólo nacionales, sino que de cualquier parte del mundo, ya que la internet es un servicio que esta disponible las <strong>24 horas del día, los 360 días del año</strong> brindando la oportunidad de que su sitio web este disponible en cualquier momento para sus clientes aumentando la calidad de comunicación con estos mismos, significando un <strong>incremento de las ventas y mayor beneficio para su negocio</strong>.</p>
                    <ul class="about-list">
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Misión</strong> - <em>Brindar a nuestros clientes un servicio de facil manejo con entregables de calidad</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Habilidades</strong> - <em>Lograr resultados rápidos y excelentes</em>
                        </li>
                        <li>
                            <span class="fa fa-dot-circle-o"></span>
                            <strong>Clientes</strong> - <em>Clientes satisfechos gracias a nuestra experiencia</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="tf-home" >

    <div class="overlay">
        <!--<div class="container" >-->
            <div class="section-title center" data-1000="left:100%" data-1500="left:50%;" data-3200="top:11%;" data-4000="top:-100%;">
                <center><h2>Neeby <strong>CMS</strong></h2></center>

                <div class="line">
                    <hr>
                </div>
            </div>
            <div class="row">

<!--                <div class="easyiicms-edit  col-md-6 " data-edit="/testing_neeby/admin/gallery/a/photos/<?php // echo $imagen1["item_id"]     ?>#photo-<?php // echo $imagen1["photo_id"]     ?>"  data-1000="left:100%" data-1500="left:50%;" data-9000="top:30%;" data-11000="top:-100%;">

                    <a class="easyii-box " rel="album-last" title="" href="<?php // echo $imagen1["image"]     ?>" >
                        <img alt="" src="<?php // echo $imagen1["image"]     ?>" class="img-responsive">
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
                <div class="col-md-6">

                    <div class="step step-01 section-full" data-1000="right:100%" data-1500="right:50%;" data-1700="top:30%;" data-3000="top:-100%;" >
                        <div class="text-center">
                        
                            <h2><strong>Que es NEEBY CMS?</strong></h2>
                        
                        </div>
                        <p class="lead text-justify"> Neeby CMS es un <strong>Sistema de Gestión de Contenidos</strong> que permitira a los clientes administrar su sitio web, 
                            sin necesidad de tener conocimiento alguno de programación. Su característica principal es el contenido <strong>editable en vivo</strong>, el cual 
                            con un solo click sera capaz de modificar cualquier objeto de su pagina web.
                              </p>
                    </div>
                </div>
            </div>
        <!--</div>-->
    </div>
</div>
<!--<div id="tf-home" >
    <div class="overlay"></div>
</div>-->
<div id="tf-home" >
    <div class="overlay">
        <div class="row">
            <div class="col-md-6 text-center" >
                <h4>
                    <span class="counter">2</span>
                    Edición en vivo
                </h4>
                <p class="large">  </p>
            </div>
        </div>
    </div>
</div>

<div id="tf-home" >
    <div class="overlay">
        <div class="row">
            <div class="col-md-6 text-center">
                <h4>
                    <span class="counter">3</span>
                    Cambiar imagenes
                </h4>
                <p class="large"> We match you to relevant job opportunities straight away, and will notify you in real time when more compatible jobs go live on the platform. </p>
            </div>
        </div>
    </div>
</div>


<!--<section class="section-full section-inverse">-->
<!--<div class="page-width">
    <h2>How Does it Work?</h2>
    <div class="laptop-slides-wrap ">
        <ul class="laptop-slides" >


            <li class="slide-01 " data-anchor-target=".step-01" data--300-center="opacity: 0" data--260-center="opacity: 1" data-260-center="opacity: 1" style="opacity: 1;"></li>
            <li class="slide-02 " data-anchor-target=" .step-02" data--300-center="opacity: 0" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 1;"></li>
            <li class="slide-03 " data-anchor-target=".step-03" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>
            <li class="slide-04 " data-anchor-target=" .step-04" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>
            <li class="slide-05 " data-anchor-target=".step-05" data--260-center="opacity: 1" data-260-center="opacity: 1" data-300-center="opacity: 0" style="opacity: 0;"></li>
        </ul>
    </div>
    <div class="section-full" style="padding-bottom: 49.5px; padding-top: 49.5px;"></div>
    <div class="step step-01 section-full">
        <div class="screenshot"></div>
        <h4>
            <span class="counter">1</span>
            Visualise your dream job
        </h4>
        <p class="large"> Tell us how you want to spend your time in your ideal job - create your WorkShape. </p>
    </div>
    <div class="step step-02 section-full">
        <div class="screenshot"></div>
        <h4>
            <span class="counter">2</span>
            Build a profile
        </h4>
        <p class="large"> Tell us about the technologies and tools you like to work with most, as well the conditions of the job that are most important to you. </p>
    </div>
    <div class="step step-03 section-full">
        <div class="screenshot"></div>
        <h4>
            <span class="counter">3</span>
            Get matches immediately
        </h4>
        <p class="large"> We match you to relevant job opportunities straight away, and will notify you in real time when more compatible jobs go live on the platform. </p>
    </div>
    <div class="step step-04 section-full">
        <div class="screenshot"></div>
        <h4>
            <span class="counter">4</span>
            Take quick actions
        </h4>
        <p class="large"> Review your matches and decide whether to show your interest or remove matches with a single click. </p>
    </div>
    <div class="step step-05 section-full">
        <div class="screenshot"></div>
        <h4>
            <span class="counter">5</span>
            Start conversations
        </h4>
        <p class="large"> No recruitment agents - it’s direct contact with great employers. Chat to companies interested in you within minutes of signing up for a WorkShape.io account. </p>
    </div>
</div>-->
<!--</section>-->

<!-- Team Page
==========================================-->
<!--<div id="tf-team" class="text-center">
    <div class="overlay">
        <div class="container">
            <div class="section-title center">
                <h2>Neeby <strong>CMS</strong></h2>

                <div class="line">
                    <hr>
                </div>
            </div>

        </div>
    </div>

</div>-->



<!-- Services Section
==========================================-->
<div id="tf-services" class="text-center">
    <div class="container">
        <div class="section-title center">
            <h2>Take a look at <strong>our services</strong></h2>
            <div class="line">
                <hr>
            </div>
            <div class="clearfix"></div>
            <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>
        </div>
        <div class="space"></div>
        <div class="row">
            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-desktop"></i>
                <h4><strong>Web design</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-mobile"></i>
                <h4><strong>Mobile Apps</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-camera"></i>
                <h4><strong>Photography</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>

            <div class="col-md-3 col-sm-6 service">
                <i class="fa fa-bullhorn"></i>
                <h4><strong>Marketing</strong></h4>
                <p>The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
            </div>
        </div>
    </div>
</div>

<!-- Clients Section
==========================================-->
<div id="tf-clients" class="text-center">
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
</div>

<!-- Portfolio Section
==========================================-->
<div id="tf-works">
    <div class="container"> <!-- Container -->
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
</div>

<!-- Testimonials Section
==========================================-->
<div id="tf-testimonials" class="text-center">
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
</div>

<!-- Contact Section
==========================================-->
<div id="tf-contact" class="text-center">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="section-title center">
                    <h2>Feel free to <strong>contact us</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                    <div class="clearfix"></div>
                    <small><em>Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</em></small>            
                </div>

                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn tf-btn btn-default">Submit</button>
                </form>

            </div>
        </div>

    </div>
</div>

<nav id="footer">
    <div class="container">
        <div class="pull-left fnav">
            <p>ALL RIGHTS RESERVED. COPYRIGHT © 2014. Designed by <a href="https://dribbble.com/shots/1817781--FREEBIE-Spirit8-Digital-agency-one-page-template">Robert Berki</a> and Coded by <a href="https://dribbble.com/jennpereira">Jenn Pereira</a></p>
        </div>
        <div class="pull-right fnav">
            <ul class="footer-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</nav>


<?= Carousel::widget(1140, 520) ?>



<br/>
<hr/>

<div class="text-center">
    <h2>Last photos</h2>
    <br/>
    <?php foreach (Gallery::last(2) as $photo) : ?>
        <?= $photo->box(180, 135) ?>
    <?php endforeach; ?>
    <?php Gallery::plugin() ?>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last news</h2>
    <blockquote class="text-left">
        <?= Html::a(News::last()->title, ['news/view', 'slug' => News::last()->slug]) ?>
        <br/>
        <?= News::last()->short ?>
    </blockquote>
</div>

<br/>
<hr/>


<div class="text-center">
    <h2>Last article from category #1</h2>
    <br/>
    <div class="row text-left">
        <?php $article = Article::last(1, ['category_id' => 1]); ?>
        <div class="col-md-2">
            <?= Html::img($article->thumb(160, 120)) ?>
        </div>
        <div class="col-md-10 text-left">
            <?= Html::a($article->title, ['articles/view', 'slug' => $article->slug]) ?>
            <br/>
            <?= $article->short ?>
        </div>
    </div>
</div>

<br/>
<hr/>

<div class="text-center">
    <h2>Last reviews</h2>
    <br/>
    <div class="row text-left">
        <?php foreach (Guestbook::last(2) as $post) : ?>
            <div class="col-md-6">
                <b><?= $post->name ?></b>
                <p class="text-muted"><?= $post->text ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!--<script type="text/javascript">
        var s = skrollr.init({
                edgeStrategy: 'set',
                easing: {
                        WTF: Math.random,
                        inverted: function(p) {
                                return 1-p;
                        }
                }
        });
        </script>-->

<br/>
