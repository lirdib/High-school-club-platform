<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjektetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projektet', function (Blueprint $table) {
            $table->id('idea');
            $table -> string('dega');
            $table -> string('anetaret');
            $table -> string('projekti');
            $table -> string('supervizori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projektet');
    }
}
