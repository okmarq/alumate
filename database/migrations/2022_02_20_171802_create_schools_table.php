<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->string('abbr');
            $table->bigInteger('school_type_id');
            // $table->year('year_founded');
            $table->foreignId('city_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->unique(['name', 'city_id']);
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
};
