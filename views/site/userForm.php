<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Sign Up';

?>

 

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'password')->passwordInput() ?>


    <div class="form-group">
        <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
