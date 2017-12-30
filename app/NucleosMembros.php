<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NucleosMembros extends Model
{
    protected $table = 'nucleo_has_membros';

    protected $fillable = [
      'nucleos_id','membros_id'
    ];

   // protected $with =

    //
}
