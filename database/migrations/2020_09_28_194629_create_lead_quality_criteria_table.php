<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadQualityCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_quality_criteria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('quality_criteria_id');
            $table->integer('rate');
            $table->timestamps();

            $table->foreign('lead_id')->references('id')->on('leads')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('quality_criteria_id')->references('id')->on('quality_criterias')
                  ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_quality_criteria');
    }
}
