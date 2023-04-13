<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "brigade".
 *
 * @property int $idbrigade
 * @property string|null $namebrigade
 * @property int $plot_idplot
 *
 * @property Plot $plotIdplot
 * @property Worker[] $workers
 * @property Work[] $works
 */
class Brigade extends \yii\db\ActiveRecord
{
	public $brigid;
	public $work;
	public $workshop;
	public $plot;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brigade';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['plot','work','brigid', 'workshop'], 'safe'],
            [['plot_idplot'], 'integer'],
            [['namebrigade'], 'string', 'max' => 45],
            [['plot_idplot'], 'exist', 'skipOnError' => true, 'targetClass' => Plot::className(), 'targetAttribute' => ['plot_idplot' => 'idplot']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idbrigade' => 'ID',
            'namebrigade' => 'Наименование',
            'plot_idplot' => 'ID участка (теперь наименование)',
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

    /**
     * Gets query for [[Workers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkers()
    {
        return $this->hasMany(Worker::className(), ['idbrigade' => 'idbrigade']);
    }

    /**
     * Gets query for [[Works]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['brigade_idbrigade' => 'idbrigade']);
    }
}
