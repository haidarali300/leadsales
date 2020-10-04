<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('salesman_id');
            $table->unsignedBigInteger('supervisor_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('origin_id');
            $table->unsignedBigInteger('lead_state_id');
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('budget_id')->nullable();
            $table->unsignedBigInteger('negotiation_id')->nullable();
            $table->unsignedBigInteger('closing_id')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('origin_id')->references('id')->on('origins')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('salesman_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('supervisor_id')->references('id')->on('users')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lead_state_id')->references('id')->on('lead_states')
                  ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('stage_id')->references('id')->on('stages')
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
        Schema::dropIfExists('leads');
    }
}
