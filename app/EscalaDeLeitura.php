<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class EscalaDeLeitura extends Model
{
    protected $table = 'escala_de_leituras';

    public function getDataAttribute($date)
    {
        return Carbon::parse($date);
    }
}
