<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class Utilisateur extends Model implements Authenticatable
{
    // Spécifier le nom de la table
    protected $table = 'WL_Utilisateur';

    // Définir la clé primaire
    protected $primaryKey = 'id_utilisateur';
    
    // Autoriser les colonnes pour l'attribution de masse
    protected $fillable = [
        'nom', 
        'prenom', 
        'pseudo', 
        'email', 
        'email_verif', 
        'motdepasse', 
        'token',
        'id_role'
    ];

    // Mapper les colonnes de timestamp
    const CREATED_AT = 'date_creation';
    const UPDATED_AT = 'date_update';
}
