<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "type".
 *
 * @property int $idtype
 * @property string|null $nametype
 * @property string|null $infotype
 *
 * @property Category[] $categories
 */
class Type extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nametype', 'infotype'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idtype' => 'ID',
            'nametype' => 'Наименование',
            'infotype' => 'Информация',
        ];
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['type_idtype' => 'idtype']);
    }
}
