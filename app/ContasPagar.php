<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContasPagar extends Model
{
    //definir para o Laravel qual tabela do banco corresponde a classe criada acima
    protected $table = 'contas_pagar';
}
