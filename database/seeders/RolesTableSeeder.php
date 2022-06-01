<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['name'=>'Administrador','description'=>'Tem total acesso'],        //id = 1
            ['name'=>'Gerente','description'=>'Gerencia os recurso princial'],        //id = 1
            ['name'=>'Vendedor','description'=>'Tem o controle das vendas'],      //id = 2
            ['name'=>'Espectador','description'=>'Usuario e consumidor'],             //id = 3
        ]);

        UserRole::insert([
            ['user_id'=>1,'role_id'=>2],
            ['user_id'=>2,'role_id'=>3],
        ]);
    }
}
