<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6; $i++) { 
            Category::create([
                'name' => "Category $i",
                'description' => "vague description $i",
                'active' => 1
            ]);
        }
    }
}
