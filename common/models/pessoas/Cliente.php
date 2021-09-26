<?php

namespace common\models\pessoas;

use common\models\Pessoa;

class Cliente extends Pessoa
{
    public $codCliente;

    public function rules()
    {
        return [
            [['codCliente'], 'required'],
        ];
    }



}