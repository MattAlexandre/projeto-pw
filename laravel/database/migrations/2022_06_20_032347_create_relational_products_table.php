<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relational_products', function (Blueprint $table) {
            $table->id();
            $table->float('price');
          
            /*foreing key id products  */

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');

            /*foreing key id company */
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('company');

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
        Schema::dropIfExists('relational_products');
    }
};
