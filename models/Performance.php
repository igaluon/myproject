<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "performance".
 *
 * @property int $id
 * @property int $artist_id
 * @property int $place_id
 * @property string $date
 *
 * @property Artist $artist0
 * @property Concert $concert
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
            [['artist_id', 'place_id'], 'required'],
            [['artist_id', 'place_id'], 'integer'],
            [['date'], 'date', 'format' => 'yyyy-mm-dd'],
            [['artist_id'], 'exist', 'skipOnError' => true, 'targetClass' => Artist::className(), 'targetAttribute' => ['artist_id' => 'id']],
            [['place_id'], 'exist', 'skipOnError' => true, 'targetClass' => Concert::className(), 'targetAttribute' => ['place_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'artist_id' => 'Artist',
            'place_id' => 'Concert',
            'date' => 'Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArtist()
    {
        return $this->hasOne(Artist::className(), ['id' => 'artist_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConcert()
    {
        return $this->hasOne(Concert::className(), ['id' => 'place_id']);
    }
}
