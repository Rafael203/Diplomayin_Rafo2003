<?php
Yii::$app->language = 'en';
?>
<div class="banner-agile">
    <div class="container">
        <h2>WELCOME TO</h2>
        <h3>FASHION <span>CLUB</span></h3>
        <p>Suspendisse sed tellus id libero pretium interdum. Suspendisse potenti. Quisque consectetur elit sit amet vehicula tristique. </p>
        <a href="<?= \yii\helpers\Url::to('@web') ?>/site/about">Read More</a>
    </div>
</div>
<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/sales']);?>"><div class="bb-middle-top">
                    <h3>SALE</h3>
                    <h4>upto<span>55%</span></h4>
                </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/new'])?>"><div class="bb-middle-top">
                    <h3>New</h3>
                </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="<?= \yii\helpers\Url::to(['/featured'])?>"><div class="bb-middle-top">
                    <h3>Featured</h3>
                </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="top-products">
    <div class="container">
        <h3>Top Products</h3>
        <div class="sap_tabs">
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Men's</span></li>
                    <li class="resp-tab-item"><span>Women</span></li>
                    <li class="resp-tab-item"><span>Handbags</span></li>
                    <li class="resp-tab-item"><span>Cosmetics</span></li>
                </ul>
                <div class="clearfix"> </div>
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp1.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Formal shoes" />
                                            <input type="hidden" name="amount" value="220.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Formal shoes</h4>
                            <h5>$220.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp2.jpg" alt="" />
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
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Formal shirt</h4>
                            <h5>$190.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp3.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Blazer" />
                                            <input type="hidden" name="amount" value="160.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Blazer</h4>
                            <h5>$160.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp4.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Casual shoes" />
                                            <input type="hidden" name="amount" value="250.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Casual shoes</h4>
                            <h5>$250.00</h5>
                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp5">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/ip2.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Inner wear" />
                                                <input type="hidden" name="amount" value="50.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Inner wear</h4>
                                <h5>$50.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp6">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/shp8.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Shoes" />
                                                <input type="hidden" name="amount" value="150.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Shoes</h4>
                                <h5>$150.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp7">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/cap1.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Formal shirt" />
                                                <input type="hidden" name="amount" value="100.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Formal shirt</h4>
                                <h5>$100.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/wap3.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Watch" />
                                                <input type="hidden" name="amount" value="200.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Watch</h4>
                                <h5>$200.00</h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp5.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                            <input type="hidden" name="amount" value="220.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Casual wear</h4>
                            <h5>$220.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp6.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                            <input type="hidden" name="amount" value="190.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Casual wear</h4>
                            <h5>$190.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp7.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                            <input type="hidden" name="amount" value="160.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Casual wear</h4>
                            <h5>$160.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp8.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                            <input type="hidden" name="amount" value="250.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Casual wear</h4>
                            <h5>$250.00</h5>
                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/wp8.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$250.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/wp5.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="250.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$250.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/wp4.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="350.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$350.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/wp3.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Casual wear" />
                                                <input type="hidden" name="amount" value="200.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Casual wear</h4>
                                <h5>$200.00</h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp9.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Handbag" />
                                            <input type="hidden" name="amount" value="90.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Handbag</h4>
                            <h5>$90.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp10.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Handbag" />
                                            <input type="hidden" name="amount" value="60.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Handbag</h4>
                            <h5>$60.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp11.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Handbag" />
                                            <input type="hidden" name="amount" value="120.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Handbag</h4>
                            <h5>$120.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp12.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Handbag" />
                                            <input type="hidden" name="amount" value="70.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Handbag</h4>
                            <h5>$70.00</h5>
                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/hp9.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="290.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$290.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/hp8.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="50.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$50.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/hp7.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="70.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$70.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/hp3.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Handbag" />
                                                <input type="hidden" name="amount" value="190.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Handbag</h4>
                                <h5>$190.00</h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp13.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Eye makeup" />
                                            <input type="hidden" name="amount" value="90.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Eye makeup</h4>
                            <h5>$90.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp2">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp14.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Gold makeup" />
                                            <input type="hidden" name="amount" value="60.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Gold makeup</h4>
                            <h5>$60.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp3">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp15.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Tya Makeup kit" />
                                            <input type="hidden" name="amount" value="120.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Tya Makeup kit</h4>
                            <h5>$120.00</h5>
                        </div>
                        <div class="col-md-3 top-product-grids tp4">
                            <a href="single.html"><div class="product-img">
                                    <img src="images/tp16.jpg" alt="" />
                                    <div class="p-mask">
                                        <form action="#" method="post">
                                            <input type="hidden" name="cmd" value="_cart" />
                                            <input type="hidden" name="add" value="1" />
                                            <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                            <input type="hidden" name="amount" value="60.00" />
                                            <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                        </form>
                                    </div>
                                </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <h4>Vega Brushes</h4>
                            <h5>$60.00</h5>
                        </div>
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/cp5.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Lipstick</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/cp4.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Vega Brushes" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Eye liner</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/cp7.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                                <input type="hidden" name="amount" value="60.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Eye shades</h4>
                                <h5>$60.00</h5>
                            </div>
                            <div class="col-md-3 top-product-grids tp4">
                                <a href="single.html"><div class="product-img">
                                        <img src="images/cp8.jpg" alt="" />
                                        <div class="p-mask">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="w3ls1_item" value="Eye shades" />
                                                <input type="hidden" name="amount" value="160.00" />
                                                <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
                                            </form>
                                        </div>
                                    </div></a>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <i class="fa fa-star gray-star" aria-hidden="true"></i>
                                <h4>Eye shades</h4>
                                <h5>$160.00</h5>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
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