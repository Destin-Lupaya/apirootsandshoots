<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
    protected $fillable = [
        //'created_users_id',
        'CodeProvince',
        'NomProvince',
        'CodeVille',
        'CodeTerritoire'
        
               
    ];
}
