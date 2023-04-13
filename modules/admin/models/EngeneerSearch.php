<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Engeneer;

/**
 * EngeneerSearch represents the model behind the search form of `app\modules\admin\models\Engeneer`.
 */
class EngeneerSearch extends Engeneer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idEngener', 'expengeneer', 'plot_idplot'], 'integer'],
            [['nameengeneer', 'birthdayengeneer', 'datestartengeneer', 'engineerstatus'], 'safe'],
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
        $query = Engeneer::find();

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
            'idEngener' => $this->idEngener,
            'birthdayengeneer' => $this->birthdayengeneer,
            'datestartengeneer' => $this->datestartengeneer,
            'expengeneer' => $this->expengeneer,
            'plot_idplot' => $this->plot_idplot,
        ]);

        $query->andFilterWhere(['like', 'nameengeneer', $this->nameengeneer])
            ->andFilterWhere(['like', 'engineerstatus', $this->engineerstatus]);

        return $dataProvider;
    }
}
