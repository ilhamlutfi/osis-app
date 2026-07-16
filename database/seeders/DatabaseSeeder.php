<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\OsisClassSeeder;
use Database\Seeders\OsisDepartementSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'ilhamlutfi153@gmail.com',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            OsisClassSeeder::class,
            OsisDepartementSeeder::class,
        ]);
    }
}
