<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('admin_first_name');
            $table->string('admin_last_name');
            $table->string('admin_user');
            $table->string('admin_pass');
            $table->string('admin_contact');
            $table->string('admin_email');
            $table->string('admin_address');
            $table->string('admin_city_address');
            $table->string('admin_country');
            $table->string('admin_zip');
            $table->string('admin_position');
            $table->binary('admin_image')->nullable();
            $table->timestamp('added_on')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
