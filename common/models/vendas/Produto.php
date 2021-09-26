<?php

namespace common\models\vendas;

use common\models\Venda;

class Produto extends Venda
{
    public $codProduto;

    public function rules()
    {
        return [
            [['codProduto'], 'required'],
        ];
    }

}