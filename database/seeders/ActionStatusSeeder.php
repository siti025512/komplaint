<?php

namespace Database\Seeders;

use Faker\Core\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('action_statuses')->insert([
        ['name'=>'Completed','color'=>'bg-green'],
        ['name'=>'In-Progress','color'=>'bg-blue'],
        ['name'=>'Pending','color'=>'bg-warning'],
      

        ]);
        //
    }
}
