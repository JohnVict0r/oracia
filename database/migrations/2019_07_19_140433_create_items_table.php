<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('licitation_id');
            $table->string('order');
            $table->string('measure');
            $table->unsignedInteger('quantity');
            $table->float('unity_value');
            $table->text('description');
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::table('items', function (Blueprint $table){
            $table->foreign('licitation_id')->references('id')->on('licitations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
