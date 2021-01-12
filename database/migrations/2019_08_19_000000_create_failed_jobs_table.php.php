<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
   Schema::create('serwis', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nazwa');
            $table->string('ulica');
            $table->string('kod_pocztowy');
            $table->string('miasto');
            $table->integer('telefon');
            $table->string('email');
            $table->string('nazwa_urządzenia');
            $table->string('numer_fabryczny');
            $table->longText('opis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serwis');
    }
}
