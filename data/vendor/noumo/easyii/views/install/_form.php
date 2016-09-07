<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $form = ActiveForm::begin(['action' => Url::to(['/admin/install'])]); ?>
<?= $form->field($model, 'root_password', ['inputOptions' => ['title' => Yii::t('easyii/install','Contraseña para iniciar sesión como root')]]) ?>
<?= $form->field($model, 'admin_email', ['inputOptions' => ['title' => Yii::t('easyii/install','Se utiliza "ReplyTo" en los mensajes de correo')]]) ?>
<?= $form->field($model, 'robot_email', ['inputOptions' => ['title' => Yii::t('easyii/install','Se utiliza como "From" en los mensajes de correo')]]) ?>
<?= $form->field($model, 'recaptcha_key', ['inputOptions' => ['title' => Yii::t('easyii/install','Se requiere el uso de captcha los formularios (mesajes, feedback)')]]) ?>
<?= $form->field($model, 'recaptcha_secret') ?>
<p class="recaptcha-tip"><?= Yii::t('easyii/install', 'You easily can get keys on') ?> <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank"><?= Yii::t('easyii/install', 'ReCaptcha website') ?></a></p>
<?= Html::submitButton(Yii::t('easyii/install', 'Install'), ['class' => 'btn btn-lg btn-primary btn-block']) ?>
<?php ActiveForm::end(); ?>