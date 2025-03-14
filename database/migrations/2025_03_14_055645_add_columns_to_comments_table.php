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
            $table->string('content')->nullable();
             $table->string('author')->nullable();
             $table->unsignedInteger('likes')->nullable();
             $table->text('fake_columnN1')->nullable();
             $table->text('fake_columnN2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            $table->dropColumn('content');
            $table->dropColumn('author');
            $table->dropColumn('likes');
            $table->dropColumn('fake_columnN1');
            $table->dropColumn('fake_columnN2');
        });
    }
};
