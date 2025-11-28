<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MateriasMatriculadas extends Model
{
    protected $table = 'materias_matriculadas';

    protected $fillable = [
        'id_matricula',
        'id_asignatura',
        'fecha_registro'
    ];

    public $timestamps = false;

    // RELACIÓN: una materia matriculada pertenece a una matrícula
    public function matricula()
    {
        return $this->belongsTo(Matricula::class, 'id_matricula', 'id_matricula');
    }

    // RELACIÓN: una materia matriculada pertenece a una asignatura
    public function asignatura()
    {
        return $this->belongsTo(Asignatura::class, 'id_asignatura');
    }
}
