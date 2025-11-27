<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $table = 'matricula';

    protected $fillable = [
        'semestre_cursado',
        'id_programa',
        'metodologia',
        'id_usuarios'
    ];

    public $timestamps = false;

    // RELACIÓN: una matrícula pertenece a un programa
    public function programa()
    {
        return $this->belongsTo(Programa::class, 'id_programa');
    }

    // RELACIÓN: una matrícula pertenece a un usuario
    public function usuario()
    {
        return $this->belongsTo(User::class, 'id_usuarios');
    }
}
