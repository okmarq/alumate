<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            // $table->string('phone_number')->unique();
            // $table->string('gender');
            // $table->string('phone_number_id')->nullable()->constrained()->onUpdate('restrict')->onDelete('restrict');
            // $table->year('birth_year');
            // $table->month('birth_month');
            // $table->day('birth_day');
            $table->string('password');
            $table
                ->enum('status', ['offline', 'online', 'away', 'busy'])
                ->default('online');
            $table->timestamp('email_verified_at')->nullable();
            $table->unsignedBigInteger('invite_id')->nullable();
            $table
                ->foreign('invite_id')
                ->references('id')
                ->on('users');
            $table->string('photo', 1000)->nullable();
            $table->string('api_token', 60)->nullable();
            $table->string('player_id')->nullable();
            $table->string('country_of_residence')->nullable();
            $table->string('country_of_origin')->nullable();
            $table->string('state_of_residence')->nullable();
            $table->string('state_of_origin')->nullable();
            $table->string('country')->nullable();
            $table->string('residence')->nullable();
            $table->string('profession')->nullable();
            $table->string('phone')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital')->nullable();
            $table->text('hobbies')->nullable();
            $table->string('referral_code')->nullable();
            $table
                ->unsignedBigInteger('referrer_id')
                ->index()
                ->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
