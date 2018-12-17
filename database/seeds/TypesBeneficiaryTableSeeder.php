<?php

use Illuminate\Database\Seeder;

class TypesBeneficiaryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_beneficiary')->insert([
            'definition' => 'Docente nombrado'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'Docente contratado'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'Docente cas'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'Administrativo nombrado'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'Administrativo contratado'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'cas'
        ]);

        DB::table('types_beneficiary')->insert([
            'definition' => 'servicios no personales'
        ]);
    }
}
