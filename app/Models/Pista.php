<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pista extends Model
{
    use HasFactory;

    protected $fillable = [
        'fk_cedula',
        'titulo',
        'pista',
        'estado',
    ];

    public function participante()
    {
        return $this->belongsTo(Participante::class, 'cedula', 'fk_cedula');
    }
}
