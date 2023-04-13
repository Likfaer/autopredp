<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Brigade;
use yii\helpers\ArrayHelper;
/**
 * BrigadeSearch represents the model behind the search form of `app\modules\admin\models\Brigade`.
 */
class BrigadeSearch extends Brigade
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idbrigade', 'plot_idplot'], 'integer'],
            [['namebrigade'], 'safe'],
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
        $query = Brigade::find();
		
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
            'idbrigade' => $this->idbrigade,
            'plot_idplot' => $this->plot_idplot,
        ]);

        $query->andFilterWhere(['like', 'namebrigade', $this->namebrigade]);

        return $dataProvider;
    }
}
