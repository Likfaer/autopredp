<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Worker;

/**
 * WorkerSearch represents the model behind the search form of `app\modules\admin\models\Worker`.
 */
class WorkerSearch extends Worker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idworker', 'expworker', 'idbrigade'], 'integer'],
            [['nameworker', 'birthdayworker', 'datestartworker', 'workerstatus'], 'safe'],
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
        $query = Worker::find();

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
            'idworker' => $this->idworker,
            'birthdayworker' => $this->birthdayworker,
            'datestartworker' => $this->datestartworker,
            'expworker' => $this->expworker,
            'idbrigade' => $this->idbrigade,
        ]);

        $query->andFilterWhere(['like', 'nameworker', $this->nameworker])
            ->andFilterWhere(['like', 'workerstatus', $this->workerstatus]);

        return $dataProvider;
    }
}
