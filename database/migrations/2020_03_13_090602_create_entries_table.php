<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('form_id')->unsigned();
            $table->json('values');
            $table->timestamps();
        });

        Schema::table('entries', function (Blueprint $table) {
            $table->foreign('form_id')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('entries', function (Blueprint $table) {
            $table->dropForeign('entries_form_id_foriegn');
        });

        Schema::dropIfExists('entries');
    }
}
