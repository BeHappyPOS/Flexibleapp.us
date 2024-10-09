<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use faker\factory as faker;

class staffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = factory::create();
        foreach(reach(1,20)as $index){
            \DB::table("staff")->insert([
                'name'=>$faker->name,
                'phone' =>$faker->phone,
                'address'=>$faker->address,
                'email'=>$faker->email,
                'skills'=>1,
                'status'=>1,
                'password' =>$faker->password, \Hash::make("abc123")
            
            ]);

        }
        
    }
}
