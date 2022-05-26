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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('desc_produto');
            $table->integer('valor_produto');
            $table->string('barCode_produto',30);
            $table->date('validade_produto');
            $table->string('marca');

            $table->unsignedBigInteger('id_acesso');
            $table->foreign('id_acesso')->references('id')->on('acsssos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
