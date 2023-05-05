<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
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
            'id_participant' => rand(1,30),
            'id_election' => rand(1,30),
            'id_bulletin' => rand(1,30)
        ];
    }
}
