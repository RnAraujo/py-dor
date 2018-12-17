<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DependencesTableSeeder::class);
        $this->call(RationsTableSeeder::class);
        $this->call(TypesBeneficiaryTableSeeder::class);
        $this->call(BenefitedTableSeeder::class);
    }
}
