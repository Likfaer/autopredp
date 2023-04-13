<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "header".
 *
 * @property int $idheader
 * @property string|null $nameheader
 * @property string|null $birthdayheader
 * @property string|null $datestartheader
 * @property int|null $expheader
 * @property int $workshop_idworkshop
 *
 * @property Workshop $workshopIdworkshop
 */
class Header extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'header';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['birthdayheader', 'datestartheader'], 'safe'],
            [['expheader', 'workshop_idworkshop'], 'integer'],
            [['workshop_idworkshop'], 'required'],
            [['nameheader'], 'string', 'max' => 45],
            [['workshop_idworkshop'], 'exist', 'skipOnError' => true, 'targetClass' => Workshop::className(), 'targetAttribute' => ['workshop_idworkshop' => 'idworkshop']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idheader' => 'ID',
            'nameheader' => 'ФИО',
            'birthdayheader' => 'Дата рождения',
            'datestartheader' => 'Дата устройства',
            'expheader' => 'Опыт',
            'workshop_idworkshop' => 'ID цеха',
        ];
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
