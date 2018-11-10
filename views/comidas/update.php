<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comidas */

$this->title = 'Update Comidas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comidas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
