<?php

use Illuminate\Database\Seeder;

class DependencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencies')->insert([
            'definition' => 'oficina de tecnologias de informacion',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'unidad de gobierno digital',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'unidad de archivo academico',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'recursos humanos',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'unidad de resoluciones',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'oficina de administracion de personal',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'oficina de convenios',
        ]);

        DB::table('dependencies')->insert([
            'definition' => 'oficina de cooperacion nacional e internacional',
        ]);
    }
}
