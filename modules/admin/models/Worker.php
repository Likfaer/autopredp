<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "worker".
 *
 * @property int $idworker
 * @property string|null $nameworker
 * @property string|null $birthdayworker
 * @property string|null $datestartworker
 * @property int|null $expworker
 * @property string|null $workerstatus
 * @property int $idbrigade
 *
 * @property Brigade $idbrigade0
 */
class Worker extends \yii\db\ActiveRecord
{
	public $type;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worker';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdayworker', 'datestartworker', 'type'], 'safe'],
            [['expworker', 'idbrigade'], 'integer'],
            [['idbrigade'], 'required'],
            [['nameworker', 'workerstatus'], 'string', 'max' => 45],
            [['idbrigade'], 'exist', 'skipOnError' => true, 'targetClass' => Brigade::className(), 'targetAttribute' => ['idbrigade' => 'idbrigade']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idworker' => 'ID',
            'nameworker' => 'ФИО',
            'birthdayworker' => 'Дата рождения',
            'datestartworker' => 'Дата устройства',
            'expworker' => 'Опыт',
            'workerstatus' => 'Специальность',
            'idbrigade' => 'ID бригады',
        ];
    }

    /**
     * Gets query for [[Idbrigade0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdbrigade0()
    {
        return $this->hasOne(Brigade::className(), ['idbrigade' => 'idbrigade']);
    }
}
