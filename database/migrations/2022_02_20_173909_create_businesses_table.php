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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->comment('posted_by')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('name');
            $table->string('user_title');
            $table->string('growth_level');
            $table->foreignId('job_industry_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('image_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->text('description');
            $table->tinyInteger('is_registered')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->integer('no_of_employees');
            $table->year('year_started');
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
        Schema::dropIfExists('businesses');
    }
};
