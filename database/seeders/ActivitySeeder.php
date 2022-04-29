<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**$activity = [
            'uuid_activity' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name'          => 'Delman',
            'description'   => 'Delman nya seru',
            'address'       => 'Alun Alun Bondowoso',
            'price_min'     => 1000,
            'price_max'     => 5000,
            'food_type'         => 1,
            'image'         => 'delman.png',
            'province_id'   => 6,
            'city_id'       => 1,
            // 'start_time'    => date("h:i:s"),
            // 'end_time'      => date("h:i:s"),
            'latitude'      => 51.5010967362789,
            'longitude'     => -0.09490694921556521
        ];

        DB::table('activitys')->insert($activity);*/
    }
}
