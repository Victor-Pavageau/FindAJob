<?php

namespace App\Http\Controllers;

use App\Models\cr;
use App\Models\Wishlist;
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

        echo("yo");
        $wishlist = new Wishlist;
        $wishlist->id_utilisateur_cookie=$request->id_utilisateur_cookie;
        $wishlist->id_offre_de_stage=$request->id_offre_de_stage;
        
        
        switch ($request->input('action')) {
            
            case 'postuler':
                echo 'Vous avez postulé à cette offre de stage';
                echo "<script> history.go(-1); </script>";
                break;

            case 'wish':

                $request->validate([
                    'id_utilisateur_cookie'=> 'required',
                    'id_offre_de_stage'=> 'required',
                ]);
                
                $query=$wishlist->save();

                echo 'Offre de stage ajoutée à la wishlist';
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