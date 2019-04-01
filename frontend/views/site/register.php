<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
?>
<div class="col-md-4 search-agileinfo">
    <form action="#" method="post">
        <input type="search" name="Search" placeholder="Search for a Product..." required="">
        <button type="submit" class="btn btn-default search" aria-label="Left Align">
            <i class="fa fa-search" aria-hidden="true"> </i>
        </button>
    </form>
</div>
<div class="col-md-1 cart-wthree">
    <div class="cart">
        <form action="#" method="post" class="last">
            <input type="hidden" name="cmd" value="_cart" />
            <input type="hidden" name="display" value="1" />
            <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
        </form>
    </div>
</div>
<div class="clearfix"></div>
</div>
</div>
<div class="login">

    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Register</h3>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>