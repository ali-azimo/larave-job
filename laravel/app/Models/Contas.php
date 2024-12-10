<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contas extends Model
{
    //Indicar o nome da tabela
    protected $table = 'Contas';

    //Indicar quais colunas podem ser cadastradas
    protected $fillable = ['nome', 'valor', 'vencimento'];

}
