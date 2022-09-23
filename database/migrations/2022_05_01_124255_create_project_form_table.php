<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_form', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('emri_I_nxenesit');
            $table->string('emri_I_projektit');
            $table->string('pershkrimi_i_projektik');
            $table->string('klubi');
            $table->string('statusi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_form');
    }
}
