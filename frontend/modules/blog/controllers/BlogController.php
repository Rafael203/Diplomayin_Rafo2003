<?php

namespace frontend\modules\blog\controllers;

use common\models\Product;
use frontend\modules\blog\models\Artciles;
use frontend\modules\blog\models\Articles;
use yii\web\Controller;

/**
 * Default controller for the `blog` module
 */
class BlogController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $blog = Articles::find()->asArray()->all();


        return $this->render('index', ['blog' => $blog]);
    }

    public function actionBlog($id = 0){
        $one_blog = Articles::find()->where(['id' => $id])->asArray()->one();
        return $this->render('blog',['blog' => $one_blog]);
    }
}
