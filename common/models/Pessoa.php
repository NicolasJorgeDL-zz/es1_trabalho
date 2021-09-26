<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Pessoa extends Model
{
    public $nome;
    public $email;
    public $CEP;
    public $CPF;

    public function rules()
    {
        return [
            // nome and email are both required
            [['nome', 'email'], 'required'],
            // CEP is validated by validateCEP()
            ['CEP', 'validateCEP'],
        ];
    }


}