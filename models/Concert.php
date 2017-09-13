<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "concert".
 *
 * @property int $id
 * @property string $place
 *
 * @property Performance[] $performances
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
            [['place'], 'string'],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerformances()
    {
        return $this->hasMany(Performance::className(), ['concert_id' => 'id']);
    }
}
