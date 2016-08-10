<?php

namespace common\models;

use Yii;
use common\models\Image;
use common\models\Categories;
use common\models\Status;

/**
 * This is the model class for table "product".
 *
 * @property integer $PRODUCTID
 * @property integer $CATEGORYID
 * @property integer $CREATEBY
 * @property string $CREATEDATE
 * @property integer $PUBLISHBY
 * @property string $PUBLISHDATE
 * @property integer $STATUS
 * @property string $TITLE
 * @property string $PRICE
 * @property integer $DISCOUNT
 * @property string $STOCK
 * @property string $FULLDESCRIPTION
 * @property string $TABLEDEFINITION
 * @property string $METATITLE
 * @property string $METADESCRIPTION
 * @property string $METAKEYWORDS
 *
 * @property Gallery[] $galleries
 * @property Identifiervalue[] $identifiervalues
 * @property Image[] $images
 * @property Category $category
 * @property Status $status
 * @property Productpromo[] $productpromos
 * @property Review[] $reviews
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CATEGORYID', 'CREATEBY', 'PUBLISHBY', 'TITLE', 'PRICE', 'FULLDESCRIPTION'], 'required'],
            [['CATEGORYID', 'CREATEBY', 'PUBLISHBY', 'STATUS', 'STOCK'], 'integer'],
            ['DISCOUNT', 'double'],
            [['CREATEDATE', 'PUBLISHDATE'], 'safe'],
            [['FULLDESCRIPTION', 'TABLEDEFINITION', 'METAKEYWORDS'], 'string'],
            [['TITLE', 'PRICE'], 'string', 'max' => 50],
            [['METATITLE'], 'string', 'max' => 100],
            [['METADESCRIPTION'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRODUCTID' => 'Productid',
            'CATEGORYID' => 'Categoryid',
            'CREATEBY' => 'Createby',
            'CREATEDATE' => 'Createdate',
            'PUBLISHBY' => 'Publishby',
            'PUBLISHDATE' => 'Publishdate',
            'STATUS' => 'Status',
            'TITLE' => 'Title',
            'PRICE' => 'Price',
            'DISCOUNT' => 'Discount',
            'STOCK' => 'Stock',
            'FULLDESCRIPTION' => 'Full Description',
            'TABLEDEFINITION' => 'Short Description',
            'METATITLE' => 'Meta Title',
            'METADESCRIPTION' => 'Meta Description',
            'METAKEYWORDS' => 'Meta Keywords',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalleries()
    {
        return $this->hasMany(Gallery::className(), ['PRODUCTID' => 'PRODUCTID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdentifiervalues()
    {
        return $this->hasMany(Identifiervalue::className(), ['PRODUCTID' => 'PRODUCTID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['PRODUCTID' => 'PRODUCTID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['ID' => 'CATEGORYID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['ID' => 'STATUS']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProductPromos()
    {
        return $this->hasMany(Productpromo::className(), ['PRODUCTID' => 'PRODUCTID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Review::className(), ['PRODUCTID' => 'PRODUCTID']);
    }
}
