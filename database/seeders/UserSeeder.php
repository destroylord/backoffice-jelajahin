<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'uuid_user' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name' => 'Dafrin',
                'email' => 'dafrin@exploria.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // password
                'remember_token' => Str::random(10),
            ],
            [
                'uuid_user' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name' => 'Ibnu',
                'email' => 'ibnu@exploria.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'), // password
                'remember_token' => Str::random(10),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
