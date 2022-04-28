<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = [
            'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'name'          => 'Palm Hotel',
            'description'   => 'Palmnya bagoss',
            'address'       => 'jalan panjaitan tamansari bondowoso',
            'price_min'     => 1000,
            'price_max'     => 5000,
            'website'       => 'https://palmhotel.com',
            'business_open' => date("h:i:s"),
            'business_close'    => date("h:i:s"),
            'food_type'         => 1,
            'restaurant_type'   => 2,
            'phone'         => "08545678912",
            'image'         => 'helloworld.png',
            'province_id'   => 6,
            'city_id'       => 1,
            'latitude'      => 51.5010967362789,
            'longitude'     => -0.09490694921556521
        ];

        DB::table('restaurants')->insert($restaurant);
    }
}
