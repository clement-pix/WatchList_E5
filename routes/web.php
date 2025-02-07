<?php
<<<<<<< HEAD
use Illuminate\Validation\Rules\Password;   
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\UtilisateursController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ConnexionController;

Route::view('/', 'welcome');
Route::get('/inscription', [InscriptionController::class, 'formulaire']);
Route::post('/inscription', [InscriptionController::class, 'traitement']);

Route::get('/connexion', [ConnexionController::class, 'formulaire']);
Route::post('/connexion', [ConnexionController::class, 'traitement']);

Route::get('/utilisateur', [UtilisateursController::class, 'liste']);
=======

use App\Http\Controllers\AuthController;

Route::get('/connexion', [AuthController::class, 'afficherFormulaireConnexion'])->name('connexion');
Route::get('/connexion', [C_connexion::class, 'infoLogin'])->name('formulaire.connexion');
Route::post('/connexion', [AuthController::class, 'connexion']);
Route::post('/deconnexion', [AuthController::class, 'deconnexion'])->name('deconnexion');

// Route protégée
Route::get('/tableau_de_bord', function () {
    return 'Bienvenue dans le tableau de bord !';
})->middleware('auth');

>>>>>>> origin/main
