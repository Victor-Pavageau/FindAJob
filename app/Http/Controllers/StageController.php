<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

class StageController extends Controller
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
        switch ($request->input('action')) {

            case 'add':

                $infos_stage = [
                    $duree_stage = request('duree_stage'),
                    $salaire_stage = request('salaire_stage'),
                    $date_stage = request('date_stage'),
                    $places_stage = request('places_stage')
                ];

                echo 'Offre de stage ajoutée';
                echo "<script> history.go(-1); </script>";
                break;
            
            case 'search':
                dd("ca marche pour le search");
                break;
    
            case 'update':
                dd("ca marche pour l'update");
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