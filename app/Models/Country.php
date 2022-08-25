<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = "countries";
    protected $primaryKey = "country_id";
    use HasFactory;

    public function region(){
        //belongsTo: parametros
        //1 modelo a relacionar
        //2 La FK del modelo a relacionar, en el modelo
        //actual
        return $this->belongsTo(Region::class, 
                                'country_id' );    
}
    public function idiomas(){
        //belongsToMany
        //1 Modelo a relacionar
        //2 Tabla pivote
        //3 FK de el modelo actual en el pivote
        //4 FK  modelo a relacionar el pivote
        return $this->belongsToMany(Language::class,
                                    'country_languages',
                                    'country_id',
                                    'language_id' )
                                    ->withPivot('official');
    }
}
