<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PiloteController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pilote = new Utilisateur;
        $pilote->Nom=$request->Nom;
        $pilote->Prenom=$request->Prenom;
        $pilote->Centre=$request->Centre;
        $pilote->E_mail=$request->E_mail;

        switch ($request->input('action')) {
            
            case 'search':
                $pilote = Utilisateur::where('Nom', $request->Nom)
                ->orWhere('Prenom', $request->Prenom)
                ->orWhere('Centre', $request->Centre)
                ->orWhere('E_mail', $request->E_mail)->get();
                break;
    
            case 'update':
                dd("ca marche pour l'update");
                break;

            case 'delete':
                $pilote = Utilisateur::where('Nom', $request->Nom)
                ->orWhere('Prenom', $request->Prenom)
                ->orWhere('Centre', $request->Centre)
                ->orWhere('E_mail', $request->E_mail)->first();
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
