<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Product();

        $product->name = 'Brillos';
        $product->price = 1234;
        $product->description = 'Son brillos bonitos';

        $product->save();
    }
}
