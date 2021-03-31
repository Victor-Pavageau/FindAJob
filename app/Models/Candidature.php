<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table = "candidature";
    protected $fillable = ['Fiche_de_validation','Convention','id_utilisateur','id_offre_de_stage'];
}
