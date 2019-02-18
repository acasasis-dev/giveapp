<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('id')->autoIncrement();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('contact')->nullable();
            $table->binary('image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::create('users', function (Blueprint $table) {
        //     $table->integer('user_id')->autoIncrement();
        //     $table->string('user_name');
        //     $table->string('user_add');
        //     $table->string('user_contact');
        //     $table->string('user_email');
        //     $table->string('user_pass');
        //     $table->binary('user_image')->nullable();
        //     $table->timestamp('added_on')->useCurrent();
        // });
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
