<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Comidas */

$this->title = 'Create Comidas';
$this->params['breadcrumbs'][] = ['label' => 'Comidas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comidas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
