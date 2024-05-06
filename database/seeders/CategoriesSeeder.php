<?php

namespace Database\Seeders;

use App\Models\categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Home Decor',
            'Jewelry and Accessories',
            'Textiles and Fabrics',
            'Wellness and Beauty Products'
        ];

        foreach ($categories as $category) {
            categorie::create(['name' => $category]);
        }
    }
}
