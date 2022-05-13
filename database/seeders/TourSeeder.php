<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tours = [
            [
                'uuid_tour' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'      => 'Air Terjun Belerang',
                'image'     => 'air-terjun-belerang.jpg',
                'description' => 'Air Terjun Belerang sendiri memang sangat cocok untuk berkumpulnya keluarga dan memiliki daya tarik tersendiri bagi para pengunjungnya yaitu air terjun ini memiliki kandungan belerang yang sangat kuat dan keindahan yang luar biasa, disini kamu bisa berkumpul bersama keluarga dan juga bisa mencari berbagai spot foto yang cocok dengan seleramu, bagi kamu yang penasaran, langsung aja deh pergi ke tempat wisata yang satu ini. Dijamin liburanmu akan semakin seru dan akan menambah koleksi selfie kekinianmu.',
                'ticket_price_weekday' => 0,
                'ticket_price_weekend' => 0,
                'address' => 'Curah Macan, Kalianyar, Kec. Ijen, Kabupaten Bondowoso, Jawa Timur 68288',
                'category' => 'Air Terjun',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude' => -8.062268083938406,
                'longitude' => 114.2164185974425
            ],
            [
                'uuid_tour' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'      => 'Air Terjun Blawan',
                'image'     => 'air-terjun-blawan.jpg',
                'description' => 'Air Terjun Blawan letaknya tidak jauh dari Pemandian Air Panas Blawan. Terletak di Desa Kalianyar, Kecamatan Ijen, Bondowoso. Air terjun Blawan merupakan hilir dari kali pahit rembesan Kawah Ijen yang penuh dengan kadar belerang dan dikelilingi oleh tumbuhan makademia dan lumut.  Menariknya,    muara alirannya  langsung menuju ke dalam tanah seperti air terjun Niagara di Amerika dan pada akhirnya akan bermuara di daerah Asembagus Situbondo. Masyarakat biasanya menyebut air terjun ini dengan air terjun hilang ke bumi.',
                'ticket_price_weekday' => 0,
                'ticket_price_weekend' => 0,
                'address' => 'Dusun Rengahrejo, Desa Kalianyar, Kecamatan Sempol, Kabupaten Bondowoso',
                'category' => 'Air Terjun',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude' => -7.9852432229439,
                'longitude' => 114.17596659510905
            ],
            [
                'uuid_tour' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'      => 'Air Terjun Busa',
                'image'     => 'air-terjun-busa-bondowoso.jpg',
                'description' => 'Air Terjun Busa sendiri memang sangat cocok untuk berkumpulnya keluarga dan memiliki daya tarik tersendiri bagi para pengunjungnya yaitu air terjun ini memiliki keindahan yang luar biasa, disini kamu bisa berkumpul bersama keluarga dan juga bisa mencari berbagai spot foto yang cocok dengan seleramu, bagi kamu yang penasaran, langsung aja deh pergi ke tempat wisata yang satu ini. Dijamin liburanmu akan semakin seru dan akan menambah koleksi selfie kekinianmu.
                ',
                'ticket_price_weekday' => 0,
                'ticket_price_weekend' => 0,
                'address' => 'Kebunjeruk, Kalianyar, Kec. Ijen, Kabupaten Bondowoso, Jawa Timur 68288',
                'category' => 'Air Terjun',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude' => -8.032868794215572,
                'longitude' => 114.18645328395165
            ],
            [
                'uuid_tour' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'      => 'Air Terjun Gentongan',
                'image'     => 'air-terjun-gentongan-bondowoso.jpg',
                'description' => 'Air Terjun Gentongan memiliki air berwarna biru agak kehijauan dan berbuih. Hal ini dikarenakan airnya berasal dari rembesan kawah Ijen yang kaya akan kandungan belerang. Maka dari itu buat kamu yang tidak kuat dengan bau menyengat belerang disarankan untuk memakai masker jika berada di dekat air terjun. Jangan pula terlalu dekat dengan terjunannya, karena cipratan air yang dihasilkan bisa memberikan efek gatal dan perih jika terkena mata.
                ',
                'ticket_price_weekday' => 5000,
                'ticket_price_weekend' => 5000,
                'address' => 'Desa Kalianyar, Kecamatan Sempol, Kabupaten Bondowoso',
                'category' => 'Air Terjun',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude' => -8.023337298966515,
                'longitude' => 114.18168541093256
            ],
            [
                'uuid_tour' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name'      => 'Air Terjun Mini Niagara',
                'image'     => 'air-terjun-mini-niagara.jpg',
                'description' => 'Wisata air terjun niagara mini buatan yang menarik dikunjungi di tengah desa kaki pegunungan ijen Kebun Blawan, Bondowoso.

                Air terjun Blawan Bondowoso memiliki bentuk menyerupai Niagara Waterfall di Amerika. Lokasi wisata baru di Bondowoso yang sukses mengaet hati para wisatawan untuk berkunjung ke objek wisata di Bondowoso yang satu ini. Selain memberikan hawa segar dan pesona keindahan desa, kucuran air yang jernih menjadi daya tarik tersendiri bagi air terjun cantik Niagara Mini versi Bondowoso ini.
                ',
                'ticket_price_weekday' => 5000,
                'ticket_price_weekend' => 5000,
                'address' => 'Dusun Rengahrejo, Desa Kalianyar, Kecamatan Sempol, Kabupaten Bondowoso',
                'category' => 'Air Terjun',
                'province_id'   => 6,
                'city_id'       => 1,
                'latitude' => -7.989772944866552,
                'longitude' => 114.17096796860548
            ],
        ];


        DB::table('tours')->insert($tours);
    }
}
