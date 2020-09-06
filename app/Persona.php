<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //
    public function sintomas() {
        return $this->belongsToMany('App\Sintoma');
    }
    public function enfermedads() {
        return $this->belongsToMany('App\Enfermedad');
    }
}
