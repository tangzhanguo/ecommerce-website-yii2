<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property integer $ID
 * @property integer $PARENTID
 * @property string $CATEGORYNAME
 *
 * @property Identifier[] $identifiers
 * @property Product[] $products
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PARENTID', 'CATEGORYNAME'], 'required'],
            [['PARENTID'], 'integer'],
            [['CATEGORYNAME'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'PARENTID' => 'Parent Category',
            'CATEGORYNAME' => 'Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdentifiers()
    {
        return $this->hasMany(Identifier::className(), ['CATEGORYID' => 'ID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['CATEGORYID' => 'ID']);
    }
}
