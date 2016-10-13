<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PersonageSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personage-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nname') ?>

    <?= $form->field($model, 'id_clan') ?>

    <?= $form->field($model, 'path_url') ?>

    <?= $form->field($model, 'power') ?>

    <?php // echo $form->field($model, 'hp') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'money') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'vunos') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
