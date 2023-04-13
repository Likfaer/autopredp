<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Work;

/**
 * WorkSearch represents the model behind the search form of `app\modules\admin\models\Work`.
 */
class WorkSearch extends Work
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idwork', 'categorywork', 'brigade_idbrigade', 'lab_idlab'], 'integer'],
            [['namework', 'startcreationwork', 'endcreationwork', 'analyseend'], 'safe'],
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
        $query = Work::find();

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
            'idwork' => $this->idwork,
            'categorywork' => $this->categorywork,
            'startcreationwork' => $this->startcreationwork,
            'endcreationwork' => $this->endcreationwork,
            'analyseend' => $this->analyseend,
            'brigade_idbrigade' => $this->brigade_idbrigade,
            'lab_idlab' => $this->lab_idlab,
        ]);

        $query->andFilterWhere(['like', 'namework', $this->namework]);

        return $dataProvider;
    }
}
