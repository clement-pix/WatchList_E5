<?php

use App\Http\Controllers\AuthController;

Route::get('/connexion', [AuthController::class, 'afficherFormulaireConnexion'])->name('connexion');
Route::post('/connexion', [AuthController::class, 'connexion']);
Route::post('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');

// Route protégée
Route::get('/tableau_de_bord', function () {
    return 'Bienvenue dans le tableau de bord !';
})->middleware('auth');

