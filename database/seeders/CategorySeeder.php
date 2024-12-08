<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {

    // Disable foreign key checks
    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    // Truncate the table to delete all existing data
    DB::table('categories')->truncate();

    // Re-enable foreign key checks
    DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    // Insert new data
    DB::table('categories')->insert([
      ['id' => 1, 'name' => "Boulangerie", 'slug' => 'boulangerie', 'image' => '/storage/images/categories/BOULANGERIE.jpg', 'description' => 'Le secret de nos produits boulangerie réside dans notre savoir-faire historique artisanal que nous avons réussi à réaliser à échelle industrielle,
                                                            cela nous permet de vous offrir une gamme conçue par des chefs exécutifs, fabriquée à partir de matières premières qualitatives rigoureusement sélectionnées, 
                                                            grâce à notre levain « maison », nous réussissons un développement optimal avec un goût de rustique. 
                                                            Notre gamme boulangerie est une sélection harmonieuse et diversifiée de texture composée de pains précuits longs, ronds, petits, et grands pains, pour une présentation complète et diversifiée du panier ou du buffet boulangerie.'],
      ['id' => 2, 'name' => 'Viennoiserie', 'slug' => 'viennoiserie', 'image' => '/storage/images/categories/VIENNOISERIE.jpg', 'description' => 'Avec DELI’S, votre viennoiserie est garantie sous n’importe quelle circonstance avec toujours un produit régulier. 
                                                              Notre viennoiserie est facile à mettre en œuvre présentée en deux technologies, en cru surgelé, et en prêt à cuire. 
                                                              Notre gamme viennoiserie est une gamme large en termes de variantes classiques et autres répondant à différents besoins et standards de qualité.'],
      ['id' => 3, 'name' => 'Pâtisserie', 'slug' => 'patisserie', 'image' => '/storage/images/categories/PATISSERIE.jpg', 'description' => 'Une gamme diverse en goûts et en couleurs de pâtisserie fine pour des buffets et des vitrines riches et appétissantes.
                                                            Nos pâtisseries sont personnalisables et faciles à mettre en œuvre pour répondre à tout moment de consommation, un pur plaisir de gourmandise pour vos clients.'],
      ['id' => 4, 'name' => 'Cafés Gourmands', 'slug' => 'cafes-gourmands', 'image' => '/storage/images/categories/CAFES-GOURMANDS.jpg', 'description' => 'Rien n’est plus pratique que d’avoir toujours à votre disposition une gamme de pâtisseries de gourmandise ou d’accompagnement du café de vos clients&nbsp;!
                                                                 La catégorie des cafés gourmands est une sélection diversifiée de mignardises, moelleux, macarons… proposées en surgelé pour plus de praticité et flexibilité.'],
      ['id' => 5, 'name' => 'Snacking', 'slug' => 'snacking', 'image' => '/storage/images/categories/SNACKING.jpg', 'description' => 'Une gamme de produits pour cocktails et repas pratiques, facile à mettre en œuvre pour un service à la minute.'],
      ['id' => 6, 'name' => 'Produits Service', 'slug' => 'produits-services', 'image' => '/storage/images/categories/PRODUITS-SERVICES.jpg', 'description' => 'Une offre de produits semi finis qui vous facilite vos préparations pâtissières, vous permettant ainsi d’élaborer vos recettes de manière très pratique.'],
    ]);
  }
}
