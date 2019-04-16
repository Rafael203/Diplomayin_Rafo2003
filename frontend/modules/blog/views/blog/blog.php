<div class="col-md-10" style="margin-left: 10%">
<h1><?= $blog['title']?></h1><br>
<h3><?= $blog['created_at']?></h3><br>
<?php
if(empty($blog['photo'])){
    ?>
    <img src="<?= \yii\helpers\Url::to('@web/images/no-image.png') ?>" alt="" style="width: 40%; margin-left: 30%">
    <?php
}
else{
    ?>
    <img src="<?= \yii\helpers\Url::to("@web/images/".$blog['photo'])?>" alt="" style="width: 40%; margin-left: 30%">
    <?php
}
?><br><br>
<span style="font-size: 17px"><?= $blog['content']?></span>
</div>
