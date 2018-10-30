<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FuncaoDoMembro extends Model
{
    protected $table = 'funcao_has_membros';

    protected $fillable = ['fucao_id','membros_id','qnt_exercida',];

    protected $with = ['membro'];

    public function membro(){
        return $this->belongsTo('App\Membro', 'membros_id');
    }



}
