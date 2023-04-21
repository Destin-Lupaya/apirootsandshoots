<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    use HasFactory;
    protected $fillable = [
        'created_users_id',
        'CodePays',
        'NomPays',
        'CodeProvince'
               
    ];
}
