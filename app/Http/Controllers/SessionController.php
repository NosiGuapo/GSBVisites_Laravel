<?php

namespace App\Http\Controllers;

use App\Models\Visiteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    public function create(){
        return view('login');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/')->with('event_success', 'Vous avez été déconnecté avec succès.');
    }

    public function store(){
        $attributes = request()->validate([
            'login' => ['required', 'alpha_dash', 'min:2', 'max:20'],
            'pass' => ['required', 'min:2', 'max:20']
        ]);

        /* Échec de la connexion */
        if (!Auth::attempt(['login'=>$attributes['login'], 'password'=>$attributes['pass']])){
            return back()
                ->withInput()
                ->withErrors(['login' => 'L\'identifiant ou le mot de passe spécifié est incorrect']);
        }

        /* Succès de la connexion */
        session()->regenerate(); /* Contre les attaques "Session Fixation"  */
        return redirect('/')->with('event_success', 'Connexion réussie, bienvenue <b>'.Auth::user()['prenom'].' '.Auth::user()['nom'].'</b>.')->withInput();
    }
}
