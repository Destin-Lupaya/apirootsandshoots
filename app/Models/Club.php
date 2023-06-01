<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
       // 'created_users_id',
        'CodeClub',
        'NomClub',
        'AnneeAdhesion',
        'CodeAffiliation',
        'TypeAdhesion',
        'NombreMembres',
        'GroupeAge',
        'AdresseClub',
        'Territoire_Ville',
        'Province',
        'NomPresidentClub',
         'NomCoordinateur',
         'ProfessionCoordinateur',
         'AdresseCoordinateur',
        'Telephone',
        'mail',
       
    ];
}
