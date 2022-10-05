<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Create a role
        Role::create(['name' => 'SuperAdmin']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'teacher']);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Md Sakib',
            'username' => 'sakibbd',
            'email' => 'sakib@sakib.com',
            'thumbnail' => 'https://picsum.photos/300',
            'phone' => '0985631566',
            'password' => bcrypt('123'),
            'email_verified_at' => now(),
        ])->assignRole('SuperAdmin');

        \App\Models\Courses::factory(50)->create();
        \App\Models\Lessons::factory(100)->create();
    }
}
