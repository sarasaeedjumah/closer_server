<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateSeenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seen', function (Blueprint $table) {
            $table->id();
            // $table->integer('chat_id');
            // $table->foreign('chat_id')->references('id')->on('chat_line');


            // $table->integer('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            
            // $table->softdelete();
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
        Schema::dropIfExists('seen');
        DB::statement("SET foreign_key_checks=1");
    }
}
