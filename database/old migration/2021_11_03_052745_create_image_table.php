<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
class CreateImageTable extends Migration
{
    
    public function up()
    {
        Schema::create('image', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->timestamps();
        });
    }
    public function down()
    {
        DB::statement("SET foreign_key_checks=0");
        Schema::dropIfExists('image');
        DB::statement("SET foreign_key_checks=1");
    }
}
