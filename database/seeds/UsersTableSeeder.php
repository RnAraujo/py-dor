<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Rene Araujo',
            'email' => 'raraujo@unap.edu.pe',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan Perez',
            'email' => 'jperez@unap.edu.pe',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jhon Doe',
            'email' => 'jdoe@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
