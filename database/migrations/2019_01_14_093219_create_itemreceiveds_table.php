<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemreceivedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemreceiveds', function (Blueprint $table) {
            $table->increments('item_received_id');
            $table->integer('user_id');
            $table->timestamp('added_on')->useCurrent();

            $table->foreign('user_id')
                    ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itemreceiveds');
    }
}
