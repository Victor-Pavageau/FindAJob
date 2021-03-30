<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre_de_stage extends Model
{
    use HasFactory;
    protected $table = "offre_de_stage";
    protected $fillable = ['duree_stage','salaire_stage','date_stage','places_stage'];
}
