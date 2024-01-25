<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('ratings');
            $table->string('position');
            $table->string('version');
            $table->string('ps'); 
            $table->integer('ski');
            $table->integer('wf');
            $table->string('wr');
            $table->integer('pac');
            $table->integer('sho');
            $table->integer('pas');
            $table->integer('dri');
            $table->integer('def');
            $table->integer('phy');
            $table->string('body');
            $table->integer('popularity');
            $table->integer('bs');
            $table->integer('igs')->nullable();
            $table->string('club');
            $table->string('league');
            $table->string('country');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};
