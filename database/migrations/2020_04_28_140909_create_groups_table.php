<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('certificate');
            $table->string('photo')->nullable();
            $table->char('year', 4);
            // $table
            //     ->foreignId('school_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            $table->string('school_id')->nullable();
            $table->string('image_id')->nullable();
            $table->string('type');
            $table->string('university')->nullable();
            $table->string('year1')->nullable();
            $table->string('level')->nullable();
            $table->year('admission_year')->nullable();
            $table->year('graduation_year')->nullable();
            // $table
            //     ->foreignId('image_id')
            //     ->constrained()
            //     ->onUpdate('restrict')
            //     ->onDelete('restrict');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('group_user', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            // $table
            //     ->foreignId('user_id')
            //     ->constrained()
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            $table
                ->foreignId('group_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            /*
             * 0 => User
             * 1 => Admin
             * 2 => Super Admin
             * */
            $table->enum('admin', [0, 1, 2])->default(0);
            $table->timestamps();

            $table->boolean('is_admin')->default(0);
            $table->unique(['user_id', 'group_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_user');
        Schema::dropIfExists('groups');
    }
}
