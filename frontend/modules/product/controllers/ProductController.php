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
    public function actionIndex($cat_id = 0, $brand_id = 0,$type= "", $show_count = 0)
    {
        $model = New Reviews();
        $products = Product::find()->with(['brand',  'cat']);
        $categ = Categories::find()->asArray()->all();
        $brand = Brand::find()->asArray()->all();
        $s = Yii::$app->request->get('s');
        $prod_count = 6;
        if(!empty($type)){
            if($type == 'sales'){
                $products = $products->where(['<>','sale_price',''])->andWhere(['<>','sale_price','NULL']);
            }
            if($type == 'featured'){
                $products = $products->where(['is_featured'=> 1]);
            }
            if($type == 'new'){
                $products = $products->where(['is_new'=> 1]);
            }
        }
        if(!empty($s)){
            $products =  $products->where(['LIKE', 'title', $s]);
        }
        if(!empty($cat_id)){
            $products = $products->where(['cat_id' => $cat_id]);
        }
        if(!empty($brand_id)){
            $products = $products->where(['brand_id' => $brand_id]);
        }
        if(!empty($show_count)){
            $prod_count = $show_count;
        }
        $pagination = new Pagination([
            'defaultPageSize' => $prod_count,
            'totalCount' => $products->count()
        ]);
        $products = $products->offset($pagination->offset)->limit($pagination->limit)->asArray()->all();
        return $this->render('index', ['prods' => $products, 'categ' => $categ, 'model' => $model, 'brand' => $brand,'pagination' => $pagination]);
    }
    public function actionProduct($id = 0){
        $one_prod = Product::find()->where(['id' => $id])->with(['images'])->asArray()->one();
        return $this->render('product',['prod' => $one_prod]);
    }
}