<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Add the technology_id and recipe_id fields if they do not exist
            if (!Schema::hasColumn('products', 'technology_id')) {
                $table->unsignedBigInteger('technology_id')->nullable()->after('id');
            }
            if (!Schema::hasColumn('products', 'recipe_id')) {
                $table->unsignedBigInteger('recipe_id')->nullable()->after('technology_id');
            }

            // Add foreign key constraints with ON DELETE RESTRICT
            $table->foreign('technology_id')->references('id')->on('technologies')->onDelete('restrict');
            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('restrict');

            // Ensure category_id has ON DELETE RESTRICT constraint
            $table->dropForeign(['category_id']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
        });

        // Update existing rows to have valid technology_id and recipe_id values
        DB::table('products')->update([
            'technology_id' => DB::table('technologies')->first()->id,
            'recipe_id' => DB::table('recipes')->first()->id,
        ]);

        // Make the technology_id and recipe_id fields not nullable
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('technology_id')->nullable(false)->change();
            $table->unsignedBigInteger('recipe_id')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Drop the foreign key constraints
            $table->dropForeign(['technology_id']);
            $table->dropForeign(['recipe_id']);
            $table->dropForeign(['category_id']);

            // Drop the technology_id and recipe_id fields if they exist
            if (Schema::hasColumn('products', 'technology_id')) {
                $table->dropColumn('technology_id');
            }
            if (Schema::hasColumn('products', 'recipe_id')) {
                $table->dropColumn('recipe_id');
            }

            // Restore the original foreign key constraint for category_id
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }
};
