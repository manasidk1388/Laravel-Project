<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AccountSeeder;
use Database\Seeders\ContactSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AccountSeeder::class
        ]);
        $this->call([
            ContactSeeder::class
        ]);
        $this->call([
            ProjectSeeder::class
        
        ]);$this->call([
            UserSeeder::class
        ]);

        \App\Models\User::factory(10)->create();
    }
}