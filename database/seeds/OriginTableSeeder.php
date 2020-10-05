<?php

use App\Models\Origin;
use Illuminate\Database\Seeder;

class OriginTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Origin::create(['name' => "Facebook", 'description' => "facebook", 'active' => 1]);
        Origin::create(['name' => "Instagram", 'description' => "instagram", 'active' => 1]);
        Origin::create(['name' => "Google Ads", 'description' => "google ads", 'active' => 1]);
    }
}
