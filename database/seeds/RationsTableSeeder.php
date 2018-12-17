<?php

use Illuminate\Database\Seeder;

class RationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rations')->insert([
            'definition' => 'Completa'
        ]);

        DB::table('rations')->insert([
            'definition' => 'Media'
        ]);

        DB::table('rations')->insert([
            'definition' => 'Parcial 1'
        ]);

        DB::table('rations')->insert([
            'definition' => 'Parcial 2'
        ]);
    }
}
