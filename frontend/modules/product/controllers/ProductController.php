<?php

namespace frontend\modules\product\controllers;

use yii\web\Controller;
use frontend\modules\product\models\Brand;
use frontend\modules\product\models\Categories;
use frontend\modules\product\models\Reviews;
use common\models\Product;
use Yii;
use yii\data\Pagination;

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
        $products = Product::find()->with(['brand',  'cat']);
        $categ = Categories::find()->asArray()->all();
        $brand = Brand::find()->asArray()->all();
        $s = Yii::$app->request->get('s');
        if (!empty($s)){
            $products =  $products->where(['LIKE', 'title', $s]);
        }
        $products = $products->asArray()->all();
//        print_r($products);die;

        return $this->render('index', ['prods' => $products, 'categ' => $categ, 'brand' => $brand,]);


    }

//    public function  actionCat($id){
//        $prods = Product::find()->where(['cat-id' => $id])->asArray()->all();
//        $this->renderPartial()
//    }
}
