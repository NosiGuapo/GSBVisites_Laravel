<?php

namespace App\Http\Middleware;

use App\Models\Rapport;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RapportCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        /* Cette requête sera exécutée juste avant d'accéder au contenu du controlleur qui lui est alloué */

        /* Permet de récupérer l'id de la page (id du médecin) */
        $r = $request->route()->parameters()['visite'];
        $verifRapports = Rapport::where('id', '=', "$r")
            ->where('visiteur_id', '=', auth()->user()->id)
            ->get();


        /* Si la requête SQL ne retourne aucun résultat, alors le compte n'est pas lié au rapport, et n'a donc pas accès au dossier */
        if (empty($verifRapports[0])) {
            abort(Response::HTTP_FORBIDDEN); /* Erreur 403 */
        }

        /* Si la condition d'accès est remplie, la requpete continue */
        return $next($request);
    }
}
