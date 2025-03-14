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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('title')->nullable();
            $table->text('name')->nullable();
            $table->text('fake_columN1')->nullable();
            $table->text('fake_columN2')->nullable();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('title')->nullable();
            $table->dropColumn('name')->nullable();
            $table->dropColumn('fake_columN1')->nullable();
            $table->dropColumn('fake_columN2')->nullable();
        });
    }
};
