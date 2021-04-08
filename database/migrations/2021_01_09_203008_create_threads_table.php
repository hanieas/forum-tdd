<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threads', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('channel_id')->unsigned();
            $table->string('title');
            $table->text('body');
            $table->timestamps();
        });
//        Schema::table('threads', function($table) {
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->foreign('channel_id')->references('slug')->on('channels');
//        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
