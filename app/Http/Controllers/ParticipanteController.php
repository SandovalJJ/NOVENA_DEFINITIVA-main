<?php

namespace App\Http\Controllers;

use App\Models\Participante;
use App\Models\Pista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParticipanteController extends Controller
{
    public function seleccionarGanador()
{
    $ganador = null;

    DB::transaction(function () use (&$ganador) {
        $ganador = Participante::where('estado', 0)->inRandomOrder()->first();

        if ($ganador) {
            $ganador->estado = 1;
            $ganador->save();
        }
    });

    if ($ganador) {
        // Cargar las pistas del ganador
        $pistas = Pista::where('fk_cedula', $ganador->cedula)->get();

        // Redirigir a la página de la ruleta con las pistas del ganador
        return redirect()->route('mostrar.ruleta', ['participante' => $ganador]);
    } else {
        // Manejar el caso en que no hay participantes disponibles
        return back()->with('error', 'No hay participantes disponibles.');
    }
}


}
