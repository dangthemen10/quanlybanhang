<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code', 20);
            $table->string('product_name', 500);
            $table->text('image');
            $table->string('description', 200);
            $table->decimal('standard_code', 19, 4);
            $table->decimal('list_price', 19, 4);
            $table->float('quantily_per_unit', 8, 2);
            $table->tinyInteger('discontinued');
            $table->float('discount', 8, 2);

            // ccot khoa ngoai
            $table->integer('category_id')->unsigned();
            $table->integer('supplier_id')->unsigned();

            //Tao lien ket khoa ngoai
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
