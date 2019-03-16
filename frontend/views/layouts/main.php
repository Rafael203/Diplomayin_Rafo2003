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
<body>
<?php $this->beginBody() ?>
<div class="header-top-w3layouts">
    <div class="container">
        <div class="col-md-6 logo-w3">
            <a href="index.html"><img src="images/logo2.png" alt=" " /><h1>FASHION<span>CLUB</span></h1></a>
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
                        <li class=" active"><a href="index" class="hyper "><span>Home</span></a></li>
                        <li class="dropdown ">
                            <a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Clothing<b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                        <?php
                                            $menuItems = [
                                            ['label' => "Women's Clothing", 'url' => ['/site/index']],
                                            ['label' => "Men's Clothing", 'url' => ['/site/about']],
                                            ['label' => "Kid's Wear", 'url' => ['/site/contact']],
                                            ['label' => "Party Wear", 'url' => ['/site/contact']],
                                            ];
                                                echo Nav::widget([
                                                    'options' => ['class' => 'fa fa-angle-right'],
                                                    'items' => $menuItems,
                                                ]);
                                            ?>

                                        </ul>

                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
                                            <?php
                                            $menuItems = [
                                                ['label' => "Casuals", 'url' => ['/site/contact']],
                                                ['label' => "Night Wear", 'url' => ['/site/contact']],
                                                ['label' => "Formals", 'url' => ['/site/contact']],
                                                ['label' => "Inner Wear", 'url' => ['/site/contact']],
                                            ];
                                            echo Nav::widget([
                                                'options' => ['class' => 'fa fa-angle-right'],
                                                'items' => $menuItems,
                                            ]);
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 w3l">
                                        <a href="women.html"><img src="images/menu1.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <?php if (Yii::$app->user->isGuest) {
                            $banm[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                            $banm[] = ['label' => 'Login', 'url' => ['/site/login']];
                        } else {
                            $banm[] = '<li>'
                                . Html::beginForm(['/site/logout'], 'post')
                                . Html::submitButton(
                                    'Logout (' . Yii::$app->user->identity->username . ')',
                                    ['class' => 'btn btn-link logout']
                                )
                                . Html::endForm()
                                . '</li>';

                        }
                        echo Nav::widget([
                            'options' => ['class' => 'fa navbar-nav navbar-right'],
                            'items' => $banm,
                        ]);
                        ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span> Personal Care <b class="caret"></b></span></a>
                            <ul class="dropdown-menu multi multi1">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <ul class="multi-column-dropdown">
<!--                                            <li><a href="jewellery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Jewellery </a></li>-->
<!--                                            <li><a href="watches.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Watches</a></li>-->
<!--                                            <li><a href="cosmetics.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Cosmetics</a></li>-->
<!--                                            <li><a href="deos.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Deo & Perfumes</a></li>-->
                                            <?php
                                            $menuItems = [
                                                ['label' => 'Jewellery', 'url' => ['/site/index']],
                                                ['label' => 'Watches', 'url' => ['/site/about']],
                                                ['label' => 'Cosmetics', 'url' => ['/site/contact']],
                                                ['label' => 'Deo & Perfumes', 'url' => ['/site/contact']],
                                            ];
                                            echo Nav::widget([
                                                'options' => ['class' => 'navbar-nav navbar-right'],
                                                'items' => $menuItems,
                                            ]);
                                            ?>
                                        </ul>

                                    </div>
                                    <div class="col-sm-4">

                                        <ul class="multi-column-dropdown">
                                            <?php
                                            $menuItems = [
                                                ['label' => 'Hair Care', 'url' => ['/site/index']],
                                                ['label' => 'Shoes', 'url' => ['/site/about']],
                                                ['label' => 'Handbags', 'url' => ['/site/contact']],
                                                ['label' => 'Skin care', 'url' => ['/site/contact']],
                                            ];

                                            echo Nav::widget([
                                                'options' => ['class' => 'fa navbar-nav navbar-right'],
                                                'items' => $menuItems,
                                            ]);
                                            ?>

                                        </ul>

                                    </div>
                                    <div class="col-sm-4 w3l">
                                        <a href="jewellery.html"><img src="images/menu2.jpg" class="img-responsive" alt=""></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <?php
                        $urishbanm = [
                            ['label' => 'Shop', 'url' => ['/shop']],
                            ['label' => 'About', 'url' => ['/site/about']],
                            ['label' => 'Contact us', 'url' => ['/site/contact']],
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

<div class="wrap">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<div class="newsletter">
    <div class="container">
        <div class="col-md-6 w3agile_newsletter_left">
            <h3>Newsletter</h3>
            <p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
        </div>
        <div class="col-md-6 w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Subscribe" />
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="col-md-3 footer-grids fgd1">
            <a href="index.html"><img src="images/logo2.png" alt=" " / class="margin-d"><h3>FASHION<span>CLUB</span></h3></a>
            <ul>
                <li>1234k Avenue, 4th block,</li>
                <li>New York City.</li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd2">
            <h4>Information</h4>
            <ul>
                <li><a href="<?= \yii\helpers\Url::to('@web') ?>/contact">Contact Us</a></li>
                <li><a href="<?= \yii\helpers\Url::to('@web') ?>/faq">FAQ's</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd3">
            <h4>Shop</h4>
            <ul>
                <li><a href="<?= \yii\helpers\Url::to('@web') ?>/jewellery">Jewellery</a></li>
                <li><a href="cosmetics.html">Cosmetics</a></li>
                <li><a href="Shoes.html">Shoes</a></li>
                <li><a href="deos.html">Deos</a></li>
            </ul>
        </div>
        <div class="col-md-3 footer-grids fgd4">
            <h4>My Account</h4>
            <ul>

                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
                <li><a href="recommended.html">Recommended </a></li>
                <li><a href="payment.html">Payments</a></li>
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
