<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use SoftDelete;
class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('path');
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
        Schema::dropIfExists('files');
        DB::statement("SET foreign_key_checks=1");
      
    }
}
