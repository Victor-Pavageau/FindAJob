<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre_de_stage extends Model
{
    use HasFactory;
    protected $table = "offre_de_stage";
    protected $fillable = ['intitule','duree_du_stage','base_de_remuneration','date_du_stage','nombre_de_places','id_entreprise'];
}
