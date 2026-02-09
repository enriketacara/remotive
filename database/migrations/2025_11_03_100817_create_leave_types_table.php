<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('leave_types', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique(); // vacation, sick, personal, unpaid
            $table->string('display_name');
            $table->boolean('is_paid')->default(true);
            $table->boolean('requires_document')->default(false);
            $table->string('color')->nullable(); // e.g. #3b82f6 or token
            $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_types');
    }
};
