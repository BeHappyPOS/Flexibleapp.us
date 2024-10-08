<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table("staff")->insert([
            "staff_name"=>"Anna",
            "nick_name" => "Anna",
            "phone" => "9877789876",
            "address"=>"2551 NW 5th St",
            "email"=>"anna@flexibleapp.com",
            "staff_skills"=>"1",
            "staff_status"=>"1",
            "password" => \Hash::make("abc123")
        ]);
    }
}
