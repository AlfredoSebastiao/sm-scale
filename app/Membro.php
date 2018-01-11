<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{

    protected $with = ['nucleo'];

    public function nucleo(){
        return $this->belongsTo('App\Nucleo', 'nucleos_id');
    }


}
