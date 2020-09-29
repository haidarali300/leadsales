<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadStageFieldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_stage_field', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('stage_field_id');
            $table->string('value');
            $table->timestamps();

            $table->foreign('lead_id')->references('id')->on('leads')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stage_field_id')->references('id')->on('stage_fields')
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
        Schema::dropIfExists('lead_stage_field');
    }
}
