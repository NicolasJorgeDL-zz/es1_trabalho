<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Fone extends Model
{
    public $id;
    public $numero;
    public $DDD;
    public $DDI;

    public function rules()
    {
        return [
            [['id', 'numero'], 'required'],
        ];
    }

}