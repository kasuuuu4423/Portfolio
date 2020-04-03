<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug', 50);
            $table->string('name', 50);
            $table->string('period', 50);
            $table->string('description', 400);
            $table->string('technique', 400);
            $table->string('url', 50);
            $table->string('img', 50);
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
        Schema::dropIfExists('Works');
    }
}
