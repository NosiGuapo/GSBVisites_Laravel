<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Medicament;
use App\Models\Offrir;
use App\Models\Rapport;
use Doctrine\DBAL\Driver\PDO\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VisitesController extends Controller
{
    public function display(){
        $type = 'v';
        $query = request('rapport-query');
        if (request('rapport-query')){
            if ($query == ""){
                return back()
                    ->withErrors(['empty' => 'Veuillez remplir le champ avant l\'envoi du formulaire.']);
            } else {
                $visites = Rapport::where('visiteur_id', auth()->user()->id)
                    ->where('date', '=', "$query")
                    ->get();
            }
        } else {
            $visites = Rapport::where('visiteur_id', auth()->user()->id)
                ->orderBy('date', 'DESC')
                ->get();
        }
        return view('visites')->with(compact('visites', 'type'));
    }

    public function create(){
        $medicaments = Medicament::orderBy('nomCommercial')->get();
        $utilisateurRapports = Rapport::where('visiteur_id', auth()->user()->id)->get();

        $mPluck = $utilisateurRapports->pluck('medecin_id')->toArray();
        $medecins = Medecin::orderBy('nom')
            ->whereIn('id', $mPluck)
            ->get();

        return view('createVisite', compact(['medecins', 'medicaments']));
//        return view('createVisite')->with(compact('medecins', 'medicaments'));
    }

    public function store(Request $request){
        $inputs = $request->input();
        $leMedecin = Medecin::find($inputs['doctor']);
        $rules = [
            'motive' => ['required', 'max:100', 'min:2'],
            'balance-sheet' => ['required', 'max:100', 'min:2'],
            'doctor' => ['required', "unique:medecins,id,$leMedecin->id"],
            'date' => ['required', 'date', 'max:10'],
            'drug' => ['array'],
            'drug.*' => ['required', 'string'],
            'amount' => ['array'],
            'amount.*' => ['required', 'integer']
//          preg_match('/amount-/', (string)$request->keys()) => ['required', 'max:3'],
        ];

//        $offrirAmount = 0;
//        foreach ($inputs as $k => $v){
//            if(preg_match('/amount-/', $k)){
//                $offrirAmount += 1;
//            }
//        }
//        for($i = 1; $i <= $offrirAmount; $i++){
//            $rules["drug-".$i] = ['required', 'alpha_num', 'max:15', 'min:2'];
//            $rules["amount-".$i] = ['required', 'alpha_num', 'max:15', 'min:2'];
//        }

        $validation = Validator::make($request->input(), $rules);

        /* On vérifie que la requête est valide et que deux médicaments identiques ne soit pas sélectionnés */

        if (!$validation->fails()){
            if (empty($inputs['drug']) || count($inputs['drug']) == count(array_unique($inputs['drug']))){
                try{
                    $rapport = new Rapport;
                    $rapport->motif = $inputs['motive'];
                    $rapport->date = $inputs['date'];
                    $rapport->bilan = $inputs['balance-sheet'];
                    $rapport->visiteur_id = auth()->user()->id;
                    $rapport->medecin_id = $inputs['doctor'];
                    /* On sauvegarde ici pour pouvoir récupérer la clef primaire par la suite */
                    $rapport->save();

                    if (!empty($inputs['drug'])){
                        foreach ($request->input('drug') as $k => $v){
                            $offrir = new Offrir;
                            $offrir->rapport_id = $rapport->id;
                            $offrir->medicament_id = $v;
                            /* Récupérer la quantité ayant une clef correspondante */
                            $offrir->quantite = $request->input('amount')[$k];
                            $offrir->save();
                        }
                    }

                } catch (Exception $error){
                    return redirect('visites/')->with('event_fail', 'Une erreur est survenue lors de la création du rapport.');
                }
                return redirect('visites/')->with('event_success', 'Le rapport a été enregistré avec succès.');
            } else {
                return back()->with('event_fail', 'Merci de ne pas mettre plusieurs fois le même médicament.');
            }
        } else {
            return back()->withInput()->withErrors($validation);
        }
    }

    public function c_edit($id){
        $rapport = Rapport::find($id);
        return view('editRapport')
            ->with('leRapport', $rapport);
    }

    public function edit(Request $request, $id){
        $inputs = $request->input();
        $leRapport = Rapport::find($id);
        $request->validate([
            'motive' => ['required', 'max:100', 'min:2'],
            'balance-sheet' => ['required', 'max:100', 'min:2'],
        ]);
        if ($inputs['motive'] !== $leRapport->motif){
            $leRapport->motif = $inputs['motive'];
        }
        if ($inputs['balance-sheet'] !== $leRapport->bilan){
            $leRapport->bilan = $inputs['balance-sheet'];
        }
        $leRapport->save();
        return redirect('visites')->with('event_success', "Le rapport a été modifié avec succès.");
    }
}
