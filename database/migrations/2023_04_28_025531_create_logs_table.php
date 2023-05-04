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
        if (Schema::hasTable('logs')) return;
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('log_application_id')->constrained('log_applications')->references('uuid')->cascadeOnDelete();
            $table->integer('level')->default(0);
            $table->string('origin');
            $table->string('message');
            $table->string('context')->nullable();
            $table->string('extra')->nullable();
            $table->ipAddress()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logs');
    }
};
