<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTweetsTable extends Migration
{
    public function up()
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->text('content')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->text('content')->change();
        });
    }
    
}
