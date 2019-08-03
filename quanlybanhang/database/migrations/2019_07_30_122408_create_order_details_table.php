<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->decimal('quantily', 18, 4);
            $table->decimal('unit_price', 19, 4);
            $table->double('discount');
            $table->string('order_detail_status', 50);
            $table->dateTime('date_allocated');
            //Tao cot khoa ngoai
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            //Tao lien ket khoa ngoai
            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
