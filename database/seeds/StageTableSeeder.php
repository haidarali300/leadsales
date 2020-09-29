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
        $contact     = Stage::create(['required' => true, 'order' => 1, 'name' => 'Contact']);
        $budget      = Stage::create(['required' => true, 'order' => 2, 'name' => 'Budget']);
        $negotiation = Stage::create(['required' => true, 'order' => 3, 'name' => 'Negotiation']);
        $closing     = Stage::create(['required' => true, 'order' => 4, 'name' => 'Closing']);
        $qos         = Stage::create(['required' => true, 'order' => 5, 'name' => 'Quality of Service']);

        StageField::create(['stage_id' => $budget->id, 'name' => 'Budget number', 'type' => 'text']);
        StageField::create(['stage_id' => $budget->id, 'name' => 'Description', 'type' => 'text']);
        StageField::create(['stage_id' => $budget->id, 'name' => 'Image', 'type' => 'image']);

        StageField::create(['stage_id' => $negotiation->id, 'name' => 'Budget number', 'type' => 'text']);
        StageField::create(['stage_id' => $negotiation->id, 'name' => 'Description', 'type' => 'text']);
        StageField::create(['stage_id' => $negotiation->id, 'name' => 'Image', 'type' => 'image']);

        StageField::create(['stage_id' => $closing->id, 'name' => 'Invoice Number', 'type' => 'text']);
        StageField::create(['stage_id' => $closing->id, 'name' => 'Guide Number', 'type' => 'text']);
        StageField::create(['stage_id' => $closing->id, 'name' => 'Invoice Image', 'type' => 'image']);
        StageField::create(['stage_id' => $closing->id, 'name' => 'Guide Image', 'type' => 'image']);

        StageField::create(['stage_id' => $qos->id, 'name' => 'Product Quality', 'type' => 'stars']);
        StageField::create(['stage_id' => $qos->id, 'name' => 'Product Arrival', 'type' => 'stars']);
        StageField::create(['stage_id' => $qos->id, 'name' => 'Response Time', 'type' => 'stars']);
    }
}
