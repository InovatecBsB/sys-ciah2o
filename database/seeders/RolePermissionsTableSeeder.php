<?php

namespace Database\Seeders;

use App\Models\RolePermission;
use Illuminate\Database\Seeder;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RolePermission::insert([
//            Gerente
            ['role_id'=>3,'permission_id'=>8],
            ['role_id'=>3,'permission_id'=>17],
            ['role_id'=>2,'permission_id'=>1],
            ['role_id'=>2,'permission_id'=>2],
            ['role_id'=>2,'permission_id'=>4],
            ['role_id'=>2,'permission_id'=>5],
            ['role_id'=>2,'permission_id'=>6],
            ['role_id'=>2,'permission_id'=>8],
            ['role_id'=>2,'permission_id'=>13],
            ['role_id'=>2,'permission_id'=>14],
            ['role_id'=>2,'permission_id'=>16],
            ['role_id'=>2,'permission_id'=>17],
            ['role_id'=>2,'permission_id'=>19],
            ['role_id'=>2,'permission_id'=>20],
            ['role_id'=>2,'permission_id'=>21],
            ['role_id'=>2,'permission_id'=>24],
            ['role_id'=>2,'permission_id'=>25],
            ['role_id'=>2,'permission_id'=>26],
            ['role_id'=>2,'permission_id'=>27],
            ['role_id'=>2,'permission_id'=>28],
            ['role_id'=>2,'permission_id'=>29],
            ['role_id'=>2,'permission_id'=>30],
            ['role_id'=>2,'permission_id'=>31],

        ]);
    }
}
///id = 1 Gerente
///id = 2 Gerente
///id = 4 Gerente
///id = 5 Gerente
///id = 6 Gerente
///id = 8 Gerente
//id = 13 Gerente
//id = 14 Gerente
//id = 16 Gerente
//id = 17 Gerente
//id = 18 Gerente
//id = 19 Gerente
//id = 20 Gerente
//id = 21 Gerente
//id = 24 Gerente
//id = 25 Gerente
//id = 26 Gerente
//id = 27 Gerente
//id = 28 Gerente
//id = 29 Gerente
//id = 30 Gerente
//id = 31 Gerente
