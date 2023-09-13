<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ActionStatusSeeder::class

        ]);


        \App\Models\Complaint::factory(300)->create();
        \App\Models\Action::factory(500)->create();
        \App\Models\User::factory()->create([
        'name' => 'User',
        'email' => 'zurazuan@yahoo.com',
        'password' => bcrypt('password2')
        ]);
    }
}
