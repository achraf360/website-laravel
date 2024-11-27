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
            $table->string('header_image')->nullable()->after('image');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->boolean('is_active')->default(true)->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('header_image');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('is_active');
        });
    }
};
