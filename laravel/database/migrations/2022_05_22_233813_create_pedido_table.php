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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id();
            $table->date('data_venda');
            $table->int('quantidade_produtos');
            
            /*chaves estrangeiras */
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('client');

            $table->unsignedBigInteger('id_products');
            $table->foreign('id_products')->references('id')->on('products');
    
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
        Schema::dropIfExists('pedido');
    }
};
