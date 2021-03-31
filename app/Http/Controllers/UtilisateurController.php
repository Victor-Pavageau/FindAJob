<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\QueryException;



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
        
        try{
            $query = $utilisateur->save();
            return back()->with('success', 'Inscription réussie');
        } catch(QueryException  $ex){
            return back()->with('fail',"Erreur");
        }
        
    }

    function check(Request $request){
        $request->validate([
            'E_mail' => 'required|email',
            'password'=> 'required|min:4|max:256',
        ]);
        
        $utilisateur = Utilisateur::where('E_mail','=', $request->E_mail)->first();
        if($utilisateur){
            if(Hash::check($request->password, $utilisateur->password)){
                Cookie::queue('utilisateur',$utilisateur,86400);
                return redirect(route('home'));
            }
            else{
                return back()->with('fail','Mot de pass incorrect');
            }
        }
        else{
            return back()->with('fail',"Cette email n'a pas de compte");
        }
    }

    function logout(){
        if(Cookie::get('utilisateur')){
            return redirect('identification')->withCookie(Cookie::forget('utilisateur'));
        }
    }

    function modify(Request $request){
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
        $utilisateur->Type = $request->Type;
        $utilisateur->E_mail = $request->E_mail;
        $utilisateur->Centre = $request->Centre;
        $utilisateur->id_promotion = DB::table('promotion')->where('Nom', $request->Promotion)->value('id');

    }
}
