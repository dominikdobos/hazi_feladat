<?php

use App\Models\Copy;
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
        Schema::create('copies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('book_id')->references('id')->on('books');
            $table->timestamps();
        });

        Copy::create(
            [
                "book_id" => 1,
                "user_id" => 1,
            ]
        );

        Copy::create(
            [
                "book_id" => 2,
                "user_id" => 2,
            ]
        );

        Copy::create(
            [
                "book_id" => 3,
                "user_id" => 3,
            ]
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copies');
    }
};
