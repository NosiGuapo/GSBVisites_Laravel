<?php

namespace App\Http\Middleware;

use App\Models\Rapport;
use Closure;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;
use Symfony\Component\HttpFoundation\Response;
use \Illuminate\Auth\Middleware\EnsureEmailIsVerified;

class VisiteurCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){
        /* Cette requête sera exécutée juste avant d'accéder au contenu du controlleur qui lui est alloué */

        /* Permet de récupérer l'id de la page (id du médecin) */
        $r = $request->route()->parameters()['medecin'];
        $verifRapports = Rapport::where('medecin_id', '=', "$r")
            ->where('visiteur_id', '=', auth()->user()->id)
            ->limit(1)
            ->get();

        /* Si la requête SQL ne retourne aucun résultat, alors le compte n'est pas lié au médecin, et n'a donc pas accès au dossier */
        if (empty($verifRapports[0])) {
            abort(Response::HTTP_FORBIDDEN); /* Erreur 403 */
        }
        //        dd($verifRapports[0]->visiteur_id);

        /* Si la condition d'accès est remplie, la requpete continue */
        return $next($request);

    }
}
