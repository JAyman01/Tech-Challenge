<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participations', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('id_challenge');

            $table->foreign('id')->unsigned()->references('id')->on('users');;
            $table->foreign('id_challenge')->unsigned()->references('id_challenge')->on('challenges');

            $table->primary(['id', 'id_challenge']);
            $table->string('code');
            $table->boolean('winner')->default(false);
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
        Schema::dropIfExists('participations');
    }
}
