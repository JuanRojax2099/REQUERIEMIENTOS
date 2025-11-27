<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignaturas';

    protected $fillable = [
        'id_programa',
        'codigo',
        'NombreAsignatura',
        'horario',
        'diaSemana',
        'semestre'
    ];

    public $timestamps = false; // tu tabla no tiene created_at ni updated_at
}
