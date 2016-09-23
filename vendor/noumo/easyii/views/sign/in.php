<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$asset = \yii\easyii\assets\EmptyAsset::register($this);
$this->title = Yii::t('easyii', 'Sign in');
$colorTema = Yii::$app->request->cookies; // VARIABLE ALMACENADA POR COOKIE PARA EL COLOR DEL LOGIN
foreach ($colorTema as $color){
//var_dump($color->value);die;  
}
?>
    
<link href="<?= $asset->baseUrl?>/css/tema2/skins/<?php echo $color->value?>" rel="stylesheet" type="text/css"> 

<body class="page-body login-page login-form-fall" >

    <div class="login-container">
        <div class="login-header login-caret">
            <div class="login-content">
                <a  class="logo"> <img src="<?= $asset->baseUrl ?>/img/logo_20.png" width="75%"> </a> 
                <p class="description">Estimado usuario , inicie sesión para acceder al área de administración !</p>
                <!-- progress bar indicator --> 
                <div class="login-progressbar-indicator">
                    <h3>43%</h3>
                    <span>Cargando...</span> 
                </div>
            </div>
        </div>
        <div class="login-progressbar">
            <div></div>
        </div>
        <div class="login-form">
            <div class="login-content">
                <div class="form-login-error">
                    <h3>Login Invalido</h3>
                </div>
        
                 <?php $form = ActiveForm::begin([
                                'fieldConfig' => [
                                    'template' => "{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}"
                                ]
                    ]);?>
                
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> <i class="glyphicon glyphicon-user"></i> </div>
                            <?= $form->field($model, 'username')->textInput(['class' => 'form-control', 'placeholder' => Yii::t('easyii', 'Username')]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"> <i class="glyphicon glyphicon-text-width"></i> </div>
                            <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control', 'placeholder' => Yii::t('easyii', 'Password')]) ?>
                        </div>
                    </div>
<!--                    <div class="form-group"> <button type="submit" class="btn btn-primary btn-block btn-login"> <i class="entypo-login"></i>
                            Login In
                        </button> 
                    </div>-->
                 
                    <?= Html::submitButton(Yii::t('easyii', 'Login'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
                    <!--<div class="form-group"> <em>- or -</em> </div>-->
<!--                    <div class="form-group"> <button type="button" class="btn btn-default btn-lg btn-block btn-icon icon-left facebook-button">
                            Login with Facebook
                            <i class="entypo-facebook"></i> </button> 
                    </div>-->
                    <?php ActiveForm::end(); ?>
                <!--</form>-->
                <!--<div class="login-bottom-links"> <a href="http://demo.neontheme.com/extra/forgot-password/" class="link">Forgot your password?</a> <br /> <a href="#">ToS</a> - <a href="#">Privacy Policy</a> </div>-->
            </div>
        </div>
    </div>

</body>
