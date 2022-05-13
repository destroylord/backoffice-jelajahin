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
            [
                'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'          => 'Bakso Gulung Cak Rusdi',
                'description'   => 'warung bakso gulung terkenal dan legendaris di Bondowoso',
                'address'       => 'jalan panjaitan tamansari bondowoso',
                'price_min'     => 15000,
                'price_max'     => 18000,
                'website'       => '-',
                'business_open' => "21:00:00",
                'business_close'    => "9:00:00",
                'food_type'         => 1,
                'restaurant_type'   => 2,
                'phone'         => "08545678912",
                'image'         => 'bakso-gulung-Cak-Rusdi-bondowoso1.jpg',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude'      => -7.739925242289209,
                'longitude'     => 113.89477947824783
            ],
            [
                'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'          => 'Cafe Gallery',
                'description'   => 'Cafe dengan dekorasi yang instagramable dan nyaman',
                'address'       => 'Deket Terminal',
                'price_min'     => 12000,
                'price_max'     => 30000,
                'website'       => '-',
                'business_open' => "12.00",
                'business_close'    => "21.30",
                'food_type'         => 1,
                'restaurant_type'   => 2,
                'phone'         => "-",
                'image'         => 'cafe-gallery1.jpg',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude'      => -7.910052672332409,
                'longitude'     => 113.83090059717482
            ],
            [
                'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'          => 'Dapur Mie Galak',
                'description'   => 'Warung Mie dengan citarasa pedas sesuai dengan level yang diinginkan',
                'address'       => 'Nangkaan',
                'price_min'     => 7000,
                'price_max'     => 13000,
                'website'       => '-',
                'business_open' => "09.00",
                'business_close'    => "21.00",
                'food_type'         => 1,
                'restaurant_type'   => 2,
                'phone'         => "082332919457",
                'image'         => 'miegalak2.jpg',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude'      => -7.926730170517271,
                'longitude'     => 113.8059873841125
            ],
            [
                'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'          => 'Jojo Resto n Coffee',
                'description'   => 'Restaurant yang menyediakan berbagai macam makanan dan segala macam kopi',
                'address'       => 'Nangkaan',
                'price_min'     => 4000,
                'price_max'     => 27000,
                'website'       => '-',
                'business_open' => "08.00",
                'business_close'    => "21.00",
                'food_type'         => 1,
                'restaurant_type'   => 2,
                'phone'         => "085231157070",
                'image'         => 'jojo-resto-n-coffee1.jpg',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude'      => -7.9077277610578935,
                'longitude'     => 113.82046509999998
            ],
            [
                'uuid_restaurant' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'          => 'Kedai Mie Jotos Bondowoso ',
                'description'   => 'kedai mie dengan citarasa pedas yang njotos lidah kamu banget!',
                'address'       => 'Badean',
                'price_min'     => 6000,
                'price_max'     => 16000,
                'website'       => '-',
                'business_open' => "09.00",
                'business_close'    => "22.00",
                'food_type'         => 1,
                'restaurant_type'   => 2,
                'phone'         => "085236841553",
                'image'         => 'kedaimiejotos1.jpg',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude'      => -7.912402862296717,
                'longitude'     => 113.81746433045005
            ]
        ];

        DB::table('restaurants')->insert($restaurant);
    }
}
