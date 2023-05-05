<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bulletin>
 */
class BulletinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'label' => $this->faker->name(),
            'couleur' => Str::random(10),
            'photo' => $this->faker->image(storage_path('images'),300,300)
        ];
    }
}
