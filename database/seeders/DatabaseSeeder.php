<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        foreach(range(1, 3) as $i) {
            \App\Models\Division::create([
                'name' => "Division {$i}",
            ]);
        }

        \App\Models\Subdivision::create([
            'division_id' => 3,
            'name' => "Subdivision 1",
        ]);

        \App\Models\Subdivision::create([
            'division_id' => 2,
            'name' => "Subdivision 2",
        ]);

        \App\Models\Subdivision::create([
            'division_id' => 2,
            'name' => "Subdivision 3",
        ]);

        \App\Models\Subdivision::create([
            'division_id' => 2,
            'name' => "Subdivision 4",
        ]);

        \App\Models\User::create([
            'name' => 'User 1',
            'email' => 'user1@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 1,
        ]);

        \App\Models\User::create([
            'name' => 'User 2',
            'email' => 'user2@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 2,
        ]);

        \App\Models\User::create([
            'name' => 'User 3',
            'email' => 'user3@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 2,
            'subdivision_id' => 2
        ]);

        \App\Models\User::create([
            'name' => 'User 4',
            'email' => 'user4@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 2,
            'subdivision_id' => 3
        ]);

        \App\Models\User::create([
            'name' => 'User 5',
            'email' => 'user5@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 2,
            'subdivision_id' => 4
        ]);

        \App\Models\User::create([
            'name' => 'User 6',
            'email' => 'user6@example.com',
            'password' => bcrypt('qwerty'),
            'division_id' => 3,
            'subdivision_id' => 1
        ]);
    }
}
