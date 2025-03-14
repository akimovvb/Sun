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
        Schema::table('comments', function (Blueprint $table) {
            $table->morphs('commentable');
            $table->foreignId('profile_id')->nullable()->constrained('profiles');
            $table->foreignId('parent_id')->nullable()->constrained('comments');
            $table->foreignId('user_id')->nullable()->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropMorphs('commentable');
            $table->dropConstrainedForeignId('profile_id');
            $table->dropConstrainedForeignId('parent_id');
            $table->dropConstrainedForeignId('user_id');
        });
    }
};
