<?php
//echo '<pre>';
//var_dump($blog);
//die;
//?>

<div class="col-md-12">
<div class="row">
    <h2 style="margin-bottom: 30px">Blog</h2>
    <?php
    foreach ($blog as $one_blog){
    ?>
    <div class="col-md-3" style="border:  1px solid black;  margin-left:7%;margin-bottom: 20px; padding: 10px; height: 360px; overflow: hidden">
        <?php
        if(empty($one_blog['photo'])){
        ?>
            <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" alt="" style="width: 250px; margin-left: 49px">
        <?php
        }
        else{
            ?>
            <img src="<?= \yii\helpers\Url::to("@web/images/".$one_blog['photo'])?>" alt="" style="width: 350px"  >
            <?php
        }
        ?>
        <h3><?= $one_blog['title']?></h3>
        <span><?= $one_blog['created_at']?></span>
        <a  href="<?= \yii\helpers\Url::to(['/blogs/'.$one_blog['id']])?>" style="margin-left: 150px">Read more</a><br>
        <span><?= $one_blog['content']?></span>

    </div>
    <?php
    }
    ?>
</div>











    <!--    <div class="col-md-3" style="border:  1px solid black; margin-left: 10%">-->
    <!--        <img src="--><?//= \yii\helpers\Url::to('@web/images/4.png')?><!--">-->
    <!--        <h3>Title</h3>-->
    <!--        <span>created at</span><br>-->
    <!--        <span>createdsadasssaf sdg sdsg rgdg fd gfg g dfggfd fg dfg fdg  fdg fg   at</span>-->
    <!---->
    <!--    </div>-->
    <!--    <div class="col-md-3" style="border:  1px solid black; margin-left: 10%; margin-right:2.5%">-->
    <!--        <img src="--><?//= \yii\helpers\Url::to('@web/images/4.png')?><!--">-->
    <!--        <h3>Title</h3>-->
    <!--        <span>created at</span><br>-->
    <!--        <span>createdsadasssaf sdg sdsg rgdg fd gfg g dfggfd fg dfg fdg  fdg fg   at</span>-->
    <!---->
    <!--    </div>-->
    <!---->
    <!--    <div class="col-md-3" style="border:  1px solid black;  margin-left:2.5%; margin-top: 30px">-->
    <!--        <img src="--><?//= \yii\helpers\Url::to('@web/images/4.png')?><!--">-->
    <!--        <h3>Title</h3>-->
    <!--        <span>created at</span><br>-->
    <!--        <span>createdsadasssaf sdg sdsg rgdg fd gfg g dfggfd fg dfg fdg  fdg fg   at</span>-->
    <!---->
    <!--    </div>-->
    <!--    <div class="col-md-3" style="border:  1px solid black; margin-left: 10% ; margin-top: 30px">-->
    <!--        <img src="--><?//= \yii\helpers\Url::to('@web/images/4.png')?><!--">-->
    <!--        <h3>Title</h3>-->
    <!--        <span>created at</span><br>-->
    <!--        <span>createdsadasssaf sdg sdsg rgdg fd gfg g dfggfd fg dfg fdg  fdg fg   at</span>-->
    <!---->
    <!--    </div>-->
    <!--    <div class="col-md-3" style="border:  1px solid black; margin-left: 10%; margin-right:2.5%; margin-top: 30px">-->
    <!--        <img src="--><?//= \yii\helpers\Url::to('@web/images/4.png')?><!--">-->
    <!--        <h3>Title</h3>-->
    <!--        <span>created at</span><br>-->
    <!--        <span>createdsadasssaf sdg sdsg rgdg fd gfg g dfggfd fg dfg fdg  fdg fg   at</span>-->
    <!---->
    <!--    </div>-->