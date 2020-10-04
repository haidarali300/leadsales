<?php

use App\Models\Stage;
use App\Models\StageField;
use Illuminate\Database\Seeder;

class StageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact     = Stage::create(['name' => 'Contact']);
        $budget      = Stage::create(['name' => 'Budget']);
        $negotiation = Stage::create(['name' => 'Negotiation']);
        $closing     = Stage::create(['name' => 'Closing']);
        $qos         = Stage::create(['name' => 'Quality of Service']);
    }
}
