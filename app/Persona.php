<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = ['nombres','apellidos', 'sexo','telefono','fechaNacimiento'];
    public function sintomas() {
        return $this->belongsToMany('App\Sintoma');
    }
    public function enfermedads() {
        return $this->belongsToMany('App\Enfermedad');
    }
}
