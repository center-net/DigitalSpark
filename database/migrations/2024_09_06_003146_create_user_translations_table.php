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
        Schema::create('user_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('address');
            $table->unique(['user_id','locale']);
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_translations');
    }
};
