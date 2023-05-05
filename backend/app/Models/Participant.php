<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Participant
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $nom
 * @property string $num_cni
 * @property int $age
 * @property string $sexe
 * @property string $status
 * @property int $id_region
 * @property string $login
 * @property string $password
 * @property string|null $email
 * @property string $etat
 * @property string|null $telephone
 *
 * @property Region $region
 *
 * @package App\Models
 */
class Participant extends Model
{
    use HasFactory;
	protected $table = 'participant';

	protected $casts = [
		'age' => 'int',
		'id_region' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nom',
		'num_cni',
		'age',
		'sexe',
		'status',
		'id_region',
		'login',
		'password',
		'email',
		'etat',
		'telephone'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'id_region');
	}
}
