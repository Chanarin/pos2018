<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_transaction', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ref_id')->index()->nullable();
            $table->string('ref_type')->index()->nullable();
            $table->integer('item_id')->index()->nullable();
            $table->string('unit')->index()->nullable();
            $table->double('num_qty')->index()->nullable();
            $table->double('qty')->index()->nullable();
            $table->double('cost')->index()->nullable();//ថ្លៃដើម
            $table->double('price')->index()->nullable();
            $table->double('discount')->index()->nullable();
            $table->date('tran_date')->index()->nullable();
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
        Schema::dropIfExists('items_transaction');
    }
}
