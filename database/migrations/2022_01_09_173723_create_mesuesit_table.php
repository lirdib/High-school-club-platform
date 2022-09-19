<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMesuesitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesuesit', function (Blueprint $table) {
          $table->id('idMesues');
          $table->string('emri');
          $table->string('mbiemri');
          $table->string('lenda');
          $table->string('dega');
          $table->string('admin');
          $table->string('klasa_kujdesari');
          $table->unsignedBigInteger('klubi_ne_kujdesari');
          $table->foreign('klubi_ne_kujdesari') ->references('id')->on('klubet');
          $table->string('supervizor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('klubet');
        //$table->dropForeign('klubet_user_id_foreign');
        //$table->dropIndex('klubet_user_id_index');
        //$table->dropColumn('user_id');
    }
}
