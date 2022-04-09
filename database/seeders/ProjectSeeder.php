<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

use Faker\Factory as Faker;
class ProjectSeeder extends Seeder
{
   
    
    public function run()
    {
        $faker = Faker::create();
        for($i=1;$i<=5;$i++){

            $account = new Project;
            $account->name = $faker->name;
            $account->description =" Hi there this is my project";
            $account->date=$faker->date;
            $account->save(); 
    }
}
}