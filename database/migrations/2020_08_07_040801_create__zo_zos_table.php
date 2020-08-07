<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoZosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ZoZos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->String('name')->nullable();
            $table->float('wight')->nullable();
            $table->integer('age')->nullable();
            $table->date('birthday')->nullable();
            $table->text('story')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ZoZos');
    }
}
