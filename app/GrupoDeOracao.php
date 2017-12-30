<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoDeOracao extends Model
{
    protected $fillable = [
        'designacao',
    ];

    public function nucleo(){
        return $this->hasOne('App\Nucleo', 'grupos_de_oracao_id');
    }
}
