<div class="content">
    <div class="col-md-1 cart-wthree">
        <div class="cart">
            <form action="#" method="post" class="last">
                <input type="hidden" name="cmd" value="_cart" />
                <input type="hidden" name="display" value="1" />
                <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
            </form>
        </div>
    </div>
        <div class="col-md-8 col-sm-8 women-dresses">
            <div class="women-set1">
                <?php
                if(!empty($prods)){
                foreach ($prods as $item) {
                    ?>
                    <div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
                        <a href="single.html">
                            <div class="product-img">
                                <img <?php
                                if(empty($item['image'])){
                                ?>
                                           <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" alt="">
                                <?php
                                }
                                else{
                                    ?>
                                    <img src="<?= \yii\helpers\Url::to("@web/images/".$item['image'])?>" alt="">
                                    <?php
                                }
                                ?>
                                <div class="p-mask">
                                    <form action="#" method="post">
                                        <input type="hidden" name="cmd" value="_cart"/>
                                        <input type="hidden" name="add" value="1"/>
                                        <input type="hidden" name="w3ls1_item" value="Shoes"/>
                                        <input type="hidden" name="amount" value="50.00"/>
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus"
                                                                                              aria-hidden="true"></i>
                                            Add to cart
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </a>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                        <i class="fa fa-star gray-star" aria-hidden="true"></i>
                        <h4><?= $item['title'] ?></h4>
                    <?php
                    if(!empty($item['sale_price'])){
                        ?>
                        $<span style="text-decoration: line-through"><?= $item['price'];?></span> <span style="font-size: 20px"><?= $item['sale_price'];?></span>
                         <?php
                            }else{
                        ?>
                        <span style="font-size: 20px">$ <?= $item['price'];?></span>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                }
        } ?>
            </div>
        </div>
    <div class="container">
        <div class="col-md-4 w3ls_dresses_grid_left">
            <div class="w3ls_dresses_grid_left_grid">
                <h3>Categories</h3>
                <div class="w3ls_dresses_grid_left_grid_sub">
                    <div class="ecommerce_dres-type">
                        <ul>
                            <?php
                            foreach ($categ as $cat){
                                ?>
                                <li><a href="<?= \yii\helpers\Url::to(['/shop/cat'])?>/<?= $cat['id']?>"><?= $cat['title'] ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="w3ls_dresses_grid_left_grid">
                <h3>Brand</h3>
                <div class="w3ls_dresses_grid_left_grid_sub">
                    <div class="ecommerce_color">
                        <ul>
                            <?php
                            foreach ($brand as $bra){
                                ?>
                                <li><a href="<?= \yii\helpers\Url::to(['/shop/brand'])?>/<?= $bra['id']?>"><?= $bra['title'] ?></a></li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>