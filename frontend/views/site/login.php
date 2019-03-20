<div class="login">

    <div class="main-agileits">
        <div class="form-w3agile">
            <h3>Login</h3>
            <form action="#" method="post">
                <div class="key">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input  type="text" name="Email" required="" placeholder="Email">
                    <div class="clearfix"></div>
                </div>
                <div class="key">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input  type="password" name="Password" required="" placeholder="Password">
                    <div class="clearfix"></div>
                </div>
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="forg">
            <a href="#" class="forg-left">Forgot Password</a>
            <a href="register.html" class="forg-right">Register</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<!--<div class="site-login">-->
<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--    <p>Please fill out the following fields to login:</p>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col-lg-5">-->
<!--            --><?php //$form = ActiveForm::begin(['id' => 'login-form']); ?>
<!---->
<!--                --><?//= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?//= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--                --><?//= $form->field($model, 'rememberMe')->checkbox() ?>
<!---->
<!--                <div style="color:#999;margin:1em 0">-->
<!--                    If you forgot your password you can --><?//= Html::a('reset it', ['site/request-password-reset']) ?><!--.-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    --><?//= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                </div>-->
<!---->
<!--            --><?php //ActiveForm::end(); ?>
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
