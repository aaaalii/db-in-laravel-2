<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            StudentSeeder::class
        ]);

        // can also use this factory to insert fake data inside StudentSeeder class and then call StudentSeedder class here
        // student::factory()->count(12)->create();
        // student::factory(12)->create();

    }
}
