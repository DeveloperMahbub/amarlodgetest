<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQcNewproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qc_newproducts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('received_date')->nullable();
            $table->string('factoryCode')->nullable();
            $table->string('factoryphone')->nullable();
            $table->string('total_pieces')->nullable();
            $table->string('reject_pieces')->nullable();
            $table->string('costPer_pieces')->nullable();
            $table->string('total_cost')->nullable();
            $table->string('alternative_product')->nullable();
            $table->string('used_fabric')->nullable();
            $table->string('altReceive_date')->nullable();
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
        Schema::dropIfExists('qc_newproducts');
    }
}
