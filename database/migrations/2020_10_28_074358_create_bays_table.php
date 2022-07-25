<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('summary')->nullable();
            $table->longText('description')->nullable();
            $table->string('photo', 1000)->nullable();
            $table->string('role')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->string('hours')->nullable();
            $table
                ->foreignId('user_id')
                ->comment('posted_by')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('state_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('group_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('business_id')
                ->nullable()
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->string('street_address')->nullable();
            $table->string('open_time')->nullable();
            $table->string('close_time')->nullable();
            $table->string('category')->nullable();
            $table->string('core_service')->nullable();
            $table->string('keywords')->nullable();
            $table->string('business_picture', 1000)->nullable();
            $table->text('branch_address')->nullable();
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
        Schema::dropIfExists('bays');
    }
}
