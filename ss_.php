<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\easyii\assets\AdminAsset;

$asset = AdminAsset::register($this);
//$moduleName = $this->context->module->id;
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
    <link rel="shortcut icon" href="<?= $asset->baseUrl ?>/favicon.ico" type="image/x-icon">
    <!--<link rel="icon" href="<?php // $asset->baseUrl ?>/favicon.ico" type="image/x-icon">-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div id="header">
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                Supr.<span class="slogan">admin</span>
            </a>
                </div>
                <div id="navbar-no-collapse" class="navbar-no-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <!--Sidebar collapse button-->
                            <a href="#" class="collapseBtn leftbar"><i class="s16 minia-icon-list-3"></i></a>
                        </li>
<!--                        <li>
                            <a href="#" class="tipB reset-layout" title="Reset panel postions"><i class="s16 icomoon-icon-history"></i></a>
                        </li>-->
<!--        ###################################################### SITIO WEB ##############################################################-->                        
                        <li class="dropdown">
                            <a href="<?= Url::to(['/']) ?>" class="pull-left"><i class="glyphicon glyphicon-home"></i> <?= Yii::t('easyii', 'Abrir Sitio') ?>
<!--                                <i class="s16 icomoon-icon-cog-2"></i><span class="txt"> Abrir Sitio</span>-->
                                <!--<b class="caret"></b>-->
                            </a>
                        </li>
<!--        ###################################################### FIN SITIO WEB ##############################################################-->                        
                           
<!--        ###################################################### SETTINGS ##############################################################-->
                      
                        <?php if(IS_ROOT) : ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-cog-2"></i><span class="txt"> Ajustes</span>
                                <b class="caret"></b>
                            </a>
                            
                            
                       
                            <ul class="dropdown-menu left dropdown-form template-settings">
                                <li class="menu">
                                    <ul role="menu">
                                        <li><strong>Configuración de la Plantilla</strong>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                  <a href="<?= Url::to(['/admin/modules']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'modules') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-folder-close"></i>
                            <?= Yii::t('easyii', 'Modules') ?>
                        </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <a href="<?= Url::to(['/admin/admins']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'admins') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-user"></i>
                            <?= Yii::t('easyii', 'Admins') ?>
                        </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <a href="<?= Url::to(['/admin/system']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'system') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-hdd"></i>
                            <?= Yii::t('easyii', 'System') ?>
                        </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                
                                                <a href="<?= Url::to(['/admin/logs']) ?>" class="menu-item toggle <?= ($moduleName == 'admin' && $this->context->id == 'logs') ? 'active' :'' ?>">
                            <i class="glyphicon glyphicon-align-justify"></i>
                            <?= Yii::t('easyii', 'Logs') ?>
                        </a>
                                            </div>
                                        </li>
                                        <!--                                        <li>
                                                                                        <div class="toggle-custom">
                                                                                            <label class="toggle" data-on="ON" data-off="OFF">
                                                                                                <input type="checkbox" id="fixed-right-sidebar" name="fixed-right-sidebar" checked>
                                                                                                <span class="button-checkbox"></span>
                                                                                            </label>
                                                                                            <label for="fixed-right-sidebar">Fixed Right Sidebar</label>
                                                                                        </div>
                                                                                    </li>-->
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <?php endif; ?>
<!--                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-cog-2"></i><span class="txt"> Settings</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu left dropdown-form template-settings">
                                <li class="menu">
                                    <ul role="menu">
                                        <li><strong>Template settings</strong>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-header-toggle" name="fixed-header-toggle" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-header-toggle">Fixed header</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-left-sidebar" name="fixed-left-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-left-sidebar">Fixed Left Sidebar</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="toggle-custom">
                                                <label class="toggle" data-on="ON" data-off="OFF">
                                                    <input type="checkbox" id="fixed-right-sidebar" name="fixed-right-sidebar" checked>
                                                    <span class="button-checkbox"></span>
                                                </label>
                                                <label for="fixed-right-sidebar">Fixed Right Sidebar</label>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->

<!--        ###################################################### FIN SETTINGS ##############################################################-->
                        
<!--        ###################################################### MENSAJES ##############################################################-->
<!--                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 minia-icon-envelope"></i><span class="txt">Messages</span><span class="notification">8</span>
                            </a>
                            <ul class="dropdown-menu left">
                                <li class="menu">
                                    <ul class="messages">
                                        <li class="header"><strong>Messages</strong> (10) emails and (2) PM</li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Sammy Morerira</strong></a><span class="time">35 min ago</span></span>
                                            <span class="msg">I have question about new function ...</span>
                                        </li>
                                        <li>
                                            <span class="icon avatar"><img src="img/avatar.jpg" alt="" /></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>George Michael</strong></a><span class="time">1 hour ago</span></span>
                                            <span class="msg">I need to meet you urgent please call me ...</span>
                                        </li>
                                        <li>
                                            <span class="icon"><i class="s16 icomoon-icon-envelop"></i></span>
                                            <span class="name"><a data-toggle="modal" href="#myModal1"><strong>Ivanovich</strong></a><span class="time">1 day ago</span></span>
                                            <span class="msg">I send you my suggestion, please look and ...</span>
                                        </li>
                                        <li class="view-all"><a href="#">View all messages <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        -->
            <!--###################################################### FIN MENSAJES ##############################################################-->
                    </ul>
                    <ul class="nav navbar-right usernav">
                        
                        
<!--        ####################################### NOTIFICACIONES #######################################################                      -->
<!--                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="s16 icomoon-icon-earth"></i><span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul class="notif">
                                        <li class="header"><strong>Notifications</strong> (3) items</li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-user-plus"></i></span>
                                                <span class="event">1 User is registred</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-bubble-3"></i></span>
                                                <span class="event">Jony add 1 comment</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="icon"><i class="s16 icomoon-icon-new"></i></span>
                                                <span class="event">admin Julia added post with a long description</span>
                                            </a>
                                        </li>
                                        <li class="view-all"><a href="#">View all notifications <i class="s16 fa fa-angle-double-right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>-->


    <!--####################################### FIN NOTIFICACIONES #######################################################-->
    
    <!--####################################### AÑADIR, EDITAR, USUARIOS #######################################################-->
    
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown">
                                <img src="img/avatar.jpg" alt="" class="image" />
                                <span class="txt">admin@supr.com</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu right">
                                <li class="menu">
                                    <ul>
                                        <li><a href="#"><i class="s16 icomoon-icon-user-plus"></i>Edit profile</a>
                                        </li>
                                        <li><a href="#"><i class="s16 icomoon-icon-bubble-2"></i>Comments</a>
                                        </li>
                                        <li><a href="#"><i class="s16 icomoon-icon-plus"></i>Add user</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
    <!--####################################### FIN AÑADIR, EDITAR, USUARIOS #######################################################-->
    
    
                        <li><a href="login.html"><i class="s16 icomoon-icon-exit"></i><span class="txt"> Logout</span></a>
                        </li>
<!--                        <li><a id="toggle-right-sidebar" href="#"><i class="s16 icomoon-icon-indent-increase"></i></a>
                        </li>-->
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </nav>
            <!-- /navbar -->
        </div>
    
    <div id="wrapper">
            <!-- #wrapper -->
            <!--Sidebar background-->
            <div id="sidebarbg" class="hidden-lg hidden-md hidden-sm hidden-xs"></div>
            <!--Sidebar content-->
            <div id="sidebar" class="page-sidebar hidden-lg hidden-md hidden-sm hidden-xs">
                <div class="shortcuts">
                    <ul>
                        <li><a href="support.html" title="Support section" class="tip"><i class="s24 icomoon-icon-support"></i></a>
                        </li>
                        <li><a href="#" title="Database backup" class="tip"><i class="s24 icomoon-icon-database"></i></a>
                        </li>
                        <li><a href="charts.html" title="Sales statistics" class="tip"><i class="s24 icomoon-icon-pie-2"></i></a>
                        </li>
                        <li><a href="#" title="Write post" class="tip"><i class="s24 icomoon-icon-pencil"></i></a>
                        </li>
                    </ul>
                </div>
                <!-- End search -->
                <!-- Start .sidebar-inner -->
                <div class="sidebar-inner">
                    <!-- Start .sidebar-scrollarea -->
                    <div class="sidebar-scrollarea">
                        <div class="sidenav">
                            <div class="sidebar-widget mb0">
                                <h6 class="title mb0">Menu</h6>
                            </div>
                            <!-- End .sidenav-widget -->
                            <div class="mainnav">
                                <ul>
                                    <?php foreach(Yii::$app->getModule('admin')->activeModules as $module) : ?>
                                    <li><a href="<?= 
//                        var_dump($module);die;
                            Url::to(["/admin/$module->name"]) ?>" class=" s16 menu-item <?= ($moduleName == $module->name ? 'active' : '') ?>">
                            <?php if($module->icon != '') : ?>
                                <i class="s16 glyphicon glyphicon-<?= $module->icon ?>"></i>
                            <?php endif; ?>
                            <?= $module->title ?>
                            <?php if($module->notice > 0) : ?>
                                <span class="badge"><?= $module->notice ?></span>
                            <?php endif; ?> </a>
                                    </li>
                                    
                                    <?php endforeach; ?>
                                    
                                    <li><a href="<?= Url::to(['/admin/settings']) ?>" class="menu-item <?= ($moduleName == 'admin' && $this->context->id == 'settings') ? 'active' :'' ?>">
                        <i class="glyphicon glyphicon-cog"></i>
                        <?= Yii::t('easyii', 'Settings') ?>
                         </a>
                                    </li>
                                    
                                    
                                    
                                    
<!--                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-stats-up"></i><span class="txt">Charts</span> </a>
                                        <ul class="sub">
                                            <li><a href="charts-flot.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Flot charts</span></a>
                                            </li>
                                            <li><a href="charts-rickshaw.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Rickshaw charts</span></a>
                                            </li>
                                            <li><a href="charts-morris.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Morris charts</span></a>
                                            </li>
                                            <li><a href="charts-chartjs.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Chartjs</span></a>
                                            </li>
                                            <li><a href="charts-other.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Other charts</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>-->
<!--                                        <a href="#"><i class="s16 icomoon-icon-list"></i><span class="txt">Forms</span><span class="notification red">6</span></a>
                                        <ul class="sub">
                                            <li><a href="forms-basic.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Basic forms</span></a>
                                            </li>
                                            <li><a href="forms-advanced.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Advanced forms</span></a>
                                            </li>
                                            <li><a href="forms-layouts.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Form layouts</span></a>
                                            </li>
                                            <li><a href="forms-wizard.html"><i class="s16 fa fa-magic"></i><span class="txt">Form wizard</span></a>
                                            </li>
                                            <li><a href="forms-validation.html"><i class="s16 fa fa-check"></i><span class="txt">From validation</span></a>
                                            </li>
                                            <li><a href="code-editor.html"><i class="s16 icomoon-icon-code"></i><span class="txt">Code editor</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-table-2"></i><span class="txt">Tables</span></a>
                                        <ul class="sub">
                                            <li><a href="tables-basic.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Basic tables</span></a>
                                            </li>
                                            <li><a href="tables-data.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Data tables</span></a>
                                            </li>
                                            <li><a href="tables-ajax.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Ajax tables</span></a>
                                            </li>
                                            <li><a href="tables-pricing.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Pricing tables</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-equalizer-2"></i><span class="txt">UI Elements</span></a>
                                        <ul class="sub">
                                            <li><a href="icons.html"><i class="s16 icomoon-icon-rocket"></i><span class="txt">Icons</span></a>
                                            </li>
                                            <li><a href="buttons.html"><i class="s16 icomoon-icon-point-up"></i><span class="txt">Buttons</span></a>
                                            </li>
                                            <li><a href="tabs.html"><i class="s16 icomoon-icon-tab"></i><span class="txt">Tabs</span></a>
                                            </li>
                                            <li><a href="accordions.html"><i class="s16 iconic-icon-new-window"></i><span class="txt">Accordions</span></a>
                                            </li>
                                            <li><a href="modals.html"><i class="s16 cut-icon-popout"></i><span class="txt">Modals</span></a>
                                            </li>
                                            <li><a href="sliders.html"><i class="s16 fa fa-sliders"></i><span class="txt">Sliders</span></a>
                                            </li>
                                            <li><a href="progressbars.html"><i class="s16 icomoon-icon-steps"></i><span class="txt">Progressbars</span></a>
                                            </li>
                                            <li><a href="notifications.html"><i class="s16  icomoon-icon-bubble-notification"></i><span class="txt">Notifications</span></a>
                                            </li>
                                            <li><a href="typo.html"><i class="s16 icomoon-icon-font"></i><span class="txt">Typography</span></a>
                                            </li>
                                            <li><a href="lists.html"><i class="s16 icomoon-icon-numbered-list"></i><span class="txt">Lists</span></a>
                                            </li>
                                            <li><a href="grids.html"><i class="s16 icomoon-icon-grid"></i><span class="txt">Grids</span></a>
                                            </li>
                                            <li><a href="ui-other.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Other</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="portlets.html"><i class="s16 minia-icon-window-4"></i><span class="txt">Portlets</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-envelop"></i><span class="txt">Email</span><span class="notification green">12</span></a>
                                        <ul class="sub">
                                            <li><a href="email-inbox.html"><i class="s16 fa fa-inbox"></i><span class="txt">Inbox</span></a>
                                            </li>
                                            <li><a href="email-read.html"><i class="s16 fa fa-mail-forward"></i><span class="txt">Read email</span></a>
                                            </li>
                                            <li><a href="email-write.html"><i class="s16 fa fa-mail-reply"></i><span class="txt">Write email</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-map"></i><span class="txt">Maps</span></a>
                                        <ul class="sub">
                                            <li><a href="maps-google.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Google maps</span></a>
                                            </li>
                                            <li><a href="maps-vector.html"><i class="s16 icomoon-icon-arrow-right-3"></i><span class="txt">Vector maps</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="file.html"><i class="s16 icomoon-icon-upload"></i><span class="txt">File Manager</span></a>
                                    </li>
                                    <li><a href="widgets.html"><i class="s16 icomoon-icon-cube"></i><span class="txt">Widgets</span><span class="notification red">9</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="s16 icomoon-icon-folder"></i><span class="txt">Pages</span><span class="notification blue">11</span></a>
                                        <ul class="sub">
                                            <li><a href="blank.html"><i class="s16 icomoon-icon-file-2"></i><span class="txt">Blank page</span></a>
                                            </li>
                                            <li><a href="calendar.html"><i class="s16 icomoon-icon-calendar"></i><span class="txt">Calendar</span></a>
                                            </li>
                                            <li><a href="gallery.html"><i class="s16 icomoon-icon-image-2"></i><span class="txt">Gallery</span></a>
                                            </li>
                                            <li><a href="timeline.html"><i class="s16 entypo-icon-clock"></i><span class="txt">Timeline</span></a>
                                            </li>
                                            <li><a href="login.html"><i class="s16 icomoon-icon-unlocked"></i><span class="txt">Login</span></a>
                                            </li>
                                            <li><a href="lock-screen.html"><i class="s16 icomoon-icon-lock"></i><span class="txt">Lock screen</span></a>
                                            </li>
                                            <li><a href="register.html"><i class="s16 icomoon-icon-user-plus-2"></i><span class="txt">Register</span></a>
                                            </li>
                                            <li><a href="lost-password.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Lost password</span></a>
                                            </li>
                                            <li><a href="profile.html"><i class="s16 icomoon-icon-profile"></i><span class="txt">User profile</span></a>
                                            </li>
                                            <li><a href="invoice.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Invoice</span></a>
                                            </li>
                                            <li><a href="faq.html"><i class="s16 icomoon-icon-attachment"></i><span class="txt">FAQ</span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="s16 icomoon-icon-file"></i><span class="txt">Error pages</span><span class="notification">6</span></a>
                                                <ul class="sub">
                                                    <li><a href="403.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Error 403</span></a>
                                                    </li>
                                                    <li><a href="404.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Error 404</span></a>
                                                    </li>
                                                    <li><a href="405.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Error 405</span></a>
                                                    </li>
                                                    <li><a href="500.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Error 500</span></a>
                                                    </li>
                                                    <li><a href="503.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Error 503</span></a>
                                                    </li>
                                                    <li><a href="offline.html"><i class="s16 icomoon-icon-file"></i><span class="txt">Offline page</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>-->
                                </ul>
                            </div>
                        </div>
                        <!-- End sidenav -->
                      
                    </div>
                    <!-- End .sidebar-scrollarea -->
                </div>
                <!-- End .sidebar-inner -->
            </div>
            <!-- End #sidebar -->
            <!--Sidebar background-->
            
<!--            #######################################  MENU DESPLEGABLE IZQUIEDO #######################################################-->
            
<!--            <div id="right-sidebarbg" class="hidden-lg hidden-md hidden-sm hidden-xs"></div>
             Start #right-sidebar 
            <aside id="right-sidebar" class="right-sidebar hidden-lg hidden-md hidden-sm hidden-xs">
                 Start .sidebar-inner 
                <div class="sidebar-inner">
                     Start .sidebar-scrollarea 
                    <div class="sidebar-scrollarea">
                        <div class="pl10 pt10 pr5">
                            <ul class="timeline timeline-icons">
                                <li>
                                    <p>
                                        <a href="#">Jonh Doe</a> attached new <a href="#">file</a>
                                        <span class="timeline-icon"><i class="fa fa-file-text-o"></i></span>
                                        <span class="timeline-date">Dec 10, 22:00</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Admin</a> approved <a href="#">3 new comments</a>
                                        <span class="timeline-icon"><i class="fa fa-comment"></i></span>
                                        <span class="timeline-date">Dec 8, 13:35</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Jonh Smith</a> deposit 300$
                                        <span class="timeline-icon"><i class="fa fa-money color-green"></i></span>
                                        <span class="timeline-date">Dec 6, 10:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Serena Williams</a> purchase <a href="#">3 items</a>
                                        <span class="timeline-icon"><i class="fa fa-shopping-cart color-red"></i></span>
                                        <span class="timeline-date">Dec 5, 04:36</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">1 support </a> request is received from <a href="#">Klaudia Chambers</a>
                                        <span class="timeline-icon"><i class="fa fa-life-ring color-gray-light"></i></span>
                                        <span class="timeline-date">Dec 4, 18:40</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        You received 136 new likes for <a href="#">your page</a>
                                        <span class="timeline-icon"><i class="glyphicon glyphicon-thumbs-up"></i></span>
                                        <span class="timeline-date">Dec 4, 12:00</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">12 settings </a> are changed from <a href="#">Master Admin</a>
                                        <span class="timeline-icon"><i class="glyphicon glyphicon-cog"></i></span>
                                        <span class="timeline-date">Dec 3, 23:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Klaudia Chambers</a> change your photo
                                        <span class="timeline-icon"><i class="icomoon-icon-image-2"></i></span>
                                        <span class="timeline-date">Dec 2, 05:17</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Master server </a> is down for 10 min.
                                        <span class="timeline-icon"><i class="icomoon-icon-database"></i></span>
                                        <span class="timeline-date">Dec 2, 04:56</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">12 links </a> are broken
                                        <span class="timeline-icon"><i class="fa fa-unlink"></i></span>
                                        <span class="timeline-date">Dec 1, 22:13</span>
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        <a href="#">Last backup </a> is restored by <a href="#">Master admin</a>
                                        <span class="timeline-icon"><i class="fa fa-undo color-red"></i></span>
                                        <span class="timeline-date">Dec 1, 17:42</span>
                                    </p>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-default timeline-load-more-btn"><i class="fa fa-refresh"></i> Load more </a>
                        </div>
                    </div>
                     End .sidebar-scrollarea 
                </div>
                 End .sidebar-inner 
            </aside>-->
            
            
            <!--#######################################  FIN MENU DESPLEGABLE IZQUIEDO #######################################################-->
            <!-- End #right-sidebar -->
            <!--Body content-->
            <div id="content" class="page-content clearfix">
                 <div class="page-title">
                        <?= $this->title ?>
                    </div>
                    <!--<div class="container-fluid">-->
                        <?php foreach(Yii::$app->session->getAllFlashes() as $key => $message) : ?>
                            <div class="alert alert-<?= $key ?>"><?= $message ?></div>
                        <?php endforeach; ?>
                        <?= $content ?>
                    <!--</div>-->
            </div>
           
           
            <!-- End #content -->
            <!--######################## POLITICA DE PRIVACIDAD #####################################-->
<!--            <div id="footer" class="clearfix sidebar-page right-sidebar-page">
                 Start #footer  
                <p class="pull-left">
                    Copyrights &copy; 2014 <a href="http://suggeelson.com/" class="color-blue strong" target="_blank">SuggeElson</a>. All rights reserved.
                </p>
                <p class="pull-right">
                    <a href="#" class="mr5">Terms of use</a>
                    |
                    <a href="#" class="ml5 mr25">Privacy police</a>
                </p>
            </div>-->
            <!--######################## FIN POLITICA DE PRIVACIDAD #####################################-->

            <!-- End #footer  -->
        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
