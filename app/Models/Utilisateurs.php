<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'sexe',
        'naissance',
        'adresse',
        'titres',
        'nationalite',
        'email',
        'password',
    ];
    
}
