<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;

    protected $fillable = [
        'cedula',
        'p_nombre',
        's_nombre',
        'p_apellidio',
        's_apellido',
        'f_nacimiento',
        'agencia',
        'ciudad',
        'genero',
        'departamento',
        'telefono',
        'sumatoria',
        'estado'
    ];
    
    protected $table = 'participantes';
    protected $primaryKey = 'cedula';
    public $incrementing = false;
    protected $keyType = 'integer';
}
