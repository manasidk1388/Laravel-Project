<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

use Faker\Factory as Faker;
class ContactSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=5;$i++){

        $account = new Contact;
        $account->name = $faker->name;
        $account->email = $faker->email;
        $account->phone = "942927";
        $account->save(); 
    }
}
}