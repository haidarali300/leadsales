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
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(LeadStateTableSeeder::class);
        $this->call(OriginTableSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(QualityCriteriaTableSeeder::class);
    }
}
