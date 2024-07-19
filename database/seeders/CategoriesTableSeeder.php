<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'nomCateg' => 'Électroniques'
            ],
            [
                'nomCateg' => 'Mode'
            ],
            [
                'nomCateg' => 'Meubles'
            ],
            [
                'nomCateg' => 'Jouets pour enfant'
            ],
            [
                'nomCateg' => 'Beauté'
            ],
            [
                'nomCateg' => 'Bricolage'
            ],
        ]);
    }
}
