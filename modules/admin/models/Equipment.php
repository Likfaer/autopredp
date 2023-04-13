<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "equipment".
 *
 * @property int $idequipment
 * @property string|null $nameequipment
 * @property string|null $infoequipment
 * @property int $lab_idlab
 *
 * @property Lab $labIdlab
 */
class Equipment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'equipment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lab_idlab'], 'required'],
            [['lab_idlab'], 'integer'],
            [['nameequipment', 'infoequipment'], 'string', 'max' => 45],
            [['lab_idlab'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['lab_idlab' => 'idlab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idequipment' => 'ID',
            'nameequipment' => 'Наименование',
            'infoequipment' => 'Информация',
            'lab_idlab' => 'ID лаборатории',
        ];
    }

    /**
     * Gets query for [[LabIdlab]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLabIdlab()
    {
        return $this->hasOne(Lab::className(), ['idlab' => 'lab_idlab']);
    }
}
