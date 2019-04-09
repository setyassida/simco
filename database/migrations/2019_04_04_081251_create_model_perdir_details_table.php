<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPerdirDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdir_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('perihal');
            $table->binary('file_doc')->nullable();
            $table->binary('file_ppt')->nullable();
            $table->binary('file_pdf')->nullable();
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
        Schema::dropIfExists('perdir_details');
    }
}
