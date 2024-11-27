<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Products;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $categories =[
            "élelmiszer",
            "zöldség-gyümölcs",
            "pékáru",
            "ital",
            "állateledel",
            "háztartási cikkek",
        ];

        foreach ($categories as $category) {
            Category::create([
                "name" => $category,
            ]);
        }

        $products =[
            [
            "name" => "Liszt",
            "categoryId" => 1,
            "stock" => 400,
            "price" => 356
            ],
            [
            "name" => "Rizs",
            "categoryId" => 1,
            "stock" => 170,
            "price" => 530
            ],
            [
            "name" => "Mandarin",
            "categoryId" => 2,
            "stock" => 90,
            "price" => 890
            ],
            [
            "name" => "Kakaós csiga",
            "categoryId" => 3,
            "stock" => 70,
            "price" => 189
            ],
            [
            "name" => "Sajtos kifli",
            "categoryId" => 3,
            "stock" => 20,
            "price" => 230
            ],
            [
            "name" => "Coca-Cola",
            "categoryId" => 4,
            "stock" => 0,
            "price" => 790
            ],
            [
            "name" => "Fanta Narancs",
            "categoryId" => 4,
            "stock" => 250,
            "price" => 579
            ],
            [
            "name" => "Sárgarépa",
            "categoryId" => 2,
            "stock" => 300,
            "price" => 590
            ],
            [
            "name" => "Karalábé",
            "categoryId" => 2,
            "stock" => 230,
            "price" => 369
            ],
            [
            "name" => "Lolo kutyaeledel",
            "categoryId" => 5,
            "stock" => 200,
            "price" => 667
            ],
            [
            "name" => "Papírtörlő",
            "categoryId" => 6,
            "stock" => 130,
            "price" => 899
            ],
            [
            "name" => "Silan öblítő",
            "categoryId" => 6,
            "stock" => 80,
            "price" => 2699
            ]
        ];

        foreach ($products as $product) {
            $product = Product::create($product);
        }
    }
}
