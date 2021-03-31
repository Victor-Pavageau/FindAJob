<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\cr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $candidature = new Candidature;
        $candidature->Statut = 0;
        $candidature->id_offre_de_stage = DB::table('offre_de_stage')->where('intitule', $request->intitule)->value('id');
        $candidature->id_utilisateur = DB::table('utilisateur')->where('Nom', $request->Nom)->value('id');

        switch ($request->input('action')) {

            case 'add':
                
                $request->validate([
                    'Nom'=> 'required',
                    'intitule'=> 'required'
                ]);
                
                $query = $candidature->save();
                
                echo 'Candidature ajoutée';
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