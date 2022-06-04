<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostlikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postlikes', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('post_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->enum('reaction', [
                'like',
                'love',
                'haha',
                'sad',
                'care',
                'curious',
                'wow',
            ]);
            $table->tinyInteger('is_dislike')->default(0);

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
        Schema::dropIfExists('postlikes');
    }
}
