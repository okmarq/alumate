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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('school_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            // $table->string('session');
            $table->text('description')->nullable();
            $table->boolean('is_admin')->default(0);
            $table->year('admission_year')->nullable();
            $table->year('graduation_year')->nullable();
            $table->timestamps();
            $table->unique(['user_id', 'school_id', 'admission_year']);
            $table->unique(['user_id', 'school_id', 'graduation_year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
};
