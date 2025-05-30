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
        Schema::create('project_teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('employee_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('hourly_rate');
            $table->bigInteger('total_hours');
            $table->bigInteger('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_teams');
    }
};
