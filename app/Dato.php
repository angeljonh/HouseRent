<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $fillable = ['domicilio', 'precio', 'area','camas', 'cuartos',
    'baños', 'colonia', 'numero', 'ciudad', 'estado', 'cp'];
}
