<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Example migration snippet
        public function up()
        {
            Schema::table('images', function (Blueprint $table) {
                $table->foreignId('tweet_id')->default(0)->change();
            });
        }

        public function down()
        {
            Schema::table('images', function (Blueprint $table) {
                $table->foreignId('tweet_id')->change();
            });
        }

}
