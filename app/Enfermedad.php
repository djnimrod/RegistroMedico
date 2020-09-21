<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = ['name'];

    public function personas() {
        return $this->belongsToMany('App\Persona');
    }
}
