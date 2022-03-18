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
        Schema::create('comment_reactions', function (Blueprint $table) {
            $table->id();
            $table->enum('reaction', ['like', 'love', 'haha', 'sad', 'care', 'curious', 'wow']);
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('comment_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comment_reactions');
    }
};
