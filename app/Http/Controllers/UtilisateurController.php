<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;

class UtilisateurController extends Controller
{
    function login(){
        return view("login");
    }
    
    function register(){
        return view("inscription");
    }

    function create(Request $request){
        $request->validate([
            'Nom' => 'required',
            'Prenom' => 'required',
            'E_mail' => 'required|email|unique:Utilisateur',
            'Centre' => 'required',
            'Promotion' => 'required',
            'password'=> 'required|min:4|max:256',

        ]);
        $utilisateur = new Utilisateur;
        $utilisateur->password = Hash::make($request->password);
        $utilisateur->Nom = $request->Nom;
        $utilisateur->Prenom = $request->Prenom;
        $utilisateur->Type = 0;
        $utilisateur->E_mail = $request->E_mail;
        $utilisateur->Centre = $request->Centre;
        $utilisateur->id_promotion = DB::table('promotion')->where('Nom', $request->Promotion)->value('id');
        $query = $utilisateur->save();

        if($query){
            return back()->with('success', 'Inscription reussi');
        }
        else{
            return back()->with('fail','Guillaume stagiaire');
        }
    }
}
