<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('order_date');
            $table->dateTime('shipped_date');
            $table->string('ship_name', 50);
            $table->string('ship_address1', 500);
            $table->string('ship_address2', 500);
            $table->string('ship_city', 255);
            $table->string('ship_state', 255);
            $table->string('ship_postal_code', 15);
            $table->string('ship_country', 255);
            $table->decimal('shipping_fee', 19, 4);
            $table->string('payment_type', 255);
            $table->dateTime('paid_date');
            $table->string('order_status', 50);
            // ccot khoa ngoai
            $table->integer('employee_id')->unsigned();
            $table->integer('customer_id')->unsigned();

            //Tao lien ket khoa ngoai
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->foreign('customer_id')->references('id')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
