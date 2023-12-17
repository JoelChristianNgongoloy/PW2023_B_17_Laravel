<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_mobil')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->enum('metode_pembayaran', ['BNI', 'BCA', 'BRI', 'MANDIRI']);
            $table->enum('status', ['Dibayar', 'Diterima', 'Batal']);

            // Foreign key constraints
            $table->foreign('id_mobil')->references('id')->on('mobils')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanan');
    }
}
