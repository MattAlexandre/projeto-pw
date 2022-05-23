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
            $table->unsignedBigInteger('user_id');
            $table->foreign('id')->references('id')->on('users');

            $table->unsignedBigInteger('products_id');
            $table->foreign('id')->references('id')->on('products');



    
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
