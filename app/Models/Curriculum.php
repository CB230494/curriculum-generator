<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'curricula';

    // Los campos que se pueden llenar
    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'perfil_profesional',
        'habilidades',
        'experiencia_laboral',
        'educacion',
    ];
}
