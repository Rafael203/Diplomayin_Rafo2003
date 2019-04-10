<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="<?= \dmstr\helpers\AdminLteHelper::skinClass() ?>">
<?php $this->beginBody() ?>
<?php
Yii::$app->language = 'en';
?>
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="<?= \yii\helpers\Url::to(['/']) ?>"><img src="<?= \yii\helpers\Url::to('@web/images/logo2.png') ?>" alt=" " /><h1>FASHION<span>CLUB</span></h1></a>
        </div>
        <div class="col-md-6 phone-w3l">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li>+18045403380</li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="header-bottom-w3ls">
    <div class="container">
        <div class="col-md-7 navigation-agileits">
            <nav class="navbar navbar-default">
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav ">
                        <li class=" active"><a href="<?= \yii\helpers\Url::to(['/'])?>" class="hyper "><span>Home</span></a></li>
                        <?php if (Yii::$app->user->isGuest) {
                            $banm[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                            $banm[] = ['label' => 'Login', 'url' => ['/site/login']];
                        } else {
                            $banm[] = ['label' => 'Logout', 'linkOptions' => ['data-method' => 'post'], 'url' => ['/site/logout']];

                        }
                        echo Nav::widget([
                            'options' => ['class' => 'fa navbar-nav navbar-right'],
                            'items' => $banm,
                        ]);
                        ?>

                        <?php
                        $urishbanm = [
                            ['label' => 'Shop', 'url' => ['/shop']],
                            ['label' => 'About', 'url' => ['/about']],
                        ];

                        echo Nav::widget([
                            'options' => ['class' => 'fa navbar-nav navbar-right'],
                            'items' => $urishbanm,
                        ]);
                        ?>
                    </ul>

                 </div>
            </nav>
        </div>
        <div class="col-md-4 search-agileinfo">
                <form action="<?= \yii\helpers\Url::to(['/shop'])?>" method="get">
                    <input type="search" name="s" placeholder="Search..." required="">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                </form>
        </div>
        <div class="col-md-1 cart-wthree">
            <div class="cart" href="#">
                <form action="<?= \yii\helpers\Url::to(['@web/cart']) ?>" method="post" class="last">
                    <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
               </form>
            </div>
        </div>
        </div>
        </div>
<div class="clearfix"></div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
        <div class="clearfix"></div>


<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">
            <a href="index.html"><img src="<?= \yii\helpers\Url::to('@web/images/logo2.png') ?>" alt=" " / class="margin-d"><h3>FASHION<span>CLUB</span></h3></a>
            <ul>
                <li>1234k Avenue, 4th block,</li>
                <li>New York City.</li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
                <a href="https://twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="https://dribbble.com/"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.linkedin.com/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">
            <h4>Information</h4>
            <ul>
                <li><a href="<?= \yii\helpers\Url::to(['/contact']) ?>">Contact Us</a></li>
                <li><a href="<?= \yii\helpers\Url::to(['/site/faq']) ?>">FAQ's</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd3">
            <h4>Shop</h4>
            <ul>
                <li><a href="<?= \yii\helpers\Url::to(['/site/index']) ?>/">Jewellery</a></li>
                <li><a href="cosmetics.html">Cosmetics</a></li>
                <li><a href="Shoes.html">Shoes</a></li>
                <li><a href="deos.html">Deos</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">
            <h4>My Account</h4>
            <ul>

                <li><a href="<?= \yii\helpers\Url::to(['/login']) ?>">Login</a></li>
                <li><a href="<?= \yii\helpers\Url::to(['/register']) ?>">Register</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
