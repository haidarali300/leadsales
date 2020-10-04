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
        for ($i=5; $i > 0; $i--) { 
            Origin::create([
                'name' => "Origin $i",
                'description' => "vague description $i"
            ]);
        }
    }
}
