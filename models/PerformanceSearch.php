<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Performance;

/**
 * PerformanceSearch represents the model behind the search form of `app\models\Performance`.
 */
class PerformanceSearch extends Performance
{
    public $artist;
    public $place;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'artist_id', 'place_id'], 'integer'],
            [['artist', 'place'], 'string'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Performance::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->joinWith('artist');
        $dataProvider->sort->attributes['artist'] = [
            'asc' => ['artist.artist' => SORT_ASC],
            'desc' => ['artist.artist' => SORT_DESC],
        ];

        $query->joinWith('concert');
        $dataProvider->sort->attributes['place'] = [
            'asc' => ['concert.place' => SORT_ASC],
            'desc' => ['concert.place' => SORT_DESC],
        ];

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date' => $this->date,
            'artist_id' => $this->artist_id,
            'place_id' => $this->place_id,
        ]);

        $query->andFilterWhere(['like', 'artist.artist', $this->artist])
            ->andFilterWhere(['like', 'concert.place', $this->place])
            ->andFilterWhere(['like', 'date', $this->date]);

        return $dataProvider;
    }
}
