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
        $this->call(Userseeder::class);
        $this->call(RolesSeeder::class);
        $this->call(CompanyCategorySeeder::class);
        $this->call(CompanySeeder::class);
        $this->call(StarSeeder::class);
    }
}
