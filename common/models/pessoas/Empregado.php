<?php

namespace common\models\pessoa;

use common\models\Pessoa;

class Empregado extends Pessoa
{
    public $codEmpregado;

    public function rules()
    {
        return [
            [['codEmpregado'], 'required'],
        ];
    }

}