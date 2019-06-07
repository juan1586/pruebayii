<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Users;


/* @var $this yii\web\View */
/* @var $model app\models\posts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="posts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->dropDownList(
        ArrayHelper::map(Users::find()->all(),'user_Id','username'),
        ['prompt' =>'Seleccione']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
