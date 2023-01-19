<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $categories = Category::pluck('id')->toArray();
        return [
            //  'category_id'=>Category::factory(),
            'product_name' => fake()->word(),
            'description' => fake()->sentence(20),
            'price' => fake()->randomFloat(1, 2, 20),
            'quantity_in_stock' => fake()->numberBetween(50, 150),
            'image_path' => "/assets/products/" . fake()->numberBetween(1, 48) . ".jpg",
            'quantity' => fake()->numberBetween(1, 1000),
            'unit' => Str::random(rand(2, 3)),
            'category_id' => fake()->numberBetween(1, 5),


        ];
    }
}
