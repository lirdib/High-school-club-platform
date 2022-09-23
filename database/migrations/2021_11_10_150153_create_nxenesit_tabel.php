<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNxenesitTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nxenesit_tabel', function (Blueprint $table) {
            $table->id('id');
            $table->string('emri');
            $table->string('mbiemri');
            $table->string('dega');
            $table->integer('viti');
            $table->string('klasa');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nxenesit_tabel');
    }
}
