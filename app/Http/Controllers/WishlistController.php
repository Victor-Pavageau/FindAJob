<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Offre_de_stage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
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

        $wishlist = new Offre_de_stage;
        $wishlist->intitule=$request->intitule;
        $wishlist->duree_du_stage=$request->duree_du_stage;
        $wishlist->base_de_remuneration=$request->base_de_remuneration;
        $wishlist->date_du_stage=$request->date_du_stage;
        $wishlist->nombre_de_places=$request->nombre_de_places;
        $wishlist->id_entreprise = DB::table('entreprise')->where('nom_entreprise', $request->nom_entreprise)->value("id");
        
        switch ($request->input('action')) {
            
            case 'search':

                dd($wishlist = Offre_de_stage::where('intitule', $request->intitule)
                ->orWhere('duree_du_stage', $request->duree_du_stage)
                ->orWhere('base_de_remuneration', $request->base_de_remuneration)
                ->orWhere('date_du_stage', $request->date_du_stage)
                ->orWhere('nombre_de_places', $request->nombre_de_places)
                ->orWhere('id_entreprise', $request->id_entreprise)->get());
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
