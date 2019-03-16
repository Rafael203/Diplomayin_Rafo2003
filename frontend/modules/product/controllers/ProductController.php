<?php

namespace frontend\modules\product\controllers;

use yii\web\Controller;
use frontend\modules\product\models\Brand;
use frontend\modules\product\models\Categories;
use frontend\modules\product\models\Reviews;
use common\models\Product;

/**
 * Default controller for the `product` module
 */
class ProductController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $products = Product::find()->with(['brand',  'cat'])->asArray()->all();
        $categ = Categories::find()->asArray()->all();
        $brand = Brand::find()->asArray()->all();
        return $this->render('index', ['prods' => $products, 'categ' => $categ, 'brand' => $brand]);
    }

    public function  actionJewellery(){
//        $jewellery = Product::find()->where()
    }
}
