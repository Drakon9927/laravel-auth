<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjectController;

// Ottiene tutti i progetti
Route::get('/projects', [ProjectController::class, 'index']);

// Ottiene un singolo progetto per ID
Route::get('/projects/{id}', [ProjectController::class, 'show']);

// Endpoint per ottenere l'utente autenticato, protetto da Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

Route::post('/contacts', [LeadController::class, 'store']);
});