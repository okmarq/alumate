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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('posted_by')->comment('user_id');
            $table->bigInteger('business_id');
            $table->string('position');
            $table->text('description');
            $table->text('function');
            $table->string('minimum_salary');
            $table->string('maximum_salary');
            $table->text('industry');
            $table->timestamp('apply_after')->nullable();
            $table->timestamp('deadline')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
};
