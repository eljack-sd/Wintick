<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sistemas $model */

$this->title = 'Create Sistemas';
$this->params['breadcrumbs'][] = ['label' => 'Sistemas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sistemas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
