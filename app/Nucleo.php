<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    protected $fillable = [
        'descricao','grupos_de_oracao_id',
    ];
}
