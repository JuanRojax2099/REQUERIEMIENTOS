<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    protected $table = 'programa';

    protected $fillable = ['nombre_programa'];

    public $timestamps = false;
}
