<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use SoftDelete;
use Illuminate\Support\Facades\DB;

class CreateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('Text');
            // $table->integer('chat_id');
            // $table->foreign('chat_id')->references('id')->on('chat_line');
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
        Schema::dropIfExists('message');
        DB::statement("SET foreign_key_checks=1");
      
    }
}
