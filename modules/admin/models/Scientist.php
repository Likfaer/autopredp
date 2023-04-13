<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "scientist".
 *
 * @property int $idscientist
 * @property string|null $namescientist
 * @property string|null $birthdayscientist
 * @property string|null $datestartscientist
 * @property int|null $expscientistscientist
 * @property int $lab_idlab
 *
 * @property Lab $labIdlab
 */
class Scientist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'scientist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdayscientist', 'datestartscientist'], 'safe'],
            [['expscientistscientist', 'lab_idlab'], 'integer'],
            [['lab_idlab'], 'required'],
            [['namescientist'], 'string', 'max' => 45],
            [['lab_idlab'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['lab_idlab' => 'idlab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idscientist' => 'ID',
            'namescientist' => 'ФИО',
            'birthdayscientist' => 'Дата рождения',
            'datestartscientist' => 'Дата устройства',
            'expscientistscientist' => 'Опыт',
            'lab_idlab' => 'Номер лаборатории',
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
