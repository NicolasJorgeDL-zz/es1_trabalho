<?php

namespace common\models\vendas;

use common\models\Venda;

class Servico extends Venda
{
    public $codServico;

    public function rules()
    {
        return [
            [['codServico'], 'required'],
        ];
    }

}