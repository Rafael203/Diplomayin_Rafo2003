<?php
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
?>
<div class="container">
    <div class="col-md-4 w3ls_dresses_grid_left">
        <div class="w3ls_dresses_grid_left_grid">
            <h3>Show Products...</h3>
            <div class="w3ls_dresses_grid_left_grid_sub">
                <a href="<?= \yii\helpers\Url::to(['/show/6']);?>" style="color: #0a0a0a">6</a><br><br>
                <a href="<?= \yii\helpers\Url::to(['/show/12']);?>" style="color: #0a0a0a">12</a><br><br>
                <a href="<?= \yii\helpers\Url::to(['/show/24']);?>" style="color: #0a0a0a">24</a><br><br>
            </div>
        </div>
        <div class="w3ls_dresses_grid_left_grid">
            <h3>Categories</h3>
            <div class="w3ls_dresses_grid_left_grid_sub">
                <div class="ecommerce_dres-type">
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to(['/shop'])?>">All</a></li>
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
                        <li><a href="<?= \yii\helpers\Url::to(['/shop'])?>">All</a></li>
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
        <div class="w3ls_dresses_grid_left_grid">
            <h3>Sort</h3>
            <div class="w3ls_dresses_grid_left_grid_sub">
                <div class="ecommerce_color">
                    <ul>
                        <li><a href="<?= \yii\helpers\Url::to(['/shop'])?>">All</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/sales'])?>">Sale</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/new'])?>">New</a></li>
                        <li><a href="<?= \yii\helpers\Url::to(['/featured'])?>">Featured</a></li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="pagination">
        </div>
    </div>
    <div class="col-md-8 col-sm-8 women-dresses">
        <?php Pjax::begin(); ?>
        <div class="women-set1">
            <?php
            if(!empty($prods)){
                foreach ($prods as $item) {
                    ?>
                    <div class="col-md-4 women-grids wp1 animated wow slideInUp"  data-wow-delay=".5s">
                        <a href="<?= \yii\helpers\Url::to(['/products/'.$item['id']])?>">
                            <div class="product-img" style="height: 210px">
                                <?php
                                if(empty($item['image'])){
                                    ?>
                                    <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" alt="" style="width: 100%">
                                    <?php
                                }
                                else{
                                    ?>
                                    <img src="<?= \yii\helpers\Url::to("@web/images/".$item['image'])?>" alt="">
                                    <?php
                                }
                                ?>
                                <div class="p-mask">
                                    <form action="<?= \yii\helpers\Url::to(['/cart/add/'.$item['id']]) ?>" method="post">
                                        <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>
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
        <div class="clearfix"></div>
        <?php
        echo LinkPager::widget(['pagination' => $pagination]);
        ?>
    </div>
    <?php Pjax::end(); ?>
</div>
</div>
