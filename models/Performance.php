<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "performance".
 *
 * @property integer $id
 * @property string $artist
 * @property string $place
 * @property string $date
 */
class Performance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'performance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist', 'place', 'date'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artist' => 'Artist',
            'place' => 'Place',
            'date' => 'Date',
        ];
    }
}
