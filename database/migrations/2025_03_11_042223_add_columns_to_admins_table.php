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
        Schema::table('admins', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->text('password');
            $table->string('extra_columnN1');
            $table->string('extra_columnN2');
            $table->string('roles');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admins', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('password');
            $table->dropColumn('extra_columnN1');
            $table->dropColumn('extra_columnN2');
            $table->dropColumn('roles');
        });
    }
};
