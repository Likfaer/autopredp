<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "engeneer".
 *
 * @property int $idEngener
 * @property string|null $nameengeneer
 * @property string|null $birthdayengeneer
 * @property string|null $datestartengeneer
 * @property int|null $expengeneer
 * @property string|null $engineerstatus
 * @property int $plot_idplot
 *
 * @property Plot $plotIdplot
 */
class Engeneer extends \yii\db\ActiveRecord
{
	public $type;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'engeneer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdayengeneer', 'datestartengeneer', 'type'], 'safe'],
            [['expengeneer', 'plot_idplot'], 'integer'],
            [['plot_idplot'], 'required'],
            [['nameengeneer', 'engineerstatus'], 'string', 'max' => 45],
            [['plot_idplot'], 'exist', 'skipOnError' => true, 'targetClass' => Plot::className(), 'targetAttribute' => ['plot_idplot' => 'idplot']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idEngener' => 'ID',
            'nameengeneer' => 'ФИО',
            'birthdayengeneer' => 'Дата рождения',
            'datestartengeneer' => 'Дата устройства',
            'expengeneer' => 'Опыт',
            'engineerstatus' => 'Специальность',
            'plot_idplot' => 'ID участка',
        ];
    }

    /**
     * Gets query for [[PlotIdplot]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlotIdplot()
    {
        return $this->hasOne(Plot::className(), ['idplot' => 'plot_idplot']);
    }
}
