<?php

use App\Models\LeadState;
use Illuminate\Database\Seeder;

class LeadStateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeadState::create([
            'id' => 1, 
            'name' => 'Active', 
            'description' => 'active'
        ]);
        LeadState::create([
            'id' => 2, 
            'name' => 'Lost', 
            'description' => 'lost'
        ]);
        LeadState::create([
            'id' => 3, 
            'name' => 'Closed', 
            'description' => 'closed'
        ]);
    }
}
