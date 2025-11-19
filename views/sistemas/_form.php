<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Sistemas $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="sistemas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
