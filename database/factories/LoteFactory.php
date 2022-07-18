<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class LoteFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => 'lote_' . random_int(1, 10000),
            'zone' => fake()->city(),
            'weight' => fake()->numberBetween(100, 300) . ' KG',
            'quantity' => random_int(4, 200),
            'price' => number_format(fake()->numberBetween(10000000, 100000000), 0) . ' GS',

            'category_id' => random_int(1, 5),
            'draft' =>  false


        ];
    }
}
