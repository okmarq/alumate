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
            $table->bigIncrements('posted_by')->comment('user_id');
            $table->string('owner');
            $table->string('industry');
            $table->text('description');
            $table->tinyInteger('is_registered')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->integer('no_of_employees');
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