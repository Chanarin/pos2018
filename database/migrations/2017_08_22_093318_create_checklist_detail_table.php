<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChecklistDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id')->index()->nullable(); // open id
            $table->integer('item_id')->index()->nullable();
            $table->string('item_code')->nullable();
            $table->string('title')->index()->nullable();
            $table->string('unit')->nullable();
            $table->double('num_qty')->nullable();
            $table->double('qty')->nullable();
            $table->double('count_qty')->nullable();
            $table->double('cost')->nullable();
            $table->double('price')->nullable();
            $table->double('discount')->nullable();
            $table->string('note')->nullable();

            $table->text('item_detail')->nullable();//json detail for item

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('checklist_detail');
    }
}
