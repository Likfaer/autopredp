<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Equipment;

/**
 * EquipmentSearch represents the model behind the search form of `app\modules\admin\models\Equipment`.
 */
class EquipmentSearch extends Equipment
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idequipment', 'lab_idlab'], 'integer'],
            [['nameequipment', 'infoequipment'], 'safe'],
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
        $query = Equipment::find();

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
            'idequipment' => $this->idequipment,
            'lab_idlab' => $this->lab_idlab,
        ]);

        $query->andFilterWhere(['like', 'nameequipment', $this->nameequipment])
            ->andFilterWhere(['like', 'infoequipment', $this->infoequipment]);

        return $dataProvider;
    }
}
