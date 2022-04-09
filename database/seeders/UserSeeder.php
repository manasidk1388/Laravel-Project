<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

use Faker\Factory as Faker;
class UserSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=5;$i++){

            $account = new User;
            $account->name = $faker->name;
            $account->email = $faker->email;
            $account->password = $faker->password;
            $account->save(); 
            
    }
}
}