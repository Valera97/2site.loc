<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Personage */

$this->title = Yii::t('app', 'Create Personage');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Personages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="personage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
