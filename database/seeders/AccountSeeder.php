<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use App\Models\Account;

use Faker\Factory as Faker;
class AccountSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=5;$i++){
            
        $account = new Account;
        $account->user_name = $faker->name;
        $account->first_name = $faker->name;
        $account->last_name = $faker->name;
        $account->dob =$faker->date;
        $account->phone = "567";
        $account->email = $faker->email;
        $account->address= $faker->address;
        $account->hobby = ["cricket","badminton"];
        $account->gender = "female";
        $account->country = "usa";
        $account->state= "goa";
        $account->save(); 
        }

      
    
    }
}