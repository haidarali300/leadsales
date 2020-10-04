<?php

use App\Models\QualityCriteria;
use Illuminate\Database\Seeder;

class QualityCriteriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QualityCriteria::create(['active' => 1, 'name' => 'Product Quality']);
        QualityCriteria::create(['active' => 1, 'name' => 'Product Arrival']);
        QualityCriteria::create(['active' => 1, 'name' => 'Response Time']);
        QualityCriteria::create(['active' => 0, 'name' => 'Vague quality criteria']);
        QualityCriteria::create(['active' => 0, 'name' => 'Another criteria']);
    }
}
