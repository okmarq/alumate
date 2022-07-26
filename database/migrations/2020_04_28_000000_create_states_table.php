<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('capital');
            $table->string('country_id');
            // $table->unsignedBigInteger('country_id')->nullable();
            // $table->foreign('country_id')->references('id')->on('countries');
            // $table->string('name');
            // $table->foreignId('country_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            // $table->unique(['name', 'country_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('states');
    }
}
