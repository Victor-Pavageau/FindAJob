<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $table = "utilisateur";
    protected $fillable = ['password','Nom','Prenom','Type','Centre','CV','Lettre_de_motivation','E_mail','id_promotion'];
}
