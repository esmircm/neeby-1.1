<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\assets\AdminAsset;

$asset = AdminAsset::register($this);
$moduleName = $this->context->module->id;

?>
<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!--<meta charset="<?php // Yii::$app->charset ?>"/>-->
    <?= Html::csrfMetaTags() ?>
    <title><?= Yii::t('easyii', 'Control Panel') ?> - <?= Html::encode($this->title) ?></title>
    <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
    <!--Cambio de Color del tema-->
    <?php
    $black = ''; $blue = ''; $red = ''; $green = ''; $cafe = ''; $facebook = ''; $purple = ''; $yellow = ''; $white = ''; 
    $color_tema = Yii::$app->db->createCommand("SELECT color FROM color_tema WHERE usuario_id =".Yii::$app->user->identity->admin_id)->queryOne();
    if ($color_tema["color"] == 'black'){
    $black = 'active';     
    }elseif($color_tema["color"] == 'blue'){
    $blue = 'active';     
    }elseif($color_tema["color"] == 'red'){
    $red = 'active';     
    }elseif($color_tema["color"] == 'green'){
    $green = 'active';     
    }elseif($color_tema["color"] == 'cafe'){
    $cafe = 'active';     
    }elseif($color_tema["color"] == 'facebook'){
    $facebook = 'active';     
    }elseif($color_tema["color"] == 'purple'){
    $purple = 'active';     
    }elseif($color_tema["color"] == 'yellow'){
    $yellow = 'active';     
    }elseif($color_tema["color"] == 'white'){
    $white = 'active';     
    }
    ?>
    
    <link href="<?= $asset->baseUrl?>/css/tema2/skins/<?php echo $color_tema["color"]?>" rel="stylesheet" type="text/css"> 
    
    <?php 

    $cookies = Yii::$app->response->cookies;
    $cookies->add(new \yii\web\Cookie([ // ALMACENANDO VARIABLE DE COLOR EN COOKIE PARA COLOR DE LOGIN
    'name' => 'color',
    'value' => $color_tema["color"],
]));



    ?>
   
    
    <!-- Fin Cambio de Color del tema-->
    <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.png" type="image/x-icon">
    
    <?php $this->head() ?>
</head>
<body class="page-body page-fade" data-url="http://demo.neontheme.com">
<?php $this->beginBody() ?>
   
      <!-- TS14732747917854: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 
      <div class="page-container">
         <!-- TS147327479115391: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates --> 
         <div class="sidebar-menu">
            <div class="sidebar-menu-inner">
               <header class="logo-env">
                  <!-- logo --> 
                  <div class="logo"> <a href="neeby"> <img src="<?= $asset->baseUrl ?>/img/logo_20.png" width="180"> </a> </div>
                  <!-- logo collapse icon --> 
                  <div class="sidebar-collapse">
                     <a href="#" class="sidebar-collapse-icon" style="border:none">
                        <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --> <i class="glyphicon glyphicon-th"></i> 
                     </a>
                  </div>
                  <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) --> 
                  <div class="sidebar-mobile-menu visible-xs">
                      <a href="#" class="with-animation" style="border:none">
                        <!-- add class "with-animation" to support animation --> <i class="glyphicon glyphicon-th"></i> 
                     </a>
                  </div>
               </header>
                <!--## MENU ##-->
               <ul id="main-menu" class="main-menu">
                  
                 <?php foreach(Yii::$app->getModule('admin')->activeModules as $module) : ?>
                    
                  <li> <a href="<?= 
//                        var_dump($module);die;
                    Url::to(["/admin/$module->name"]) ?>" class="menu-item <?= ($moduleName == $module->name ? 'active' : '') ?>">
                            <?php if($module->icon != '') : ?>
                                <i class="glyphicon glyphicon-<?= $module->icon ?>"></i>
                            <?php endif; ?>
                           <span class="title"> <?= $module->title ?></span>
                            <?php if($module->notice > 0) : ?>
                                <span class="badge"><?= $module->notice ?></span>
                            <?php endif; ?>
                        </a> </li>
                 <?php endforeach; ?>
                        
                         <li><a href="<?= Url::to(['/admin/settings']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'settings') ? 'active' :'' ?>">
                        <i class="glyphicon glyphicon-cog"></i><span class="title"> <?= Yii::t('easyii', 'Settings') ?></span>
                    </a></li>
                  
               </ul>
                <!--## FIN MENU ##-->
            </div>
         </div>
         <div class="main-content">
            <div class="row">
               <div class="col-md-6 col-sm-8 clearfix">
                   <!--### PERFIL ###-->
                  <ul class="user-info pull-left pull-none-xsm">
                     <li class="profile-info dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?= $asset->baseUrl ?>/img/logo_20.png" alt="" class="img-circle" width="44" />
                        <?php echo Yii::$app->user->identity->username ?>
                   
                        </a> 
<!--                        <ul class="dropdown-menu">
                            Reverse Caret  
                           <li class="caret"></li>
                            Profile sub-links  
                           <li> <a href="http://demo.neontheme.com/extra/timeline/"> <i class="entypo-user"></i>
                              Edit Profile
                              </a> 
                           </li>
                           <li> <a href="http://demo.neontheme.com/mailbox/main/"> <i class="entypo-mail"></i>
                              Inbox
                              </a> 
                           </li>
                           <li> <a href="http://demo.neontheme.com/extra/calendar/"> <i class="entypo-calendar"></i>
                              Calendar
                              </a> 
                           </li>
                           <li> <a href="#"> <i class="entypo-clipboard"></i>
                              Tasks
                              </a> 
                           </li>
                        </ul>-->
                     </li>
                  </ul>
                   
                   <!--### NOTIFICACION ###-->
                   
                  <ul class="user-info pull-left pull-right-xs pull-none-xsm">
 
                     <?php if(IS_ROOT) : ?>
                     <li class="notifications dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="glyphicon glyphicon-wrench"></i><span class="title">Herramientas</span></a> 
                        <ul class="dropdown-menu">
 

                           <li>
                              <ul class="dropdown-menu-list scroller">
                                 <li> <a href="<?= Url::to(['/admin/modules']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'modules') ? 'active' :'' ?>">
                                         <i class="glyphicon glyphicon-folder-close"></i>&nbsp;<?= Yii::t('easyii', 'Modules') ?>
                        </a> </li>
                                 <li> <a href="<?= Url::to(['/admin/admins']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'admins') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-user"></i>&nbsp;<?= Yii::t('easyii', 'Admins') ?>
                        </a> </li>
                                 <li> <a href="<?= Url::to(['/admin/system']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'system') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-hdd"></i>&nbsp;<?= Yii::t('easyii', 'System') ?>
                        </a> </li>
                                 <li> <a href="<?= Url::to(['/admin/logs']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'logs') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-align-justify"></i>&nbsp;<?= Yii::t('easyii', 'Logs') ?>
                        </a> </li>
                                 
                              </ul>
                           </li>
                           <!--<li class="external"> <a href="#">View all notifications</a> </li>-->
                        </ul>
                     </li>
                     <?php endif; ?>
                     <li class="notifications dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"> <i class="glyphicon glyphicon-tint"></i><span class="title">Skins</span></a> 
                        <ul class="dropdown-menu theme-skins pull-left">
                            <li class="caret"></li>
                            <li  class="<?php echo $black?>">
                            <a data-skin="default" onclick="cambiarColor('black');">
                            <i class="skin-main"></i>
                            Negro
                            </a>
                            </li>
                            <li  class="<?php echo $blue?>">
                            <a data-skin="blue" onclick="cambiarColor('blue');">
                            <i class="skin-blue"></i>
                            Azul
                            </a>
                            </li>
                            <li  class="<?php echo $red?>">
                            <a data-skin="red" onclick="cambiarColor('red');">
                            <i class="skin-red"></i>
                            Rojo
                            </a>
                            </li>
                            <li  class="<?php echo $green?>">
                            <a data-skin="green" onclick="cambiarColor('green');">
                            <i class="skin-green"></i>
                            Verde
                            </a>
                            </li>
                            <li  class="<?php echo $cafe?>">
                            <a data-skin="cafe" onclick="cambiarColor('cafe');">
                            <i class="skin-cafe"></i>
                            Cafe
                            </a>
                            </li>
                            <li  class="<?php echo $facebook?>">
                            <a data-skin="cafe" onclick="cambiarColor('facebook');">
                            <i class="skin-blue"></i>
                            Facebook
                            </a>
                            </li>
                            <li  class="<?php echo $purple?>">
                            <a data-skin="purple" onclick="cambiarColor('purple');">
                            <i class="skin-purple"></i>
                            Purpura
                            </a>
                            </li>
                            <li  class="<?php echo $yellow?>">
                            <a data-skin="yellow" onclick="cambiarColor('yellow');">
                            <i class="skin-yellow"></i>
                            Amarillo
                            </a>
                            </li>
                            <li  class="<?php echo $white?>">
                            <a data-skin="white" onclick="cambiarColor('white');">
                            <i class="skin-white"></i>
                            Blanco
                            </a>
                            </li>
                            </ul>
                     </li>   
                  </ul>
                   
               </div>
                <script type="text/javascript"> 
    function cambiarColor(color) {
//        alert(hola);return false;
var usuario = '<?php echo Yii::$app->user->identity->admin_id ?>';
//alert(usuario);
        $.ajax({
           url: '<?php echo Yii::$app->request->baseUrl. '/admin/settings/color' ?>',
           type: 'post',
           data: 'color=' + color + '&usuario=' + usuario,
           success: function (data) {
//              alert(data);
                location.reload();
           }
      });


    

    } 
  </script> 
               <!-- Raw Links --> 
               <div class="col-md-6 col-sm-4 clearfix hidden-xs">
     
                                 
                   
                  <ul class="list-inline links-list pull-right">

                     <li class="sep"></li>
                     <li> <a href="<?= Url::to(['/']) ?>" class="pull-left"><i class="glyphicon glyphicon-home"></i> <?= Yii::t('easyii', 'Abrir Sitio') ?></a> 
                     </li>
                     <li class="sep"></li>
                     <li> <a href="<?= Url::to(['/admin/sign/out']) ?>" class="pull-right"><i class="glyphicon glyphicon-log-out"></i> <?= Yii::t('easyii', 'Cerrar Sesión') ?></a> 
                     </li>
                  </ul>
               </div>
            </div>
            <hr/>
            
        <div class="box content">
                    <div class="page-title">
                        <?= $this->title ?>
                    </div>
                    <div class="container-fluid">
                        <?php foreach(Yii::$app->session->getAllFlashes() as $key => $message) : ?>
                            <div class="alert alert-<?= $key ?>"><?= $message ?></div>
                        <?php endforeach; ?>
                        <?= $content ?>
                    </div>
                </div>
         
            
            <footer class="main">
               
               &copy; 2016 <strong>NEEBY</strong> CMS 
            </footer>
         </div>
         
         
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
