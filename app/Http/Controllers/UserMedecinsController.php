<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Rapport;
use Illuminate\Http\Request;

class UserMedecinsController extends Controller
{
    public function index(){
        if (request('medecin-query')){
            $query = request('medecin-query');
            $utilisateurRapports = Rapport::where('visiteur_id', auth()->user()->id)->get();
            $mPluck = $utilisateurRapports->pluck('medecin_id')->toArray();
            $medecins = Medecin::orderBy('nom')
                ->where('nom', 'LIKE', "$query%")
                /*          ->orWhere('prenom', 'LIKE', "%$query%")*/
                ->whereIn('id', $mPluck)
                ->get();
            if ($query == ""){
                return back()
                    ->withErrors(['empty' => 'Veuillez remplir le champ avant l\'envoi du formulaire.']);
            } else {
                return view('medecins')->with('msq', $medecins);
            }
        } else {
            return view("medecins");
        }
    }

    public function rapports($id){
        $type = 'm';
        $visites = Rapport::where('medecin_id', $id)
            ->orderBy('date', 'desc')->get();
        $leMedecin = Medecin::find($id);

        return view('visites')->with(compact('visites', 'type', 'leMedecin'));
    }

    public function create($id){
        $leMedecin = Medecin::find($id);
        return view('editMedecin')->with('medecin', $leMedecin);
    }

    public function store(Request $request, $id){
        $inputs = $request->input();
        $leMedecin = Medecin::find($id);

        $request->validate([
            'fname' => ['required', 'alpha_dash', 'max:30', 'min:2'],
            'name' => ['required', 'max:30', 'min:2'],
            'adress' => ['required', 'max:80', 'min:5'],
            'department' => ['nullable', 'integer', 'min:1'],
            /*
              - Le regex vérifie que le numéro commence bien par "0": (0)
              - Le regex contraint les valeurs à étre comprises entre 0 et 9: [0-9]
              - Le regex vérifie qu'au moins 9 valeurs suivront le "0" de départ: {9}
            */
            'phone' => ['required', "unique:medecins,tel,$leMedecin->id", 'regex:/(0)[0-9]{9}/', 'max:10'],
            /*
              - Unique: table,colonne (medecins,tel)
              - Le troisième paramètre est une valeur d'exclusion de ce critère, on exclue donc le numéro de téléphone actuel de ce médecin
             */
            'spe' => ['nullable', 'alpha', 'max:50', 'min:2']
        ]);

        $leMedecin->prenom = $inputs['fname'];
        $leMedecin->nom = $inputs['name'];
        $leMedecin->adresse = $inputs['adress'];
        if (!is_null($inputs['department'])){
            $leMedecin->departement = $inputs['department'];
        }
        $leMedecin->tel = $inputs['phone'];
        if (!is_null($inputs['spe'])){
            $leMedecin->specialitecomplementaire = $inputs['spe'];
        }

        $leMedecin->save();
        return redirect('mes-medecins')->with('event_success', "Les informations du médecin <b>'$leMedecin->prenom $leMedecin->nom'</b> ont été modifiées avec succès.");
    }
}
