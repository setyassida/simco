<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelPerdirRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perdir_relations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_perdir_1')->unsigned();
            $table->bigInteger('id_perdir_2')->unsigned();
            $table->bigInteger('id_relation');
            $table->text('comment');
            $table->timestamps();

            $table->foreign('id_perdir_1')->references('id')->on('perdirs');
            $table->foreign('id_perdir_2')->references('id')->on('perdirs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perdir_relations');
    }
}
