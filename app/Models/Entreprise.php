<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $table = "entreprise";
    protected $fillable = ['id','nom_entreprise','domaine_entreprise','mail_entreprise','nombre_stagiaire_entreprise','confiance_entreprise','adresse_entreprise','zipcode_entreprise','pays_entreprise']
    ;
}
