<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Titres extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_titre',
        'titles',
    ];
    
    public function getTitre(){
        $titre = DB::select('select titles from titres');
        return $titre ;
    }
}
