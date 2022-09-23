<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConnectionWithClubsToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projektet', function (Blueprint $table) {
            $table->foreignId('clubs_id') ->references('id')->on('klubet')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projektet', function (Blueprint $table) {
            $table->dropColumn('klubi');
        });
    }
}
