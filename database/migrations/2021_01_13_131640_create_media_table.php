<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMediaTable extends Migration
{
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file_name');
            $table->string('disk');
            $table->string('mime_type');
            $table->unsignedInteger('size');
            $table->timestamps();
        });

        Schema::create('mediables', function (Blueprint $table) {
            $table->unsignedBigInteger('mediable_id')->index();
            $table->string('mediable_type');
            $table->string('group');

            $table
                ->foreignId('media_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('mediables');
        Schema::dropIfExists('media');
    }
}
