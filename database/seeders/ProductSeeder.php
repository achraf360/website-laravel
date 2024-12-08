<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    // Truncate the table to delete all existing data
    DB::table('products')->truncate();

    // Insert new data
    DB::table('products')->insert([
      [
        'id' => 1,
        'name' => "Baguette tradition nature surgelée",
        'ref' => "PFU000111",
        'slug' => 'baguette-tradition-nature-surgelee',
        'weight' => 250,
        'dimensions' => 45,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Baguette-tradition-nature.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 2,
        'name' => "Baguette tradition olives surgelée",
        'ref' => "PFU000112",
        'slug' => 'baguette-tradition-olives-surgelee',
        'weight' => 250,
        'dimensions' => 45,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Baguette-tradition-olives.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 3,
        'name' => "Baguette tradition pavot surgelée",
        'ref' => "PFU000113",
        'slug' => 'baguette-tradition-pavot-surgelee',
        'weight' => 250,
        'dimensions' => 45,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Baguette-tradition-pavot.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 4,
        'name' => "Baguette tradition sésame surgelée",
        'ref' => "PFU000114",
        'slug' => 'baguette-tradition-sesame-surgelee',
        'weight' => 250,
        'dimensions' => 45,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Baguette-tradition-sésame.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 5,
        'name' => "Baguettine surgelée",
        'ref' => "PFU000110",
        'slug' => 'baguettine-surgelee',
        'weight' => 60,
        'dimensions' => 21,
        'packaging' => 80,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 1,
        'image' => '/storage/images/products/Baguettine.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 6,
        'name' => "Flute grainée surgelée",
        'ref' => "PFU000441",
        'slug' => 'flute-grainee-surgelee',
        'weight' => 280,
        'dimensions' => 48,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Flute-grainé.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 7,
        'name' => "Flute campagne surgelée",
        'ref' => "PFU000438",
        'slug' => 'flute-campagne-surgelee',
        'weight' => 280,
        'dimensions' => 48,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 10,
        'image' => '/storage/images/products/Flute-campagne.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 8,
        'name' => "Flute complète surgelée",
        'ref' => "PFU000387",
        'slug' => 'flute-complete-surgelee',
        'weight' => 250,
        'dimensions' => 45,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 6,
        'image' => '/storage/images/products/Flute-complète.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 9,
        'name' => "Flute nature a l’ancienne surgelée",
        'ref' => "PFU000115",
        'slug' => 'flute-nature-surgelee',
        'weight' => 250,
        'dimensions' => 44,
        'packaging' => 25,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 1,
        'image' => '/storage/images/products/Flute-nature.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 10,
        'name' => "Flute olive Plus a l’ancienne surgelée",
        'ref' => "PFU000116",
        'slug' => 'flute-olive-plus-surgelee',
        'weight' => 250,
        'dimensions' => 250,
        'packaging' => 30,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 1,
        'image' => '/storage/images/products/Flute-olive-Plus.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 11,
        'name' => "Flute pavot à l’ancienne auth surgelée",
        'ref' => "PFU000426",
        'slug' => 'flute-pavot-a-lancienne-auth-surgelee',
        'weight' => 280,
        'dimensions' => 48,
        'packaging' => 20,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 1,
        'image' => '/storage/images/products/Flute-pavot-à-lancienne.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
      [
        'id' => 12,
        'name' => "Flute sésame a l’ancienne surgelée",
        'ref' => "PFU000118",
        'slug' => 'flute-semoule-copie-surgelee',
        'weight' => 250,
        'dimensions' => 44,
        'packaging' => 25,
        'is_active' => 1,
        'technology_id' => 5,
        'category_id' => 1,
        'recipe_id' => 1,
        'image' => '/storage/images/products/Flute-sésame.jpg',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed ante justo. Integer euismod libero id mauris malesuada tincidunt. Vivamus commodo nulla ut lorem rhoncus aliquet. Duis dapibus augue vel ipsum pretium, et venenatis sem blandit. Quisque ut erat vitae nisi ultrices placerat non eget velit. Integer ornare mi sed ipsum lacinia, non sagittis mauris blandit. Morbi fermentum libero vel nisl suscipit, nec tincidunt mi consectetur.'
      ],
    ]);
  }
}
