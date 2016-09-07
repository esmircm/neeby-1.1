<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$asset = \yii\easyii\assets\EmptyAsset::register($this);
$this->title = Yii::t('easyii', 'Iniciar Sesión');
?>
<div class="container">
    <div id="wrapper" class="col-md-4 col-md-offset-4 vertical-align-parent">
        <div class="vertical-align-child">
            <div class="panel">
                <div class="panel-heading text-center">
                    <?= Yii::t('easyii', 'Iniciar Sesión') ?>
                </div>
                <div class="panel-body">
                    <?php $form = ActiveForm::begin([
                        'fieldConfig' => [
                            'template' => "{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}"
                        ]
                    ])
                    ?>
                        <?= $form->field($model, 'username')->textInput(['class'=>'form-control', 'placeholder'=>Yii::t('easyii', 'Usuario')]) ?>
                        <?= $form->field($model, 'password')->passwordInput(['class'=>'form-control', 'placeholder'=>Yii::t('easyii', 'Contraseña')]) ?>
                        <?=Html::submitButton(Yii::t('easyii', 'Login'), ['class'=>'btn btn-lg btn-primary btn-block']) ?>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="text-center">
                <a class="logo" href="http://easyiicms.com" target="_blank" title="Neeby página oficial">
                    <img src="<?= $asset->baseUrl ?>/img/logo_20.png">Neeby
                </a>
            </div>
        </div>
    </div>
</div>
