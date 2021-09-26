<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Pedido extends Model
{
    public $nroPedido;
    public $data;
    public $total;
    public $OBS;

    public function rules()
    {
        return [
            [['nroPedido', 'total'], 'required'],
        ];
    }

}