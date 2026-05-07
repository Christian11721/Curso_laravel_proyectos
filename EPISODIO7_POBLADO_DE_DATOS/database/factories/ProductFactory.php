<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Termwind\Components\Paragraph;

use function Laravel\Prompts\text;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'short_description'=>fake()->sentence() ,
            'description'=>fake()->paragraph(3),
            'price'=> fake()->numberBetween(1,150),
        ];
    }
}
