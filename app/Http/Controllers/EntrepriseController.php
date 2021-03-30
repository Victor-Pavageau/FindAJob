<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Entreprise;
use Illuminate\Http\Request;

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
        switch ($request->input('action')) {
            
            case 'add':

                $infos_entreprise = [
                    $nom_entreprise = request('nom_entreprise'),
                    $domaine_entreprise = request('domaine_entreprise'),
                    $mail_entreprise = request('mail_entreprise'),
                    $nombre_stagiaire_entreprise = request('nombre_stagiaire_entreprise'),
                    $confiance_entreprise = request('confiance_entreprise'),
                    $zipcode_entreprise = request('zipcode_entreprise'),
                    $pays_entreprise = request('pays_entreprise'),
                    $adresse_entreprise = request('adresse_entreprise'),
                    
                    Entreprise::create($request->all())
                ];

                echo 'Entreprise ajoutée';
                echo "<script> history.go(-1); </script>";
                break;
    
            case 'update':
                dd("ca marche pour l'update");
                break;
    
            case 'note':
                dd("ca marche pour le note");
                break;

            case 'delete':
                dd("ca marche pour le delete");
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