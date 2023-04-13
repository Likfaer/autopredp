<?php

namespace app\models;
use yii\base\Model;

class EntryForm extends Model {
  public $name;
  public $email;
  public $age;
  public $date;
  public $kitchen;
  public $ch;
  public $comment;
  public function NameErr( $name ) {
    if ( ( [
        [ 'name' ], 'lenght'
      ] < 5 )or( [
        [ 'name' ], 'lenght'
      ] > 30 ) ) {} else {
      $this->addError( $name, 'От 5 до 30 символов' );
    }
  }
  public function DateErr( $date ) {
    if ( (date('Y-m-d', strtotime($this->$date)) > '2022-01-01') and(date('Y-m-d', strtotime($this->$date)) < '2050-01-01')) { }
	  else {
      $this->addError( $date, 'Дата должна быть от 2022 до 2050 года ' );
    }
  }
  public function rules() {

    return [
      [ 'name', 'NameErr'],
      [ 'date', 'DateErr'],
      [ 'email', 'email' ],
      'age' => [
        [ 'age' ], 'integer', 'min' => 18, 'max' => 100,
      ],
      'comment' => [
        [ 'comment' ], 'trim'
      ],
      [
        [ 'name','email', 'age', 'date', 'kitchen' ], 'required' , 'message' => "Поле должно быть заполнено!"
      ],


    ];
  }
}