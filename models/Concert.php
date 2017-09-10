<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "concert".
 *
 * @property integer $id
 * @property string $place
 */
class Concert extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'concert';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['place'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'place' => 'Place',
        ];
    }
}
