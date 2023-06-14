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
        //
        Schema::create('user_activities', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->foreignId('created_by')->constrained('users')->cascadeOnUpdate()->noActionOnDelete();
            $table->timestamp('created_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::drop('user_activities');
    }
};
