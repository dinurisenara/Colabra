<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('space_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->integer('capacity');
            $table->decimal('hourly_rate');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('space_types');
    }
};
