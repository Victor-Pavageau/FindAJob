<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $table = "candidature";
    protected $fillable = ['Date','Fiche_de_validation','Convention','Statut'];
}
