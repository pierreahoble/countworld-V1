<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'nombre_de_mot',
        'montant',
        'dalai',
        'langue',
        'type',
        'domaine'
    ];
}
