<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonateitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donateitems', function (Blueprint $table) {
            $table->integer('item_id')->autoIncrement();
            $table->integer('user_id');
            $table->string('item_name');
            $table->string('item_category');
            $table->binary('item_image')->nullable();
            $table->string('item_reason');
            $table->timestamp('added_on')->useCurrent();
            $table->integer('item_status')->default('0')->change();
            $table->integer('posting_status')->default('0')->change();

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
        Schema::dropIfExists('donateitems');
    }
}
