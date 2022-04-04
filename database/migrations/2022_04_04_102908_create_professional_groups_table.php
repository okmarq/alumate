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
        Schema::create('professional_groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('abbr');
            $table->string('website')->nullable();
            $table->foreignId('image_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->text('description');
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
        Schema::dropIfExists('professional_groups');
    }
};
