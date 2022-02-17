<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

//use  SoftDelete;
class CreateChatLineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_line', function (Blueprint $table) {
            $table->id();
            $table->integer('from');
            $table->integer('to');
            $table->text('text');
          //$table->('user_id')->references('id')->on('users');
            $table->enum('replay',['Yes','No']);
            $table->softDeletes();
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
        DB::statement("SET foreign_key_checks=0");
        Schema::dropIfExists('chat_line');
        DB::statement("SET foreign_key_checks=1");

    }
}
