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
        Schema::create('match_predictions', function (Blueprint $table) {
            $table->id();
            $table->unsignedSmallInteger("predicted_home_goal");
            $table->unsignedSmallInteger("predicted_away_goal");
            $table->unsignedSmallInteger("points_home_goal")->nullable();
            $table->unsignedSmallInteger("points_away_goal")->nullable();
            $table->unsignedSmallInteger("points_sign")->nullable();
            $table->unsignedSmallInteger("points_bonus")->nullable();
            $table->foreignId('match_id')->constrained('matches');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('match_predictions');
    }
};
