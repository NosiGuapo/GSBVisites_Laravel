<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * App\Models\Rapport
 *
 * @property int $id
 * @property string|null $date
 * @property string|null $motif
 * @property string|null $bilan
 * @property string $idVisiteur
 * @property int $idMedecin
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport query()
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereBilan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereIdMedecin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereIdVisiteur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Rapport whereMotif($value)
 * @mixin \Eloquent
 */
class Rapport extends Model
{
    use HasFactory;
    public $keyType = 'string';
    public $incrementing = true;

    public $timestamps = false;


    public function medecin(){
        return $this->belongsTo(Medecin::class); /* Le rapport détient un médecin */
    }

    public function offrirs(){
        return $this->hasMany(Offrir::class);  /* Le visiteur à pu recevoir plusieurs médicaments */
    }

    public function visiteur(){
        return $this->belongsTo(Visiteur::class);
    }
}
