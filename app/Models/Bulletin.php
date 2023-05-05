<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bulletin
 *
 * @property int $id
 * @property string $label
 * @property string $couleur
 * @property string $photo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Bulletin extends Model
{
    use HasFactory;
	protected $table = 'bulletin';

	protected $fillable = [
		'label',
		'couleur',
		'photo'
	];
}
