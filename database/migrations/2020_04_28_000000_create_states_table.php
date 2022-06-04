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
            // $table->increments('id');
            // $table->string('name')->index();
            // $table->Integer('country_id')->unsigned()->nullable();
            // $table->foreign('country_id')->references('id')->on('countries');
            $table->id();
            $table->string('name');
            $table->string('capital');
            $table->foreignId('country_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->unique(['name', 'country_id']);
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
