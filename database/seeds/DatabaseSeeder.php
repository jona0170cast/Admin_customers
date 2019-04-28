<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // los seed se utilizan para agregar registros a nuestra base de datos
    	// DB::table('users')->insert([
    	// 	'first_name' => 'jonathan',
    	// 	'last_name' => 'castro',
    	// 	'email' => 'admin@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'id_country' => 7,
    	// 	'id_state' => 7,
    	// 	'id_role' => 1
    	// ]);

    	// DB::table('users')->insert([
    	// 	'first_name' => 'maria',
    	// 	'last_name' => 'chacon',
    	// 	'email' => 'maria@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'id_country' => 6,
    	// 	'id_state' => 6,
    	// 	'id_role' => 2
    	// ]);

        // DB::table('users')->insert([
        //     'first_name' => 'steve',
        //     'last_name' => 'smith',
        //     'email' => 'carlos@hotmail.com',
        //     'password' => bcrypt('123'),
        //     'id_country' => 5,
        //     'id_state' => 5,
        //     'id_role' => 2
        // ]);

        // hay que insertarlo 1 por 1, si no se inserta el ultimo nada mas
        // DB::table('countrys')->insert([          
        //     // 'country' => 'argentina'
        //     // 'country' => 'bolivia'
        //     // 'country' => 'chile'
        //     // 'country' => 'colombia'
        //     // 'country' => 'estados Unidos'
        //     // 'country' => 'méxico'          
        //     // 'country' => 'venezuela'

        // ]);

        // DB::table('states')->insert([          
        //     // 'state' => 'buenos Aires',
        //     // 'id_country' => 1

        //     // 'state' => 'sucre',
        //     // 'id_country' => 2

        //     // 'state' => 'santiago de Chile',
        //     // 'id_country' => 3

        //     // 'state' => 'bogotá',
        //     // 'id_country' => 4

        //     // 'state' => 'washington D.C',
        //     // 'id_country' => 5

        //     // 'state' => 'ciudad de México',
        //     // 'id_country' => 6

        //     // 'state' => 'caracas',
        //     // 'id_country' => 7
        // ]);

        // DB::table('roles')->insert([          
        //     'role' => 'admin'
        //     // 'role' => 'user'
        // ]);

    }
}
