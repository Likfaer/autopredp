<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "plot".
 *
 * @property int $idplot
 * @property string|null $nameplot
 * @property string $infoplot
 * @property int $workshop_idworkshop
 *
 * @property Brigade[] $brigades
 * @property Engeneer[] $engeneers
 * @property Workshop $workshopIdworkshop
 */
class Plot extends \yii\db\ActiveRecord
{
	public $plot;
	public $workshop;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['plot','workshop'], 'safe'],
            [['infoplot', 'workshop_idworkshop',], 'required'],
            [['workshop_idworkshop'], 'integer'],
            [['nameplot', 'infoplot'], 'string', 'max' => 45],
            [['workshop_idworkshop'], 'exist', 'skipOnError' => true, 'targetClass' => Workshop::className(), 'targetAttribute' => ['workshop_idworkshop' => 'idworkshop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idplot' => 'ID участка',
            'nameplot' => 'Наименование',
            'infoplot' => 'Информация',
            'workshop_idworkshop' => 'ID цеха',
        ];
    }

    /**
     * Gets query for [[Brigades]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrigades()
    {
        return $this->hasMany(Brigade::className(), ['plot_idplot' => 'idplot']);
    }

    /**
     * Gets query for [[Engeneers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEngeneer()
    {
        return $this->hasOne(Engeneer::className(), ['plot_idplot' => 'idplot']);
    }

    /**
     * Gets query for [[WorkshopIdworkshop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorkshopIdworkshop()
    {
        return $this->hasOne(Workshop::className(), ['idworkshop' => 'workshop_idworkshop']);
    }
}
