<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Scientist;

/**
 * ScientistSearch represents the model behind the search form of `app\modules\admin\models\Scientist`.
 */
class ScientistSearch extends Scientist
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idscientist', 'expscientistscientist', 'lab_idlab'], 'integer'],
            [['namescientist', 'birthdayscientist', 'datestartscientist'], 'safe'],
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
        $query = Scientist::find();

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
            'idscientist' => $this->idscientist,
            'birthdayscientist' => $this->birthdayscientist,
            'datestartscientist' => $this->datestartscientist,
            'expscientistscientist' => $this->expscientistscientist,
            'lab_idlab' => $this->lab_idlab,
        ]);

        $query->andFilterWhere(['like', 'namescientist', $this->namescientist]);

        return $dataProvider;
    }
}
