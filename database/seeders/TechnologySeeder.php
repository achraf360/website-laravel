<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologySeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        // Truncate the table to delete all existing data
        DB::table('technologies')->truncate();

        // Re-enable foreign key checks
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // Insert new data
        DB::table('technologies')->insert([
            ['id' => 1, 'name' => 'Cru surgelé',],
            ['id' => 2, 'name' => 'Pré-poussée',],
            ['id' => 3, 'name' => 'Cru',],
            ['id' => 4, 'name' => 'Cuit',],
            ['id' => 5, 'name' => 'Précuit',],
            ['id' => 6, 'name' => 'Précuit Four a Sole',],
            ['id' => 7, 'name' => 'Précuit surgelé',],
            ['id' => 8, 'name' => 'A décongeler',],
            ['id' => 9, 'name' => 'Passage au grill',],
        ]);
    }
}
