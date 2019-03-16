<?php

namespace frontend\modules\product\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property int $prod_id
 * @property int $user_id
 * @property string $comment
 * @property int $rate
 *
 * @property Product $prod
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prod_id', 'user_id', 'comment'], 'required'],
            [['prod_id', 'user_id', 'rate'], 'integer'],
            [['comment'], 'string'],
            [['prod_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['prod_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prod_id' => 'Prod ID',
            'user_id' => 'User ID',
            'comment' => 'Comment',
            'rate' => 'Rate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProd()
    {
        return $this->hasOne(Product::className(), ['id' => 'prod_id']);
    }
}
