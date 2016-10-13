<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Personage */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personage-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_clan')->textInput() ?>

    <?= $form->field($model, 'path_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'power')->textInput() ?>

    <?= $form->field($model, 'hp')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'money')->textInput() ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'vunos')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
