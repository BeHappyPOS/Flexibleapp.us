<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class storeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("Stores")->insert([
            "storename"=>"Flexible",
            "address"=>"2551 NW 5th St",
            "phone"=>"954.993.8136",
            "email"=>"david@flexibleapp.com"
        ]);
    }
}
