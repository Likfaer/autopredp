<?php

namespace app\modules\admin;
use yii\filters\AccessControl;

/**
 * admin module definition class
 */
class Module extends \yii\base\Module {
  public function behaviors() {
      return [
        'access' =>[
            'class' => AccessControl::className(),
            'rules' =>[
              [
                'allow' => true,
                'roles' => ['@'],
                'matchCallback' => function($rule, $action){
                  return \Yii::$app->user->identity->role === 'admin';
                }
              ]
            ]
          ]
        ];
    }
  /**
   * {@inheritdoc}
   */
  public $controllerNamespace = 'app\modules\admin\controllers';

  /**
   * {@inheritdoc}
   */
  public function init() {
    parent::init();

    // custom initialization code goes here
  }
}