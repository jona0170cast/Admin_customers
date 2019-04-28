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
        // los seed se utilizan para agregar registro a nuestra base de datos
    	// DB::table('users')->insert([
    	// 	'first_name' => 'jonathan',
    	// 	'last_name' => 'castro',
    	// 	'email' => 'admin@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'country' => 1,
    	// 	'state' => 1,
    	// 	'role' => 'admin'
    	// ]);

    	// DB::table('users')->insert([
    	// 	'first_name' => 'maria',
    	// 	'last_name' => 'chacon',
    	// 	'email' => 'maria@hotmail.com',
    	// 	'password' => bcrypt('123'),
    	// 	'country' => 1,
    	// 	'state' => 1,
    	// 	'role' => 'user'
    	// ]);


        DB::table('countrys')->insert([          
            'country' => 'venezuela'
        ]);

        DB::table('countrys')->insert([          
            'country' => 'Argentina'
        ]);

        DB::table('countrys')->insert([          
            'country' => 'Bolivia'
        ]);




    }
}
