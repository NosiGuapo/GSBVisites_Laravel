<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Medecin
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $adresse
 * @property string|null $tel
 * @property string|null $specialitecomplementaire
 * @property int $departement
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereDepartement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereSpecialitecomplementaire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medecin whereTel($value)
 * @mixin \Eloquent
 */
class Medecin extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function rapports(){
        return $this->hasMany(Rapport::class); /* Le médecin détient plusieurs rapports */
    }
}
