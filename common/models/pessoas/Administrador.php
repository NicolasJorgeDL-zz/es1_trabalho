<?php

namespace common\models\pessoas;

use common\models\Pessoa;

class Administrador extends Pessoa
{
    public $codAdministrador;

    public function rules()
    {
        return [
            [['codAdministrador'], 'required'],
        ];
    }


}