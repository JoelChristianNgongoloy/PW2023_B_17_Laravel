<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_pemesanan')->unsigned(); // Presumed to be a foreign key
            $table->string('tulis_review');
            $table->timestamps(); // Opsional, jika Anda ingin mencatat waktu pembuatan dan update

            // Jika ada foreign key, tambahkan seperti ini:
            $table->foreign('id_pemesanan')->references('id')->on('pemesanan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review');
    }
}

