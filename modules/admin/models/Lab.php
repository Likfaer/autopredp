<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property int $idlab
 * @property string|null $namelab
 * @property string|null $infolab
 *
 * @property Equipment[] $equipments
 * @property Scientist[] $scientists
 * @property Work[] $works
 */
class Lab extends \yii\db\ActiveRecord
{
	public $idlab;
	public $idcat;
	public $idwork;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['idlab','idcat','idwork'], 'safe'],
            [['namelab', 'infolab'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idlab' => 'ID',
            'namelab' => 'Наименование',
            'infolab' => 'Информация',
        ];
    }

    /**
     * Gets query for [[Equipments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEquipments()
    {
        return $this->hasMany(Equipment::className(), ['lab_idlab' => 'idlab']);
    }

    /**
     * Gets query for [[Scientists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScientists()
    {
        return $this->hasMany(Scientist::className(), ['lab_idlab' => 'idlab']);
    }

    /**
     * Gets query for [[Works]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['lab_idlab' => 'idlab']);
    }
}
