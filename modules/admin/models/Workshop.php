<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "workshop".
 *
 * @property int $idworkshop
 * @property string|null $nameworkshop
 * @property string|null $infoworkshop
 *
 * @property Header[] $headers
 * @property Plot[] $plots
 */
class Workshop extends \yii\db\ActiveRecord
{
	public $workshop;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workshop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nameworkshop', 'infoworkshop', 'workshop'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idworkshop' => 'ID',
            'nameworkshop' => 'Название цеха',
            'infoworkshop' => 'Информация',
        ];
    }

    /**
     * Gets query for [[Headers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeaders()
    {
        return $this->hasOne(Header::className(), ['workshop_idworkshop' => 'idworkshop']);
    }
	public function getCountplots()
    {
        return $this->hasMany(Plot::className(), ['workshop_idworkshop' => 'idworkshop'])->count();
    }

    /**
     * Gets query for [[Plots]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlots()
    {
        return $this->hasMany(Plot::className(), ['workshop_idworkshop' => 'idworkshop']);
    }
}
