<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'Persona';
    protected $primaryKey = 'nPerCodigo';
    protected $fillable = [
        'cperApellido',
        'cPerNombre',
        'cPerDireccion',
        'cPerSexo',
        'dPerFecaNac',
        'nPerEdad',
        'nPerSueldo',
        'nPerEstado',
    ];
}
