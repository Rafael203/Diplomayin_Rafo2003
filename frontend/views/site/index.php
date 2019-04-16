<?php
//echo '<pre>';
//var_dump($categ);
//die;
Yii::$app->language = 'en';
?>
<div class="banner-agile">
    <div class="container">
        <h2>WELCOME TO</h2>
        <h3>FASHION <span>CLUB</span></h3>
        <p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
        <a href="<?= \yii\helpers\Url::to(['/about']) ?>">Read More</a>
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/sales']);?>"><div class="bb-middle-top-1">
                    <h3>SALE</h3>
                </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/new'])?>"><div class="bb-middle-top-2">
                    <h3>New</h3>
                </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/featured'])?>"><div class="bb-middle-top-3">
                    <h3>Featured</h3>
                </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="top-products">
    <div class="container">
        <h3>Newest Products</h3>
        <div class="col-md-12">
            <div class="col-md-3 top-product-grids tp2">
                <a href="single.html"><div class="product-img">
                        <img src="images/tp2.jpg" alt="" style="width: 100%"/>
                        <div class="p-mask">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="w3ls1_item" value="Formal shirt" />
                                <input type="hidden" name="amount" value="190.00" />
                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                            </form>
                        </div>
                    </div></a>
                <h4>Formal shirt</h4>
                <h5>$190.00</h5>
            </div>
        </div>
    </div>
<div class="fandt">
    <div class="container">
        <div class="col-md-6 features">
            <h3><?= Yii::t('app','our_services')?></h3>
            <div class="support">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-user " aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4>24/7 online free support</h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="shipping">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4><?= Yii::t('app','free_shipping')?></h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="money-back">
                <div class="col-md-2 ficon hvr-rectangle-out">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <div class="col-md-10 ftext">
                    <h4><?= Yii::t('app','100%_money_back')?></h4>
                    <p>Praesent rutrum vitae ligula sit amet vehicula. Donec eget libero nec dolor tincidunt vulputate.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="col-md-6 testimonials">
            <div class="test-inner">
                <div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
                    <div class="wmuSliderWrapper">
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c1.png" alt=" " class="img-responsive" />
                                <p>Nam elementum magna id nibh pretium suscipit varius tortor. Phasellus in lorem sed massa consectetur fermentum. Praesent pellentesque sapien euismod.</p>
                                <h4># Andrew</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c2.png" alt=" " class="img-responsive" />
                                <p>Morbi semper, risus dignissim sagittis iaculis, diam est ornare neque, accumsan risus tortor at est. Vivamus auctor quis lacus sed interdum celerisque.</p>
                                <h4># Lucy</h4>
                            </div>
                        </article>
                        <article style="position: absolute; width: 100%; opacity: 0;">
                            <div class="banner-wrap">
                                <img src="images/c3.png" alt=" " class="img-responsive" />
                                <p>Fusce non cursus quam, in hendrerit sem. Nam nunc dui, venenatis vitae porta sed, sagittis id nisl. Pellentesque celerisque  eget ullamcorper vehicula. </p>
                                <h4># Martina</h4>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
        <h3>Top Brands</h3>
        <div class="sliderfig">
            <ul id="flexiselDemo1">
                <li>
                    <img src="images/4.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/5.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/6.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/7.png" alt=" " class="img-responsive" />
                </li>
                <li>
                    <img src="images/46.jpg" alt=" " class="img-responsive" />
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- //top-brands -->