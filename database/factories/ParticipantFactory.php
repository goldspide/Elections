<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
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
            'nom'=> $this->faker->name(),
            'num_cni'=> Str::upper(Str::random(10)),
            'age'=> rand(1,20),
            // 'sexe'=> Str::upper(Str::random(1)),
            'login'=> $this->faker->name(),
            'email'=> $this->faker->email(),
            'telephone'=> rand(690000000,699999999),
            'status'=> Str::upper(Str::random(10)),
            'etat'=> rand(0,1),
            'id_region'=> rand(1,20),
            'password'=> Str::upper(Str::random(10)),
        ];
    }
}
