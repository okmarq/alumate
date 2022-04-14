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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('invite_code')->unique();
            $table->unsignedBigInteger('invite_id')->nullable();
            // $table->string('phone_number')->unique();
            // $table->string('gender');
            // $table->string('phone_number_id')->nullable()->constrained()->onUpdate('restrict')->onDelete('restrict');
            // $table->year('birth_year');
            // $table->month('birth_month');
            // $table->day('birth_day');
            $table->string('password');
            $table->enum('status', ['offline', 'online', 'away', 'busy'])->default('online');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->foreign('invite_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
