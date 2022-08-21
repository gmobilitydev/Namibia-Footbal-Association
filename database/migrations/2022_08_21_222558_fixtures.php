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
        //
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('home_team')->constrained('teams');
            $table->foreignId('away_team')->constrained('teams');
            $table->string('date');
            $table->tinyInteger('home_result')->default(0);
            $table->tinyInteger('away_result')->default(0);
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
        //
        Schema::dropIfExists('fixtures');
    }
};
