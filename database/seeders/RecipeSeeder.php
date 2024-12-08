<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table to delete all existing data
        DB::table('recipes')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert new data
        DB::table('recipes')->insert([
            ['id' => 1, 'name' => "A l'ancienne",],
            ['id' => 2, 'name' => 'Blanc',],
            ['id' => 3, 'name' => 'Burger',],
            ['id' => 4, 'name' => 'Campagne',],
            ['id' => 5, 'name' => 'Ciabatta',],
            ['id' => 6, 'name' => 'Complet',],
            ['id' => 7, 'name' => 'Orge',],
            ['id' => 8, 'name' => 'Panini',],
            ['id' => 9, 'name' => 'Semoule',],
            ['id' => 10, 'name' => 'Tradition',],
            ['id' => 11, 'name' => 'Margarine',],
            ['id' => 12, 'name' => 'Pur beurre',],
            ['id' => 13, 'name' => 'Matière grasse végétale',],
        ]);
    }
}
