<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            /*
             * Administrador
                Acesso total
                Vendedor
                - Vendas, indicar amigo, Histórico de vendas próprio, Cadastrar Produtos (editar, excluir)
                Espectador
                Realizar compras, indicar amigo, Histórico
                Gerente
                - Cadastro de usuário, Cadastro de Produtos, Criar Tickets, Vendas, Relatórios, indicar amigo
             */

            //=========PERMISSÃO========   ==========PAPEL=========

            //Usuarios
            ['name'=>'cadastrar_usuario','description'=>'Permite criar usuario'],  //id = 1 Admin | Gerente
            ['name'=>'editar_usuario','description'=>'Permite editar usuario'],     //id = 2 Admin | Gerente
            ['name'=>'excluir_usuario','description'=>'Permite excluir usuario'],   //id = 3 Admin |
            ['name'=>'lista_usuario','description'=>'Permite listar usuario'],      //id = 4 Admin | Gerente | Espectador |
            // Produtos
            ['name'=>'cadastrar_produto','description'=>'Permite criar Produtos'], //id = 5 Admin | Gerente
            ['name'=>'editar_produto','description'=>'Permite editar Produtos'],    //id = 6 Admin | Gerente
            ['name'=>'excluir_produto','description'=>'Permite excluir Produtos'],  //id = 7 Admin |
            ['name'=>'lista_produto','description'=>'Permite listar Produtos'],     //id = 8 Admin | Gerente | Vendedor |
            // Eventos
            ['name'=>'cadastrar_eventos','description'=>'Permite criar Eventos'],  //id = 9 Admin |
            ['name'=>'editar_eventos','description'=>'Permite editar Eventos'],     //id = 10 Admin |
            ['name'=>'excluir_eventos','description'=>'Permite excluir Eventos'],   //id = 11 Admin |
            ['name'=>'lista_eventos','description'=>'Permite listar Eventos'],      //id = 12 Admin |
            // Ticket
            ['name'=>'cadastrar_ticket','description'=>'Permite criar Ticket'],    //id = 13 Admin | Gerente
            ['name'=>'editar_ticket','description'=>'Permite editar Ticket'],       //id = 14 Admin | Gerente
            ['name'=>'excluir_ticket','description'=>'Permite excluir Ticket'],     //id = 15 Admin |
            ['name'=>'lista_ticket','description'=>'Permite listar Ticket'],        //id = 16 Admin | Gerente
            // Vendas
            ['name'=>'realizar_vendas','description'=>'Permite Realizar Vendas'],   //id = 17 Admin |  Gerente | Vendedor |
            ['name'=>'excluir_vendas','description'=>'Permite Excluir uma Venda'],  //id = 18 Admin |  Gerente |
            // Convite
            ['name'=>'enviar_convite','description'=>'Permite Enviar Convite'],     //id = 19 Admin | Gerente
            ['name'=>'editar_convite','description'=>'Permite Editar Convite'],     //id = 20 Admin | Gerente
            ['name'=>'listar_convite','description'=>'Permite Listar Convite'],     //id = 21 Admin | Gerente
            // Divulgador
            ['name'=>'listar_divulgador','description'=>'Permite Listar Divulgador'],   //id = 22 Admin |
            ['name'=>'ver_credito','description'=>'Permite Vizualizar Creditos'],       //id = 23 Admin |
            // Relatorio
            ['name'=>'ver_relatorio','description'=>'Permite Vizualizar Relatorios'],   //id = 24 Gerente

            // Menus
            ['name'=>'menu_usuarios','description'=>'Permite ter acesso ao menu Usuarios'],     //id = 25 Admin | Gerente
            ['name'=>'menu_produtos','description'=>'Permite ter acesso ao menu Produtos'],     //id = 26 Admin | Gerente
            ['name'=>'menu_eventos','description'=>'Permite ter acesso ao menu Eventos'],       //id = 27 Admin | Gerente
            ['name'=>'menu_ticket','description'=>'Permite ter acesso ao menu Ticket'],         //id = 28 Admin | Gerente
            ['name'=>'menu_convite','description'=>'Permite ter acesso ao menu Convite'],       //id = 29 Admin | Gerente
            ['name'=>'menu_divulgador','description'=>'Permite ter acesso ao menu Divulgador'], //id = 30 Admin | Gerente
            ['name'=>'menu_segurança','description'=>'Permite ter acesso ao menu Segurança'],   //id = 31 Admin | Gerente

        ]);
    }
}
