<?php
//var_dump($image['image_src'])
//?>

<div class="clearfix"></div>
</div>
</div>
<div class="products">
    <div class="container">
        <div class="single-page">
            <div class="single-page-row" id="detail-21">
                <div class="col-md-6 single-top-left">
                    <div class="flexslider">
                        <ul class="slides">

                            <?php

                            foreach ($prod['images'] as $image) {

                                ?>
                                    <?php
                                    if (empty($image["image_src"])) { ?>
                                        <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" width="300px" class="img-responsive" alt=""><br><br><br>
                                    <?php } else {
                                        ?>
                                        <div class="thumb-image detail_images"><img
                                                    src="<?= \yii\helpers\Url::to('@web/images/' . $image["image_src"]) ?>"
                                                    data-imagezoom="true" class="img-responsive"  style="border: 1px solid #0f0f0f; width: 100%" alt=""></div><br><br><br>
                                        <?php
                                    } ?>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 single-top-right">
                    <h3 class="item_name"><?= $prod['title'] ?></h3>
                    <p>Processing Time: Item will be shipped out within 2-3 working days. </p>
                    <div class="single-rating">
                        <ul>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                            <li class="rating">20 reviews</li>
                            <li><a href="#">Add your review</a></li>
                        </ul>
                    </div>
                    <div class="single-price">
                        <ul>
                            <?php
                            if (!empty($prod['sale_price'])) {
                                ?>
                                <li style="text-decoration: line-through; font-size: 20px">$<?= $prod['price']; ?></li>
                                <li style="font-size: 40px"><?= $prod['sale_price']; ?></li>
                                <?php
                            } else {
                                ?>
                                <li style="font-size: 20px">$ <?= $prod['price']; ?></li>
                                <?php
                            }
                            ?>
                            <li><span class="w3off">10% OFF</span></li>
                            <li>Ends on: Oct,15th</li>
                            <li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
                        </ul>
                    </div>
                    <p class="single-price-text" style="color: #0f0f0f"><?= $prod['description']; ?></p>
                    <form action="#" method="post">
                        <input type="hidden" name="cmd" value="_cart"/>
                        <input type="hidden" name="add" value="1"/>
                        <input type="hidden" name="w3ls1_item" value="Handbag"/>
                        <input type="hidden" name="amount" value="540.00"/>
                        <button type="submit" class="w3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add
                            to cart
                        </button>
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div id="reviews">
<!--            <div>-->
<!--                --><?php
//                if (!empty($product['reviews'])) {
//                    ?>
<!--                    <ul>-->
<!--                        --><?php
//                        foreach ($product['reviews'] as $review) {
//                            echo '<li>' . $review['user']['username'] . ' - ' . $review['comment'] . '</li>';
//
//                        }
//                        ?>
<!--                    </ul>-->
<!--                    --><?php
//                }
//                ?>
<!--            </div>-->
<!--            --><?php
//            if (!Yii::$app->user->isGuest) {
//                $form = \yii\bootstrap\ActiveForm::begin();
//                echo $form->field($model, 'comment')->textarea();
//                echo \yii\helpers\Html::submitButton('submit');
//                \yii\bootstrap\ActiveForm::end();
//            }
//
//            ?>

        </div>

        <!-- collapse-tabs -->
        <div class="collpse tabs">
            <h3 class="w3ls-title">About this item</h3>
            <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                <?php
                if(!empty($prod['description'])) {
                    ?>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Description <span
                                            class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
                                            class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                <?= $prod['description']; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> additional information
                                <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
                                        class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> reviews (5) <span
                                        class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
                                        class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> help <span
                                        class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i
                                        class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingFour">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //collapse -->
    </div>
</div>
