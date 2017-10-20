<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 27/09/2017
 * Time: 14:52
 */

namespace app\models;

use Yii;
use yii\base\Model;

class RegistoForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}