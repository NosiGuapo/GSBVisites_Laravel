<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


/**
 * App\Models\Visiteur
 *
 * @property string $id
 * @property string $nom
 * @property string $prenom
 * @property string $login
 * @property string $password
 * @property string|null $adresse
 * @property string|null $cp
 * @property string|null $ville
 * @property string|null $dateEmbauche
 * @property int $timespan
 * @property string|null $ticket
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereCp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereDateEmbauche($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereTicket($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereTimespan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Visiteur whereVille($value)
 * @mixin \Eloquent
 */
class Visiteur extends Model
{
    use HasFactory;

    public $incrementing = false; /* Laravel convertit l'id en Int par défaut */
    protected $keyType = 'char';
    public $timestamps = false;

    protected $guarded = [
        'timespan',
        'ticket'
    ];

    public function rapports(){
        return $this->hasMany(Rapport::class);
    }
}
