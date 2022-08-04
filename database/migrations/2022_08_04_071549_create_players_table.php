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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('surname');
            $table->date('DOB');
            $table->foreignId('team_id')->nullable()->nullOnDelete();
            $table->enum('gender',['male', 'female', 'other']);
            $table->string('positions', ['Goalkeeper', 'Right Fullback', 'Left Fullback', 'Center Back', 'Sweeper', 'Defending/Holding Midfielder', 'Right Midfielder/Winger', 'Central/Box-to-Box Midfielder','Striker', 'Attacking Midfielder/Playmaker', 'Left Midfielder/Wingers']);
            $table->string('nationality');
            $table->float('height');
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
        Schema::dropIfExists('players');
    }
};
