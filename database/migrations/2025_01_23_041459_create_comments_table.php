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
            Schema::create('comments', function (Blueprint $table) {
                $table->id();
                $table->foreignId('post_id')->index()->constrained('posts');
                $table->foreignId('profile_id')->index()->constrained('profiles');
                $table->foreignId('parent_id')->nullable()->index()->constrained('comments');
                $table->foreignId('user_id')->constrained('users');
                $table->text('content')->nullable();
                $table->string('author')->nullable();
                $table->unsignedInteger('likes')->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
