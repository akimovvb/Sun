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
                $table->morphs('commentable');
                $table->foreignId('profile_id')->nullable()->index()->constrained('profiles');
                $table->foreignId('parent_id')->nullable()->index()->constrained('comments');
                $table->foreignId('user_id')->nullable()->constrained('users');
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
