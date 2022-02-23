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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->bigInteger('chat_id')->comment('parent_chat_id')->nullable();
            $table->bigInteger('sender')->comment('user_id');
            $table->timestamp('sent_at')->useCurrent();
            $table->timestamp('delivered_at')->useCurrent();
            $table->timestamp('expiry_date')->useCurrent();
            $table->tinyInteger('is_active')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chats');
    }
};
