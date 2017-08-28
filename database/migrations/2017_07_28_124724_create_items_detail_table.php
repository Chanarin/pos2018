<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_detail', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('ref_id')->index()->nullable(); // open id
            $table->integer('item_id')->index()->nullable();

            $table->string('item_code')->nullable();
            $table->string('title')->index()->nullable();
            $table->string('unit')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->double('qty')->nullable();
            $table->double('cost')->nullable();
            $table->string('note')->nullable();

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
        Schema::dropIfExists('items_detail');
    }
}
