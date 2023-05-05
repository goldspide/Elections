<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bulletin;
use App\Models\Election;
use App\Models\Participant;
use App\Models\Region;
use App\Models\Vote;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Region::factory(30)->create();
        Participant::factory(30)->create();
        Election::factory(30)->create();
        Bulletin::factory(30)->create();
        Vote::factory(30)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
