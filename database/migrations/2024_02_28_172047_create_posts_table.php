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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('content');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->longText('summary')->nullable();
            $table->string('keywords')->nullable();
            // add view conut
            $table->bigInteger('views')->default(0);
            $table->boolean('published')->default(false);
            $table->unsignedBigInteger('post_category_id')->nullable();
            $table->foreign('post_category_id')->references('id')->on('post_categories')->onDelete('set null');;
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
