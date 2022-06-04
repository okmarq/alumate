<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
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
            // $table->string('abbr')->nullable();
            // $table->year('year_founded')->nullable();
            $table
                ->foreignId('school_type_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('image_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('city_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->boolean('verified')->default(false);
            $table->unique(['name', 'city_id']);

            // $table->id();
            // $table->string('name')->unique()->index();
            $table->string('city');
            $table->char('color')->nullable();
            $table
                ->foreignId('state_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('user_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            // $table->enum('status', ['Primary', 'High school', 'Tertiary']);
            $table->enum('status', ['Primary', 'Secondary', 'Tertiary']);
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
}
