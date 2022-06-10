<?php

namespace Database\Seeders;

use App\Models\Host;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $this->call([
            ProvinceSeeder::class,
            CitySeeder::class,
            RestaurantSeeder::class,
            TourSeeder::class,
            MenuTypicalSeeder::class,
            HostSeeder::class,
            ExperienceSeeder::class,
            UserSeeder::class
        ]);
    }
}
