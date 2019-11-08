<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedads';
    protected $fillable = ['domicilio', 'numero' ,'zona' , 'cp','precio', 'area','camas', 'cuartos',
    'baños'];

    public function zona()
    {
        return $this->belongsTo('App\Zona');
    }
}
