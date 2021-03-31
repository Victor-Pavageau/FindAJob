<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entreprise = new Entreprise;
        $entreprise->nom_entreprise=$request->nom_entreprise;
        $entreprise->domaine_entreprise=$request->domaine_entreprise;
        $entreprise->mail_entreprise=$request->mail_entreprise;
        $entreprise->nombre_stagiaire_entreprise=$request->nombre_stagiaire_entreprise;
        $entreprise->confiance_entreprise=$request->confiance_entreprise;
        $entreprise->zipcode_entreprise=$request->zipcode_entreprise;
        $entreprise->pays_entreprise=$request->pays_entreprise;
        $entreprise->adresse_entreprise=$request->adresse_entreprise;
        
            
        switch ($request->input('action')) {
            
            case 'add':

                $request->validate([
                    'nom_entreprise'=> 'required',
                    'domaine_entreprise'=> 'required',
                    'mail_entreprise'=> 'required',
                    'nombre_stagiaire_entreprise'=> 'required',
                    'confiance_entreprise'=> 'required',
                    'zipcode_entreprise'=> 'required',
                    'pays_entreprise'=> 'required',
                    'adresse_entreprise'=> 'required',
                ]);
                
                $query=$entreprise->save();

                echo 'Entreprise ajoutée';
                echo "<script> history.go(-1); </script>";
                break;
    
            case 'update':
                dd("ca marche pour l'update");
                break;
    
            case 'note':
                dd("ca marche pour le note");
                break;

            case 'search':
                $entreprise = Entreprise::where('nom_entreprise', $request->nom_entreprise)
                ->orWhere('domaine_entreprise', $request->domaine_entreprise)
                ->orWhere('mail_entreprise', $request->mail_entreprise)
                ->orWhere('nombre_stagiaire_entreprise', $request->nombre_stagiaire_entreprise)
                ->orWhere('confiance_entreprise', $request->confiance_entreprise)
                ->orWhere('zipcode_entreprise', $request->zipcode_entreprise)
                ->orWhere('pays_entreprise', $request->pays_entreprise)
                ->orWhere('adresse_entreprise', $request->adresse_entreprise)->get();

            break;

            case 'delete':
                $entreprise = Entreprise::where('nom_entreprise', $request->nom_entreprise)
                ->orWhere('domaine_entreprise', $request->domaine_entreprise)
                ->orWhere('mail_entreprise', $request->mail_entreprise)
                ->orWhere('nombre_stagiaire_entreprise', $request->nombre_stagiaire_entreprise)
                ->orWhere('confiance_entreprise', $request->confiance_entreprise)
                ->orWhere('zipcode_entreprise', $request->zipcode_entreprise)
                ->orWhere('pays_entreprise', $request->pays_entreprise)
                ->orWhere('adresse_entreprise', $request->adresse_entreprise)->first()->delete();

                echo 'Entreprise supprimée';
                echo "<script> history.go(-1); </script>";
            break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}

?>