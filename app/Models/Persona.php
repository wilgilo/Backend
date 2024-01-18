<?php

//Persona
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table="persona";

    //creacion tabla persona
    //comentario diferente

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono'
    ];


}
