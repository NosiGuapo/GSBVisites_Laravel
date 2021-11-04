<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Offrir
 *
 * @property string $idMedicament
 * @property string $idRapport
 * @property int|null $quantite
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir query()
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir whereIdMedicament($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir whereIdRapport($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Offrir whereQuantite($value)
 * @mixin \Eloquent
 */
class Offrir extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;

    public function rapport(){
        return $this->belongsTo(Rapport::class);
    }

    public function medicament(){
        return $this->belongsTo(Medicament::class);
    }
}
