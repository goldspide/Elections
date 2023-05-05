<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Election
 *
 * @property int $id
 * @property string $label
 * @property string $description
 * @property string $status
 * @property Carbon $date
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Election extends Model
{
    use HasFactory;
	protected $table = 'election';

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'label',
		'description',
		'status',
		'date'
	];
}
