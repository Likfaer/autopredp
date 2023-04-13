<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property int $idwork
 * @property int|null $categorywork
 * @property string|null $namework
 * @property string|null $startcreationwork
 * @property string|null $endcreationwork
 * @property string|null $analyseend
 * @property int $brigade_idbrigade
 * @property int $lab_idlab
 *
 * @property Brigade $brigadeIdbrigade
 * @property Category $categorywork0
 * @property Lab $labIdlab
 */
class Work extends \yii\db\ActiveRecord
{
	public $id;
	public $status;
	public $category;
	public $workshop;
	public $startdate;
	public $enddate;
	public $lab;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
			[['startdate', 'enddate'], 'date', 'format' => 'php:Y.m.d'],
            [['categorywork', 'brigade_idbrigade', 'lab_idlab'], 'integer'],
            [['startcreationwork', 'endcreationwork', 'analyseend', 'workshop', 'id','category', 'lab'], 'safe'],
            [['brigade_idbrigade', 'lab_idlab'], 'required'],
            [['namework'], 'string', 'max' => 45],
            [['categorywork'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['categorywork' => 'idcategory']],
            [['brigade_idbrigade'], 'exist', 'skipOnError' => true, 'targetClass' => Brigade::className(), 'targetAttribute' => ['brigade_idbrigade' => 'idbrigade']],
            [['lab_idlab'], 'exist', 'skipOnError' => true, 'targetClass' => Lab::className(), 'targetAttribute' => ['lab_idlab' => 'idlab']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idwork' => 'ID',
            'categorywork' => 'Категория',
            'namework' => 'Наименование',
            'startcreationwork' => 'Дата начала разработки',
            'endcreationwork' => 'Дата окончания разработки',
            'analyseend' => 'Дата окончания анализа',
            'brigade_idbrigade' => 'Номер бригады',
            'lab_idlab' => 'Номер лаборатории',
        ];
    }

    /**
     * Gets query for [[BrigadeIdbrigade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrigadeIdbrigade()
    {
        return $this->hasOne(Brigade::className(), ['idbrigade' => 'brigade_idbrigade']);
    }

    /**
     * Gets query for [[Categorywork0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategorywork0()
    {
        return $this->hasOne(Category::className(), ['idcategory' => 'categorywork']);
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
