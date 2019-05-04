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
    	// 	'country_id' => 7,
    	// 	'state_id' => 7,
    	// 	'role_id' => 1
    	// ]);

    	// DB::table('users')->insert([
    	// 	'first_name' => 'maria',
    	// 	'last_name' => 'chacon',
    	// 	'email' => 'maria@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'country_id' => 6,
    	// 	'state_id' => 6,
    	// 	'role_id' => 2
    	// ]);

        // DB::table('users')->insert([
        //     'first_name' => 'steve',
        //     'last_name' => 'smith',
        //     'email' => 'carlos@hotmail.com',
        //     'password' => bcrypt('123'),
        //     'country_id' => 5,
        //     'state_id' => 5,
        //     'role_id' => 2
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
        //     // 'country_id' => 1

        //     // 'state' => 'sucre',
        //     // 'country_id' => 2

        //     // 'state' => 'santiago de Chile',
        //     // 'country_id' => 3

        //     // 'state' => 'bogotá',
        //     // 'country_id' => 4

        //     // 'state' => 'washington D.C',
        //     // 'country_id' => 5

        //     // 'state' => 'ciudad de México',
        //     // 'country_id' => 6

        //     // 'state' => 'caracas',
        //     // 'country_id' => 7
        // ]);

        // DB::table('roles')->insert([          
        //     'role' => 'admin'
        //     // 'role' => 'user'
        // ]);

    }
}
