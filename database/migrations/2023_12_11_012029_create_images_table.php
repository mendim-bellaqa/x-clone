<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->unsignedBigInteger('mediable_id');
            $table->string('mediable_type');
            $table->unsignedBigInteger('tweet_id')->nullable();
            $table->foreign('tweet_id')->references('id')->on('tweets')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropForeign(['tweet_id']);
            $table->dropColumn('tweet_id');
        });

        Schema::dropIfExists('images');
    }
}
