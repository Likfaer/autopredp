<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;
class User extends ActiveRecord implements \yii\web\IdentityInterface
{
	public static function tableName(){
		return 'user';
	}
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
	public static function generateAuthKey($myuser)
	{
		return $myuser->auth_key = Yii::$app->security->generateRandomString();
	}
    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
    }
	public function rules()
	{
		return [
			[['username'], 'required', 'message'=> 'Введите логин'],
			[['password'], 'required', 'message'=> 'Введите пароль']
		];
	}
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
	
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
		$hash = Yii::$app->getSecurity()->generatePasswordHash($password);
		return Yii::$app->security->validatePassword($password, $hash);
    }
}
