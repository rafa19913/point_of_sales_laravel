<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('id_sale');
            $table->double('total');
            $table->string('note')->nullable();
       
            /*$table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('users');

            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id_customer')->on('customers');
            */
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
        Schema::dropIfExists('sales');
    }
}
