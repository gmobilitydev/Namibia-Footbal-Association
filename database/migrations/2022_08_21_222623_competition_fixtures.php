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
        Schema::create('competition_fixtures', function (Blueprint $table) {
            $table->foreignId('fixture_id')->constrained('fixtures');
            $table->foreignId('competition_id')->constrained('competitions');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('competition_fixtures');

    }
};
