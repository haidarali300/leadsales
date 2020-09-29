<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualityCriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quality_criterias', function (Blueprint $table) {
            $table->id();
            $table->boolean('active')->default(1);
            $table->string('name');
            /*$table->integer('product_quality');
            $table->integer('product_arrival');
            $table->integer('ressponse_time');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quality_criterias');
    }
}
