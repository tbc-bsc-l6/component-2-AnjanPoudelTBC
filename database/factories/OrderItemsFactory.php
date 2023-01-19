<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItems>
 */
class OrderItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $num = 1;
        return [
            'order_id' =>  fake()->numberBetween(1, 5),
            'user_id' =>  3,
            'quantity' => fake()->numberBetween(1, 5),
            'product_id' => fake()->numberBetween(1, 45),
            'price' => fake()->randomFloat(1, 2, 20),
        ];
    }
}
