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
        Schema::table('profiles', function (Blueprint $table) {
            
            $table->integer('phone')->nullable();
            $table->text('address')->nullable();
            $table->text('gender')->nullable();
            $table->text('fake_columnN1')->nullable();
            $table->text('fake_columnN2')->nullable();
            $table->text('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropColumn('users')->nullable();
            $table->dropColumn('phone')->nullable();
            $table->dropColumn('address')->nullable();
            $table->dropColumn('gender')->nullable();
            $table->dropColumn('fake_columnN1')->nullable();
            $table->dropColumn('fake_columnN2')->nullable();
            $table->dropColumn('name')->nullable();
        });
    }
};
