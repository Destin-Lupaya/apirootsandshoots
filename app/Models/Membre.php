<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_users_id',
        'CodeMembre',
        'Nom',
        'PostNom',
        'Prenom',
        'Age',
        'Sexe',
        'ClassEtude',
        'NiveauEtude',
        'Numero',
        'FonctionMembre',
        'AdresseMembre',
        'mail',
       
    ];
    function getActivities(){

        return $this->hasMany('App\Models\users');
    }
}
