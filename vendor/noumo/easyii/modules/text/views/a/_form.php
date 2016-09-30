<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\Url;
    use yii\easyii\widgets\Redactor;
?>
<?php $form = ActiveForm::begin([
    'enableAjaxValidation' => true,
    'options' => ['class' => 'model-form']
]); ?>
<?php // $form->field($model, 'text')->textarea() ?>
<?= $form->field($model, 'text')->widget(Redactor::className(),[
    'options' => [
        'minHeight' => 400,
//        'imageUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'article'], true),
//        'fileUpload' => Url::to(['/admin/redactor/upload', 'dir' => 'article'], true),
        'plugins' => ['fullscreen']
    ]
]) ?>
<?= (IS_ROOT) ? $form->field($model, 'slug') : '' ?>
<?= Html::submitButton(Yii::t('easyii', 'Save'), ['class' => 'btn btn-primary']) ?>
<?php ActiveForm::end(); ?>