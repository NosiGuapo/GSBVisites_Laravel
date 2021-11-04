<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Int_;

/**
 * App\Models\Famille
 *
 * @property int $id
 * @property string $libelle
 * @method static \Illuminate\Database\Eloquent\Builder|Famille newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Famille newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Famille query()
 * @method static \Illuminate\Database\Eloquent\Builder|Famille whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Famille whereLibelle($value)
 * @mixin \Eloquent
 */
class Famille extends Model
{
    use HasFactory;
    public $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;

    public function medicaments(){
        return $this->hasMany(Medicament::class);
    }
}
