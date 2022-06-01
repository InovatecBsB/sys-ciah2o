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
                'name' => 'Espectador',
                'email' => 'espectador@espectador.com',
                'phone' => '619998982255',
                'cpf' => '87081156134',
                'rg' => '1685968',
//                'email_verified_at' => now(),
                'password' => bcrypt('cia123456'), // password
//                'remember_token' => Str::random(10),
                'remember_token' => 1213345646851,
            ]
        ]);

    }
}
