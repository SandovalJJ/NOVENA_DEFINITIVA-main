<?php

use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PistaController;
use App\Models\Participante;

Route::get('/', function () {
    return view('login');
});
Route::get('/select_participante', function () {
    return view('select_participante');
});



Route::post('/',[userController::class, 'login2'])->name('iniciar');
Route::post('/logout',[UserController::class, 'logout'])->name('cerrar');

Route::get('/hash-password', function () {
    $password = 'admin';
    $hashedPassword = Hash::make($password);

    return $hashedPassword;
});

Route::POST('/seleccionar-ganador', [ParticipanteController::class, 'seleccionarGanador'])->name('seleccionar.ganador');

//RUTA PARA GENERAR LAS PISTAS, CUIDADO NO EJECUTAR MAS DE UNA VEZ!!
Route::get('/generate-pistas', [PistaController::class, 'generatePistasForAllParticipantes']);

//RUTA PARA OBTENER LA RULETA DEL GANADOR
Route::get('/ruleta/{participante}', [PistaController::class, 'mostrarRuleta'])->name('mostrar.ruleta');

//RUTA PARA OBTENER LAS PISTAS DEL GANADOR
Route::get('/pista-aleatoria/{cedula}', [PistaController::class, 'obtenerPistaAleatoria']);

Route::get('/obtener-pistas/{cedula}', [PistaController::class, 'obtenerPistasGeneradas']);

Route::post('/ruta-para-verificar-cedula', [PistaController::class, 'verificarCedula']);

Route::get('/conteo-pistas-reveladas/{cedula}', [PistaController::class, 'conteoPistasReveladas']);
