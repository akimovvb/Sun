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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->text('content')->nullable();          
            $table->boolean('is_published')->default(true);
            $table->string('image_path')->unique()->nullable();          
            $table->unsignedInteger('views')->nullable();
            $table->dateTime('published_at')->nullable();
            $table->text('extra_atributeN1')->nullable();
            $table->text('extra_atributeN2')->nullable();
            $table->text('name')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('content');
            $table->dropColumn('is_published');
            $table->dropColumn('image_path');
            $table->dropColumn('views');
            $table->dropColumn('published_at');
            $table->dropColumn('extra_atributeN1');
            $table->dropColumn('extra_atributeN2');
            $table->dropColumn('name');
        });
    }
};
