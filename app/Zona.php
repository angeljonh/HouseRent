<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $table = 'zonas';
    protected $fillable = ['zona', 'clave'];


    public function propiedades()
    {
        return $this->hasMany('App\Propiedad');
    }

}
