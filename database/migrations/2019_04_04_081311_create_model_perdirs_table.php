<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPerdirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdirs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomor');
            $table->string('nama');
            $table->date('tanggal_terbit');
            $table->boolean('is_active')->nullable();
            $table->bigInteger('id_areas')->unsigned();
            $table->bigInteger('id_perdir_jenis')->unsigned();
            $table->bigInteger('id_perdir_details')->unsigned();
            $table->timestamps();
            $table->foreign('id_areas')->references('id')->on('areas');
            $table->foreign('id_perdir_jenis')->references('id')->on('perdir_jenis');
            $table->foreign('id_perdir_details')->references('id')->on('perdir_details');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perdirs');
    }
}
