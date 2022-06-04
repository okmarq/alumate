<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('growth_level');
            $table
                ->foreignId('job_industry_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table
                ->foreignId('image_id')
                ->constrained()
                ->onUpdate('restrict')
                ->onDelete('restrict');
            $table->text('description');
            $table->boolean('is_registered')->default(0);
            $table->boolean('is_active')->default(0);
            $table->integer('no_of_employees')->default(1);
            $table->year('year_started');
            $table->time('open_time')->default('00:00:00');
            $table->time('close_time')->default('23:59:59');
            $table->mediumText('summary')->nullable();
            $table->string('photo', 1000)->nullable();
            $table->string('role')->nullable();
            $table->string('location')->nullable();
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
            $table->string('street_address')->nullable();
            $table->string('category')->nullable();
            $table->string('core_service')->nullable();
            $table->string('keywords')->nullable();
            $table->string('business_picture', 1000)->nullable();
            $table->text('branch_address')->nullable();
            $table->timestamps();
        });
    }

    /* name
summary
Description
image
role
location
email
phone
website
hours
*/
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
