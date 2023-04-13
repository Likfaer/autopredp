<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Plot;

/**
 * PlotSearch represents the model behind the search form of `app\modules\admin\models\Plot`.
 */
class PlotSearch extends Plot
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idplot', 'workshop_idworkshop'], 'integer'],
            [['nameplot', 'infoplot'], 'safe'],
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
        $query = Plot::find();

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
            'idplot' => $this->idplot,
            'workshop_idworkshop' => $this->workshop_idworkshop,
        ]);

        $query->andFilterWhere(['like', 'nameplot', $this->nameplot])
            ->andFilterWhere(['like', 'infoplot', $this->infoplot]);

        return $dataProvider;
    }
}
