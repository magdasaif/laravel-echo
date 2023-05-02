<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                "name" => "prod 1",
                "price" => 10,
                "stock" => 52,
            ],
            [
                "name" => "prod 2",
                "price" => 20,
                "stock" => 50,
            ],
            [
                "name" => "prod 3",
                "price" => 30,
                "stock" => 21,
            ],
            [
                "name" => "prod 4",
                "price" => 40,
                "stock" => 254,
            ],
            [
                "name" => "prod 5",
                "price" => 50,
                "stock" => 30,
            ],
        ]);
    }
}
