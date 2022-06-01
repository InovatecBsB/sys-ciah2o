<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::factory(1)->create();

        User::insert([
            [
                'name' => 'Celio Batalha',
                'email' => 'celio.batalha@gmail.com',
                'phone' => '61998274631',
                'cpf' => '87081156134',
                'rg' => '1685968',
//                'email_verified_at' => now(),
                'password' => bcrypt('ce123456'), // password
//                'remember_token' => Str::random(10),
                'remember_token' => 1213345646851,
            ],
            [
                'name' => 'Celio Filho',
                'email' => 'celio_batalha@hotmail.com',
                'phone' => '61996720587',
                'cpf' => '87281156134',
                'rg' => '1685969',
//                'email_verified_at' => now(),
                'password' => bcrypt('ce123456'), // password
//                'remember_token' => Str::random(10),
                'remember_token' => 1433345646851,
            ]
        ]);

    }
}
