<?php
namespace app\models;
use Yii;
use yii\base\Model;


class EntryForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            // name, email, are both required
            [['name', 'email'], 'required'],
            //Email is a valid email address
            ['email', 'email']
        ];
    }

}