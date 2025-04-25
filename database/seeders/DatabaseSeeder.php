<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tags;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $tags = Tags::factory(3)->create();
        Job::factory(10)->hasAttached($tags)->create(['featured' => true, 'schedule' => 'full time', 'location' => 'onsite']);
        Job::factory(10)->hasAttached($tags)->create(['featured' => false, 'schedule' => 'part time', 'location' => 'remote']);
    }
}
