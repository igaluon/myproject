<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "artist".
 *
 * @property int $id
 * @property string $artist
 *
 * @property Performance[] $performances
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
            [['artist'], 'string'],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::className(), ['artist_id' => 'id']);
    }
}
