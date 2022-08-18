<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class continent extends Model
{
    protected $table = "continents";
    protected $primaryKey = "continent_id";


    use HasFactory;

    //relacion 1:M con regiones
    public function regiones(){
        //hasMany:parametros
        //1 Modelo a relacional
        //FK del modelo actual en el modelo a relacionar
        return $this->hasMany( Region::class, 
                               'continent_id'  );
    }
}
