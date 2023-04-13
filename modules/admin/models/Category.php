<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $idcategory
 * @property string|null $namecategory
 * @property string|null $infocategory
 * @property int $type_idtype
 *
 * @property Type $typeIdtype
 * @property Work[] $works
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_idtype'], 'required'],
            [['type_idtype'], 'integer'],
            [['namecategory', 'infocategory'], 'string', 'max' => 45],
            [['type_idtype'], 'exist', 'skipOnError' => true, 'targetClass' => Type::className(), 'targetAttribute' => ['type_idtype' => 'idtype']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idcategory' => 'ID',
            'namecategory' => 'Наименование',
            'infocategory' => 'Информация',
            'type_idtype' => 'ID типа',
        ];
    }

    /**
     * Gets query for [[TypeIdtype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeIdtype()
    {
        return $this->hasOne(Type::className(), ['idtype' => 'type_idtype']);
    }

    /**
     * Gets query for [[Works]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['categorywork' => 'idcategory']);
    }
}
