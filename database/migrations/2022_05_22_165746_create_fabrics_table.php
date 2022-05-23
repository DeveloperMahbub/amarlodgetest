<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabrics', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date')->nullable();
            $table->string('purchaseCode')->nullable();
            $table->string('buyerName')->nullable();
            $table->string('buyerPhone')->nullable();
            $table->string('fabricValue')->nullable();
            $table->string('buyeraddress')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('fabric_name')->nullable();
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
        Schema::dropIfExists('fabrics');
    }
}
