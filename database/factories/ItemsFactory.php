<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Items>
 */
class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'item_name' => fake()->name(),
            'item_desc' => fake()->paragraph(),
            'price' => '1000',
            'image' => "https://picsum.photos/id/" . fake()->numberBetween(1, 200) . "/640/" . floor(640 * 1.414),
        ];
    }
}
