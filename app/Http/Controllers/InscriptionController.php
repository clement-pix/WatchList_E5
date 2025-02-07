<?php

namespace App\Http\Controllers;

use App\Utilisateur;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class InscriptionController extends Controller
{
    public function formulaire() {
        return view("inscription");
    }

    public function traitement() {
        // Validation des données de formulaire
        request()->validate([
            'nom' => ['required', 'min:2', 'max:50'],
            'prenom' => ['required', 'min:2', 'max:50'],
            'pseudo' => ['required', 'min:2', 'unique:users,pseudo', 'regex:/^[a-zA-Z0-9_-]+$/', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email', 'max:50'],
            'email_verif' => ['required', 'email', 'same:email', 'max:50'],
            'password' => ['required', 'confirmed', Password::min(8)
                ->letters() // Exige des lettres
                ->mixedCase() // Exige des majuscules et des minuscules
                ->numbers() // Exige des chiffres
                ->symbols() // Exige des symboles
                , 'max:255'],
        ]);
        
        // Création d'un nouvel utilisateur
        $utilisateur = Utilisateur::create([
            'nom' => request('nom'),
            'prenom' => request('prenom'),
            'pseudo' => request('pseudo'),
            'email' => request('email'),
            'email_verif' => request('email_verif'),
            'password' => bcrypt(request('password')), // Hash du mot de passe
            'token' => Str::random(60), // Génération d'un token aléatoire
            'id_role' => 1,  // Rôle par défaut
        ]);
    
        // Retourner une réponse après l'inscription (Rediriger ou afficher un message de succès)
        return 'Formulaire reçu avec succès';
    }
}
