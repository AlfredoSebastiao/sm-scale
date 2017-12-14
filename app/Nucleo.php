<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nucleo extends Model
{
    protected $fillable = [
        'descricao','grupos_de_oracao_id',
    ];

    protected $with = ['grupo_de_oracao'];

    public function grupo_de_oracao(){
        return $this->belongsTo('App\GrupoDeOracao', 'grupos_de_oracao_id');
    }
}