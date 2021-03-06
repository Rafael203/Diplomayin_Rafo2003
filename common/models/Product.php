<?php

namespace common\models;

use frontend\modules\product\models\Brand;
use frontend\modules\product\models\Categories;
use frontend\modules\product\models\Reviews;
use frontend\modules\product\models\Variants;
use Yii;
use common\models\Image;



/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property string $slug
 * @property int $cat_id
 * @property int $brand_id
 * @property double $price
 * @property double $sale_price
 * @property int $is_new
 * @property int $is_featured
 * @property int $stock
 * @property int $parent_id
 * @property string $options
 * @property string $image
 *
 * @property Cart[] $carts
 * @property Image[] $images
 * @property Brand $brand
 * @property Categories $cat
 * @property Reviews[] $reviews
 * @property Variants[] $variants
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'slug', 'cat_id', 'brand_id', 'price', 'stock'], 'required'],
            [['description', 'options'], 'string'],
            [['cat_id', 'brand_id', 'is_new', 'is_featured', 'stock', 'parent_id'], 'integer'],
            [['price', 'sale_price'], 'number'],
            [['title', 'slug', 'image'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['cat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'slug' => 'Slug',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'price' => 'Price',
            'sale_price' => 'Sale Price',
            'is_new' => 'Is New',
            'is_featured' => 'Is Featured',
            'stock' => 'Stock',
            'parent_id' => 'Parent ID',
            'options' => 'Options',
            'image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['prod_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['prod_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Categories::className(), ['id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['prod_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVariants()
    {
        return $this->hasMany(Variants::className(), ['prod_id' => 'id']);
    }
}
