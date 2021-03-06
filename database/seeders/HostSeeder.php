<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Host;

class HostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Host::factory()->count(5)->create();
    }
}
