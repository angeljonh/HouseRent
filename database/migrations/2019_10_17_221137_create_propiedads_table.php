<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropiedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('domicilio');
            $table->UnsignedBigInteger('numero');
            $table->string('zona');
            $table->UnsignedBigInteger('cp');
            $table->UnsignedBigInteger('precio');
            $table->UnsignedBigInteger('area');
            $table->UnsignedBigInteger('camas');
            $table->UnsignedBigInteger('cuartos');
            $table->UnsignedBigInteger('baños');
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
        Schema::dropIfExists('propiedads');
    }
}
