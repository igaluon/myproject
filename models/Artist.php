<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artist".
 *
 * @property integer $id
 * @property string $artist
 */
class Artist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'artist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['artist'], 'required'],
            [['artist'], 'string', 'max' => 255],
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
        ];
    }
}
