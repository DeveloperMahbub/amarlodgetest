<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactoryManagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factory_management', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('factoryDate')->nullable();
            $table->string('factoryCode')->nullable();
            $table->string('factoryName')->nullable();
            $table->string('factoryPhone')->nullable();
            $table->string('factoryValue')->nullable();
            $table->string('factoryaddress')->nullable();
            $table->string('designApproved')->nullable();
            $table->string('designNotApproved')->nullable();
            $table->string('receivedDate')->nullable();
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
        Schema::dropIfExists('factory_management');
    }
}
