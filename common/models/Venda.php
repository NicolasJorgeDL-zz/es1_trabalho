<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Venda extends Model
{
    public $nome;
    public $valor;

    public function rules()
    {
        return [
            // nome and email are both required
            [['nome', 'valor'], 'required'],
        ];
    }


}