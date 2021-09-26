<?php

namespace common\models;

use Yii;
use yii\base\Model;

class Veiculo extends Model
{
    public $nome;
    public $placa;
    public $modelo;
    public $marca;
    public $kilometragem;

    public function rules()
    {
        return [
            [['placa', 'modelo'], 'required'],

        ];
    }


}