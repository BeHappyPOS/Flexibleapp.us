<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staff_skillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("staff_skills")->insert([
            ["name"=>"full-set"],
            ["name"=>"regular nails"],
            ["name"=>"nail design"]
         ]);
    }
}
