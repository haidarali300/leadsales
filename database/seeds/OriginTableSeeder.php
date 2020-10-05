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
        Origin::create(['name' => "Facebook", 'description' => "facebook"]);
        Origin::create(['name' => "Instagram", 'description' => "instagram"]);
        Origin::create(['name' => "Google Ads", 'description' => "google ads"]);
    }
}
