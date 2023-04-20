<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur  extends Authenticatable
//extends Model
{
    //use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'names',
        'email',
        'telephone',
        'username',
        'psw',
        'role',
        'code',
        'pin',
        'avatar',
        'statusActive'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    function getAccount(){

        return $this->hasMany('App\Models\Account');
    }
}
