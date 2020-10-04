<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';
    protected $primaryKey = 'idAlumno';

    protected $fillable = [
        'idAlumno',
        'nombre',
        'apellidos',
        'nControl',
        'user_id'
    ];
    
}