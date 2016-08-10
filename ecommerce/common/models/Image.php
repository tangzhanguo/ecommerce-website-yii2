<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $PRODUCTID
 * @property integer $IMAGEID
 * @property string $CONTENT
 * @property string $FILENAME
 * @property string $FILEPATH
 *
 * @property Gallery[] $galleries
 * @property Product $pRODUCT
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['PRODUCTID', 'FILENAME', 'FILEPATH'], 'required'],
            [['PRODUCTID'], 'integer'],
            [['CONTENT'], 'string'],
            [['FILENAME'], 'string', 'max' => 50],
            [['FILEPATH'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'PRODUCTID' => 'Productid',
            'IMAGEID' => 'Imageid',
            'CONTENT' => 'Content',
            'FILENAME' => 'Filename',
            'FILEPATH' => 'Filepath',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGalleries()
    {
        return $this->hasMany(Gallery::className(), ['IMAGEID' => 'IMAGEID']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPRODUCT()
    {
        return $this->hasOne(Product::className(), ['PRODUCTID' => 'PRODUCTID']);
    }
}
