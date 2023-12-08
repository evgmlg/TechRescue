<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tasks;

/**
 * TasksSearch represents the model behind the search form of `app\models\Tasks`.
 */
class TasksSearch extends Tasks
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'services_id', 'user_id', 'equipment_id', 'creator_id', 'worker_id', 'status'], 'integer'],
            [['comment', 'started_at', 'end_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Tasks::find();

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

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'services_id' => $this->services_id,
            'user_id' => $this->user_id,
            'equipment_id' => $this->equipment_id,
            'creator_id' => $this->creator_id,
            'worker_id' => $this->worker_id,
            'started_at' => $this->started_at,
            'end_at' => $this->end_at,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'comment', $this->comment]);

        return $dataProvider;
    }
}
