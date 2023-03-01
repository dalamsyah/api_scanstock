<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStockcount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stockcount', function (Blueprint $table) {
            $table->bigIncrements('idstokcount');
            $table->string('item_code', 30);
            $table->string('sn', 30);
            $table->string('sn2', 30);
            $table->integer('scan');
            $table->boolean('upload', 0);
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
        Schema::dropIfExists('stockcount');
    }
}
