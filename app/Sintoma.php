<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sintoma extends Model
{
    //
    public function personas() {
        return $this->belongsToMany('App\Persona');
    }
}
