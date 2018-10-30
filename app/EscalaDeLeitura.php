<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EscalaDeLeitura extends Model
{
    protected $table = 'escala_de_leituras';
    protected $with = ['primeiraLeitura'];
    public function getDataAttribute($date)
    {
        return Carbon::parse($date);
    }

    public function primeiraLeitura(){
        return $this->hasMany('App\FuncaoDoMembro', 'primeira_portugues_id');
    }
}
