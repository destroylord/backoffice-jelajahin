<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuTypicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'name'          => 'bakso gulung',
                'description'   => 'Bakso yang biasanya berbentuk bulat kini berbentuk gulungan daging',
                'images'        => 'baksogulung1.jpg',
                'origin'        => 'Bondowoso',
                'provice_id'    => 6,
                'city_id'       => 1
            ],
            [

                'name'          => 'Es Tape Ngambeng',
                'description'   => 'minuman khas Bondowoso yang dibuat dari campuran tape, air kapur, dan gula',
                'images'        => 'estapengambengbondowoso1.jpg',
                'origin'        => 'Bondowoso',
                'provice_id'    => 6,
                'city_id'       => 1
            ],
            [
                'name'          => 'Kopi Blankon',
                'description'   => 'Kopi dengan tambahan sereh, jahe, dan rempah lainnya',
                'images'        => 'kopiblangkon1.jpg',
                'origin'        => 'Bondowoso',
                'provice_id'    => 6,
                'city_id'       => 1
            ],
            [

                'name'          => 'Nasi Macan Bu Banjir',
                'description'   => 'Nasi dengan porsi yang sangat besar dan harga yang murah',
                'images'        => 'bubanjir.jpg',
                'origin'        => 'Bondowoso',
                'provice_id'    => 6,
                'city_id'       => 1
            ],
            [

                'name'          => 'Nasi Mamong',
                'description'   => 'Nasi gurih dengan campuran ayam, kemangi, teri dan daun singkong yang dioseng dan dibentuk mengerucut seperti ujung tumpeng',
                'images'        => 'nasimamong1.jpg',
                'origin'        => 'Bondowoso',
                'provice_id'    => 6,
                'city_id'       => 1
            ]
        ];
    }
}
