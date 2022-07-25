<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('content');
            $table->string('photo', 1000)->nullable();
            $table->string('video', 1000)->nullable();
            $table->enum('status', ['0', '1']);
            $table->enum('isPromoted', ['false', 'true']);
            $table->enum('reposted', ['false', 'true']);
            $table->string('reposterName')->nullable();
            $table->string('user_id')->nullable();
            $table->string('group_id')->nullable();
            $table->string('school_id')->nullable();
            $table->string('repostId')->nullable();
            $table->enum('repostHasPhoto', ['false', 'true']);
            // $table
            //     ->foreignId('user_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            $table
                ->foreignId('category_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            // $table
            //     ->foreignId('group_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            // $table
            //     ->foreignId('school_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            $table->boolean('is_active')->default(0);
            $table->bigInteger('reactions')->default(0);
            $table->bigInteger('shares')->default(0);
            $table->timestamps();
            $table->string('school')->nullable();
            $table->string('graduate')->nullable();
            $table->string('checktime')->nullable();
            $table->string('Poster_email')->nullable();
            $table->string('plan')->nullable();
            $table->string('contents')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
