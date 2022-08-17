<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->date('date');
            $table->string('time_played')->nullable();
            $table->foreignId('league_id');
            $table->foreignId('team_id');
            $table->tinyInteger('home_score')->default(0)->nullable();
            $table->tinyInteger('away_score')->default(0)->nullable();

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
        Schema::dropIfExists('fixtures');
    }
};
