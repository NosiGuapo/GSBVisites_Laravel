<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Medicament
 *
 * @property int $id
 * @property string $nomCommercial
 * @property string $idFamille
 * @property string $composition
 * @property string $effets
 * @property string $contreIndications
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereComposition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereContreIndications($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereEffets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereIdFamille($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereNomCommercial($value)
 * @mixin \Eloquent
 */
class Medicament extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $keyType = 'char';
    public $timestamps = false;

    public function famille(){
        return $this->belongsTo(Famille::class);
    }

    public function offrirs(){
        return $this->hasMany(Offrir::class);
    }
}
