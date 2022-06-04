<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('photo', 1000)->nullable();
            $table->string('video', 1000)->nullable();
            $table->enum('status', ['0', '1']);
            $table->enum('isPromoted', ['false', 'true']);
            $table->enum('reposted', ['false', 'true']);
            $table->string('reposterName')->nullable();
            $table->string('repostId')->nullable();
            $table->enum('repostHasPhoto', ['false', 'true']);
            $table->integer('report_id')->default(0);
            $table
                ->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table
                ->foreignId('category_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table
                ->foreignId('group_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table
                ->foreignId('school_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table
                ->foreignId('pgroup_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('threads');
    }
}
