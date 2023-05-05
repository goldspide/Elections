<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


/**
 * Class Region
 *
 * @property int $id
 * @property string $label
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|Participant[] $participants
 *
 * @package App\Models
 */
class Region extends Model
{
    use HasFactory;
	protected $table = 'regions';

	protected $fillable = [
		'label'
	];

	public function participants()
	{
		return $this->hasMany(Participant::class, 'id_region');
	}


}
