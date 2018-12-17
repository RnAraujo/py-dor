<?php

use Illuminate\Database\Seeder;

class BenefitedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Benefited::class, 400)->create();
    }
}
