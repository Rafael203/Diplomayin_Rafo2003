<?php

namespace frontend\modules\cart\controllers;

use common\models\Cart;
use yii\web\Controller;

/**
 * Default controller for the `cart` module
 */
class CartController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex($prod_id = 0)
    {
        $cart = new Cart();



       return $this->render('index', ['model' => $cart]);
    }
}
