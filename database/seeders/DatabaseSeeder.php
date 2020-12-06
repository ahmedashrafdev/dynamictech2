<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        ProductSeeder::class,
            TextSeeder::class,
            SliderSeeder::class,
            StatSeeder::class,
            ClientsSeeder::class,
            PostSeeder::class,
            TeamSeeder::class,
            UserSeeder::class,
            TestemonialSeeder::class,
    
        ]);
        }
}
