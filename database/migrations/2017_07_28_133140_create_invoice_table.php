<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_number')->nullable();
            $table->date('_date_')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('description')->nullable();
            $table->double('deposit')->nullable();
            $table->integer('user_id')->nullable();
            $table->enum('status',['PENDING','COMPLETE'])->default('PENDING');
            $table->date('complete_date')->nullable();
            $table->double('complete_price')->nullable();
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
        Schema::dropIfExists('invoice');
    }
}
